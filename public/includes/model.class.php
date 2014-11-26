<?php

include 'includes/config.inc.php';

function uploadImage() {
	$target_dir = './img/';
	$target_file = $target_dir . basename($_FILES["uploadimg"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["uploadimg"]["tmp_name"], $target_file);
	return $target_file;
}

function split_name($input) {
		$result = array();
		$parts = explode(" ", $input, 2);
		$result['last_name'] = array_pop($parts);
		$result['first_name'] = implode(" ", $parts);
		return $result;
}
// Check for images to upload and do it.
if(isset($_POST['submit-img']) && !isset($_POST['name'])) {	
	$new_image_path = uploadImage($_FILES);
	$p_id = (integer) $_POST['submit-img'];
	
	$query = "UPDATE people SET image = :new_image_path WHERE p_id = :p_id"; 
	$stmt = $dbc->prepare($query);
	$stmt->bindValue (':new_image_path', $new_image_path, PDO::PARAM_STR);
	$stmt->bindValue (':p_id', $p_id, PDO::PARAM_INT);   
	$stmt->execute();  

}

$update = false;
// Check POST for new entries and insert them into the database.
if (!empty($_POST) && isset($_POST['name']) && !isset($_POST['update-person'])) {

	$new_entry = array();

	$split_name = split_name($_POST['name']);

	try {
		if(isset($_POST['name'])) {
			$new_entry['first_name'] = $split_name['first_name'];
		}if(isset($_POST['name'])) {
			$new_entry['last_name'] = $split_name['last_name'];
		}if(isset($_POST['ph_num'])) {
			$new_entry ['ph_num'] = $_POST['ph_num'];
		} if(isset($_POST['street'])) {
			$new_entry ['street'] = $_POST['street'];
		} if(isset($_POST['city'])) {
			$new_entry ['city'] = $_POST['city'];
		} if(isset($_POST['state'])) {
			$new_entry ['state'] = $_POST['state'];
		} if(isset($_POST['zip'])) {
			$new_entry ['zip'] = $_POST['zip'];
		}

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


//Check for POST to UPDATE a current record.
if(!empty($_POST) && isset($_POST['update-person-id'])) {
	$update_ids_array = explode(",", $_POST['update-person-id']);
	$update_p_id = $update_ids_array[0];
	$update_add_id = $update_ids_array[1];
	$update_entry = array();

	$split_name = split_name($_POST['editName']);
	try {
		if(isset($_POST['editName'])) {
			$update_entry['first_name'] = $split_name['first_name'];
		}if(isset($_POST['editName'])) {
			$update_entry['last_name'] = $split_name['last_name'];
		}if(isset($_POST['editPhone'])) {
			$update_entry ['ph_num'] = $_POST['editPhone'];
		} if(isset($_POST['editStreet'])) {
			$update_entry ['street'] = $_POST['editStreet'];
		} if(isset($_POST['editCity'])) {
			$update_entry ['city'] = $_POST['editCity'];
		} if(isset($_POST['editState'])) {
			$update_entry ['state'] = $_POST['editState'];
		} if(isset($_POST['editZip'])) {
			$update_entry ['zip'] = $_POST['editZip'];
		}

		//------------------inserting person data into people table
		$stmt = $dbc->prepare("UPDATE people SET first_name = :first_name, last_name = :last_name, ph_num = :ph_num WHERE p_id = :p_id");

		$stmt->bindValue (':first_name', $update_entry['first_name'], PDO::PARAM_STR);
        $stmt->bindValue (':last_name', $update_entry['last_name'], PDO::PARAM_STR);
        $stmt->bindValue (':ph_num', $update_entry['ph_num'], PDO::PARAM_STR);
        $stmt->bindValue (':p_id', $update_p_id, PDO::PARAM_INT);
    	$stmt->execute();

    	//-------------------inserting address data into addresses table
    	$stmt2 = $dbc->prepare("UPDATE addresses SET street = :street, city = :city, state = :state, zip = :zip WHERE add_id = :add_id");

		$stmt2->bindValue (':street', $update_entry['street'], PDO::PARAM_STR);
  		$stmt2->bindValue (':city', $update_entry['city'], PDO::PARAM_STR);
     	$stmt2->bindValue (':state', $update_entry['state'], PDO::PARAM_STR);
	    $stmt2->bindValue (':zip', $update_entry['zip'], PDO::PARAM_STR);
	    $stmt2->bindValue (':add_id', $update_add_id, PDO::PARAM_STR);
     	$stmt2->execute();

		} catch (Exception $e) {
			$error_2 = $e->getMessage();
	}

}

// Check for stuff to remove
if(isset($_GET['removeId'])){
	$remove_ids_array = explode(",", $_GET['removeId']);
	$remove_p_id = $remove_ids_array[0];
	$remove_add_id = $remove_ids_array[1];
	
    $delete = "DELETE FROM people WHERE p_id = :p_id";
    $stmt = $dbc->prepare($delete);
    $stmt->bindValue(':p_id', $remove_p_id, PDO::PARAM_INT);
    $stmt->execute();

    $delete2 = "DELETE FROM addresses WHERE add_id = :add_id";
    $stmt2 = $dbc->prepare($delete2);
    $stmt2->bindValue(':add_id', $remove_add_id, PDO::PARAM_INT);
    $stmt2->execute();

    $delete3 = "DELETE FROM address_person WHERE address_id = :add_id";
    $stmt3 = $dbc->prepare($delete3);
    $stmt3->bindValue(':add_id', $remove_add_id, PDO::PARAM_INT);
    $stmt3->execute(); 
    
}

// Get what is now in the database and put it in [rows] to echo.
$query = "SELECT p.p_id, p.first_name, p.last_name, p.ph_num, p.image, a.add_id, a.street, a.city, a.state, a.zip 
			FROM people AS p
			JOIN address_person AS pivot ON p.p_id = pivot.person_id
			JOIN addresses AS a ON a.add_id = pivot.address_id";
$stmt = $dbc->prepare($query);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

?>