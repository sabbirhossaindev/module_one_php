<?php
// variable shopping
$fname = "Sabbir";
$lname = "Hossain";
$middlename = "nothing";

printf('His name is %3$s %1$s %2$s', $fname, $lname, $middlename); //His name is nothing Hossain Sabbir
echo "\n";

$n = 3.4434;
printf("%.2f", $n); // "%.2f dila . er por 2 ta print hoba"
echo "\n";

$a = 123; // 0123
$b = 27; // 0027

printf("%04d \n", $a);
printf("%04d \n", $b);

$c = 123;
$d = 27;

printf("%08.2f \n", $a); //00123.00
printf("%08.2f \n", $b);  //00027.00