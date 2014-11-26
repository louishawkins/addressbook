<?php

include 'includes/config.inc.php';

Class Person {
	
public function __construct($post, $dbc) {
	$this->$dbc;
	$this->sanitize($post);
}

protected $first_name; = $new_entry['first_name'];
protected $last_name; = $new_entry['last_name'];
protected $ph_num; = $new_entry['ph_num'];
protected $image; = $new_entry['image'];

public $passedValidation = false;

private function sanitize($post) {
	foreach($post as $key => $value) {
		$post[$key] = htmlspecialchars(strip_tags($value));
	}
	$this->validatePerson($post);
}

private function validatePerson($post) {
	if(isset($post['first_name']) && isset($post['last_name']) && isset($post['ph_num'])) {
		$this->passedValidation = true;
	}
}

public function read_contact_with_addresses() {
	$query = "SELECT p.p_id, p.first_name, p.last_name, p.ph_num, p.image, a.add_id, a.street, a.city, a.state, a.zip 
				FROM people AS p
				JOIN address_person AS pivot ON p.p_id = pivot.person_id
				JOIN addresses AS a ON a.add_id = pivot.address_id";

	$stmt = $dbc->prepare($query);
	$stmt->execute();

}

public function insert_new_person() {
	$query = $dbc->prepare("INSERT INTO people(first_name, last_name, ph_num, image)
							VALUES(:first_name, :last_name, :ph_num, :image)");
	$query->bindValue(":first_name", $new_entry['first_name'], PDO::PARAM_STR);
	$query->bindValue(":last_name", $new_entry['last_name'], PDO::PARAM_STR);
	$query->bindValue(":ph_num", $new_entry['ph_num'], PDO::PARAM_STR);
	$query->bindValue(":image", $new_entry['image'], PDO::PARAM_STR);
	$query->execute();
	$p_id = $dbc->lastInsertId();
}

public function split_name($input) {
		$result = array();
		$parts = explode(" ", $input, 2);
		$result['last_name'] = array_pop($parts);
		$result['first_name'] = implode(" ", $parts);
		return $result;
}


?>