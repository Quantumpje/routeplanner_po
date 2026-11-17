<?php


function connect_to_db(): mysqli {
    try { $mysqli = new mysqli("localhost", "root", "root", "routeplanner_po"); return $mysqli; }
    catch (Exception $e) { die("De verbinding met de database vindt jou niet leuk: " . $e); }
}


function do_query_inject_unsafe(mysqli $db, string $query): array {
    $result = $db->query($query);
    $arr = [];
    while ($row = $result->fetch_assoc()) { $arr[] = $row; }

    return $arr;
}