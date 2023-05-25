<?php
$number = 3;
for($i = $n, $factorial = 1; $i > 1; $i--){
    // $factorial = $factorial * $i;
    $factorial *= $i;
}

printf("factorial of %d", $number, $factorial);