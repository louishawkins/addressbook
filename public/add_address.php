<?php 

include 'includes/config.inc.php';

class Validate
{
public function validate_field ($array) 
    {
        foreach ($array as $field) {
           if (strlen($field) > 240) {
               throw new Exception ('Too long');
           }
            if (strlen($field) == 0){
                throw new Exception ('No empty fields');
            }
        }

        return $array;
    }

}

$validate_obj = new Validate;

if (!empty($_POST)){
	var_dump($_POST);

	try{
		if(isset($_POST['street'])) {
			$new_entry ['street'] = ucfirst($_POST['street']);
		} if(isset($_POST['city'])) {
			$new_entry ['city'] = ucfirst($_POST['city']);
		} if(isset($_POST['state'])) {
			$new_entry ['state'] = ucfirst($_POST['state']);
		} if(isset($_POST['zip'])) {
			$new_entry ['zip'] = ucfirst($_POST['zip']);
		}

		$stmt2 = $dbc->prepare("INSERT INTO addresses (street, city, state, zip)
				VALUES (:street, :city, :state, :zip)");

		$stmt2->bindValue (':street', $new_entry['street'], PDO::PARAM_STR);
  		$stmt2->bindValue (':city', $new_entry['city'], PDO::PARAM_STR);
     	$stmt2->bindValue (':state', $new_entry['state'], PDO::PARAM_STR);
	    $stmt2->bindValue (':zip', $new_entry['zip'], PDO::PARAM_STR);
     	$stmt2->execute();
     	$address_id = $dbc->lastInsertId();

     	var_dump($address_id);

     	//---something like: $person_id = variable we capture from $_GET on 'edit_address' page---//

     	// $stmt3 = $dbc->prepare("INSERT INTO address_person (address_id, person_id)
     	// 						VALUES  (:address_id, :person_id)");

     	// $stmt3->bindValue (':address_id', $address_id, PDO::PARAM_INT);
     	// $stmt3->bindValue (':person_id', $person_id, PDO::PARAM_INT);
     	// $stmt3->execute();

     	} catch (Exception $e) {
			$error_2 = $e->getMessage();
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>add an address</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<h1>add an address</h1>

<form method="POST" action="add_address.php">

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