<?php

function connect_to_db() {
    try { $mysqli = new mysqli("localhost", "root", "root", "routeplanner_po"); return $mysqli; }
    catch (Exception $e) { die("De verbinding met de database vindt jou niet leuk: " . $e); }
}