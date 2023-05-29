<?php

function serve ($food, $itemOfNumber="1 cup"){
    echo "{$itemOfNumber} of {$food} has/have been served.";
}

// 
function sum(int $x, int $y, int $z):int {
    return ($x+$y+$z);
}
echo sum(6, 7, 8);
