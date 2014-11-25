<?php
/* if using my sample database (addressbook_db)

require 'config.inc.php';

$query = "SELECT persons_id, first_name, last_name, phone, image FROM persons";
$stmt = $dbc->prepare($query);
// $stmt->bindValue(':items_per_page', $items_per_page, PDO::PARAM_INT);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

?>
*/

include 'includes/config.inc.php';

//-----------checking post and inserting posted data
if (!empty($_POST)) {
	var_dump($_POST);
	$new_entry = array();

	try {
		if(isset($_POST['name'])) {
			$new_entry['first_name'] = ucfirst($_POST['name']);
		}if(isset($_POST['name'])) {
			$new_entry['last_name'] = ucfirst($_POST['name']);
		}if(isset($_POST['ph_num'])) {
			$new_entry ['ph_num'] = ucfirst($_POST['ph_num']);
		} if(isset($_POST['street'])) {
			$new_entry ['street'] = ucfirst($_POST['street']);
		} if(isset($_POST['city'])) {
			$new_entry ['city'] = ucfirst($_POST['city']);
		} if(isset($_POST['state'])) {
			$new_entry ['state'] = ucfirst($_POST['state']);
		} if(isset($_POST['zip'])) {
			$new_entry ['zip'] = ucfirst($_POST['zip']);
		}

		//$validate_obj->validate_field($new_entry);;

		//------------------inserting person data into people table
		$stmt = $dbc->prepare("INSERT INTO people (first_name, last_name, ph_num)
				VALUES (:first_name, :last_name, :ph_num)");

		$stmt->bindValue (':first_name', $new_entry['first_name'], PDO::PARAM_STR);
        $stmt->bindValue (':last_name', $new_entry['last_name'], PDO::PARAM_STR);
        $stmt->bindValue (':ph_num', $new_entry['ph_num'], PDO::PARAM_STR);
    	$stmt->execute();
    	$person_id = $dbc->lastInsertId();

    	//-------------------inserting address data into addresses table
    	$stmt2 = $dbc->prepare("INSERT INTO addresses (street, city, state, zip)
				VALUES (:street, :city, :state, :zip)");

		$stmt2->bindValue (':street', $new_entry['street'], PDO::PARAM_STR);
  		$stmt2->bindValue (':city', $new_entry['city'], PDO::PARAM_STR);
     	$stmt2->bindValue (':state', $new_entry['state'], PDO::PARAM_STR);
	    $stmt2->bindValue (':zip', $new_entry['zip'], PDO::PARAM_STR);
     	$stmt2->execute();
     	$address_id = $dbc->lastInsertId();

     	//-------------------inserting address_id and person_id into address_person table
     	$stmt3 = $dbc->prepare("INSERT INTO address_person (address_id, person_id)
     							VALUES  (:address_id, :person_id)");

     	$stmt3->bindValue (':address_id', $address_id, PDO::PARAM_INT);
     	$stmt3->bindValue (':person_id', $person_id, PDO::PARAM_INT);
     	$stmt3->execute();

		} catch (Exception $e) {
			$error_2 = $e->getMessage();
	}
}

$query = "SELECT p.p_id, p.first_name, p.last_name, p.ph_num, p.image, a.street, a.city, a.state, a.zip 
			FROM people AS p
			JOIN address_person AS pivot ON p.p_id = pivot.person_id
			JOIN addresses AS a ON a.add_id = pivot.address_id";
$stmt = $dbc->prepare($query);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

?>