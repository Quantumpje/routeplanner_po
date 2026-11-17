<?php

require "./db.php";
require "./algos/prepare_day.php";


$db = connect_to_db();

$locations = prepare_day($db, 2, "2026-11-6");

echo " | "; foreach ($locations as $location) { echo $location["naam"] . " | "; }