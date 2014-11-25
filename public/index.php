<?php 
//include 'includes/model.class.php'; //model
//include 'add_address.php'; //add address modal
//include 'edit_address.php'; //edit address modal
//include 'edit_person.php'; //edit person modal

include 'includes/config.inc.php';



//-----------checking post and inserting posted data
if (!empty($_POST)) {

	try {
		if(isset($_POST['first_name'])) {
			$new_entry['first_name'] = ucfirst($_POST['first_name']);
		}if(isset($_POST['last_name'])) {
			$new_entry['last_name'] = ucfirst($_POST['last_name']);
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

?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<h1>Address Book</h1>

<form method="POST" action="index.php">


		<label for="First Name"></label>
		<input type="text" id="first_name" name="first_name" placeholder="enter first name here">

		<label for="Last Name"></label>
		<input type="text" id="last_name" name="last_name" placeholder="enter last name here">

		<label for="phone Number"></label>
		<input type="text" id="ph_num" name="ph_num" placeholder="enter number here">

		<label for="street"></label>
		<input type="text" id="street" name="street" placeholder="enter street here">

		<label for="City"></label>
		<input type="text" id="city" name="city" placeholder="enter city here">

		<label for="State"></label>
		<input type="text" id="state" name="state" placeholder="enter state here">

		<label for="zip"></label>
		<input type="text" id="zip" name="zip" placeholder="enter zip here">

		<button type="submit">add a park</button>

	</form>


</div> <!-- body container -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>