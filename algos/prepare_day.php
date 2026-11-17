<?php


function prepare_day(mysqli $db, int $depot_id, string $date): array {
    $depots = do_query_inject_unsafe($db, "SELECT * FROM locaties WHERE (type = 'DEPOT' AND id = $depot_id)");
    if (count($depots) == 0) { return []; }
    $depot = $depots[0];

    $result = do_query_inject_unsafe($db, "SELECT DISTINCT * FROM locaties WHERE id IN (SELECT naar FROM bestellingen WHERE (van = $depot_id AND datum = '$date'))");
    $locations = array_merge([$depot], $result);

    return $locations;
}