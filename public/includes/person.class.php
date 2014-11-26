<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'addressbook');
define ('DB_USER', 'pkuzma101');
define ('DB_PASS', 'duster2');

require "dbconnect.php";

class Person {

public $new_post = array();
public $dbc;

function __construct($post, $dbc) {
	$this->new_post = $post;
	$this->dbc = $dbc;
}

$stmt = $dbc->prepare("SELECT first_name, last_name, p_id, ph_num, image FROM people");
$stmt->execute();

public $first_name = $stmt->fetchColumn(1);

public $last_name = $stmt->fetchColumn(2);

public $ph_num = $stmt->fetchColumn(3);

public $image = $stmt->fetchColumn(4);

function split_name($input) {
		$parts = explode(" ", $input, 2);
		$last_name = array_pop($parts);
		$first_name = implode(" ", $parts);
		return $first_name . " " . $last_name;
}


}

$tor = new Person;
$this->first_name;

if(isset($_POST)){
	$new_person = new Person($_POST, $dbc);
}
?>

