<?php

function split_name($input) {
		$parts = explode(" ", $input, 2);
		$last_name = array_pop($parts);
		$first_name = implode(" ", $parts);
		return "first name:" . $first_name . " ". "last name:" . $last_name;
}

echo split_name("Billy Joe Armstrong");


?>

