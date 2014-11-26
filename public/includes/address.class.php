<?php

include "includes/config.inc.php";

Class Address {
	
	public function __construct($post, $dbc) {
		$this->$dbc;
		$this->sanitize($post);
	}

	protected $street;
	protected $state;
	protected $city;
	protected $zip;

	public $passedValidation = false;

	private function sanitize($post) {
		foreach($post as $key => $value) {
			$post[$key] = htmlspecialchars(strip_tags($value));
		}
		$this->validatePerson($post);
	}

	private function validatePerson($post) {
		if(isset($post['street']) && isset($post['state']) && isset($post['city']) && isset($post['zip'])) {
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

	public function insert_new_address() {
		$stmt = $dbc->prepare("INSERT INTO addresses(street, city, state, zip)
							   VALUES(:street, :city, :state, :zip)");
		$stmt->bindValue(":street", $new_entry['street'], PDO::PARAM_STR);
		$stmt->bindValue(":city", $new_entry['city'], PDO::PARAM_STR);
		$stmt->bindValue(":state", $new_entry['state'], PDO::PARAM_STR);
		$stmt->bindValue(":zip", $new_entry['zip'], PDO::PARAM_STR);
		$stmt->execute();
		$add_id = $dbc->lastInsertId();
	}
}

?>