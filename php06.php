<?php
// leap year condition with php example;
// 1- divisible by 4 ? 
// 2- divisible by 100 ? 
// 3- divisible by 400 ? 

$year = 2012;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year.";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is a not a leap year.";
}elseif($year % 4 == 0){
    echo "{$year} is a leap year.";
}else{
    echo "{$year} is not a leap year.";
}
echo "\n";

// short cut wow it's working.....
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year.";
}else{
    echo "{$year} is not a leap year.";
}

// year = 2012;
if(true && (true || true)){
    // This condition works like this.
}