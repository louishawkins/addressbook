<?php
require 'config.inc.php';

$query = "SELECT first_name, last_name, phone, image FROM persons";
$stmt = $dbc->prepare($query);
// $stmt->bindValue(':items_per_page', $items_per_page, PDO::PARAM_INT);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

var_dump($rows);

?>