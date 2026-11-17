<?php


function squared_distance(int | float $x1, int | float $y1, int | float $x2, int | float $y2): int | float {
    return ($x2 - $x1) ** 2 + ($y2 - $y1) ** 2;
}

function distance(int | float $x1, int | float $y1, int | float $x2, int | float $y2): int | float {
    return sqrt(squared_distance($x1, $y1, $x2, $y2));
}