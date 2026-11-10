<?php

require "db.php";


$db = connect_to_db();

$result = $db->query("SELECT * FROM locaties");
$locations = [];
while ($row = $result->fetch_assoc()) { $locations[] = $row; }

echo " | ";
foreach ($locations as $location) { echo $location["naam"] . " | "; }