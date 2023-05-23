<?php
$sabbir = 100;
$nadim = 90;

if($sabbir>=$nadim){
    echo "Sabbir has same more money then Nadim";
}elseif($sabbir>$nadim){
    echo "Sabbir has more money then Rahim";
}elseif($sabbir<$nadim){
    echo "Sabbir has money then Nadim";
}elseif($sabbir== $nadim){
    echo "Sabbir and nadim same amount of money";
}
echo "\n";

$age = 13;
if($age >=13 && $age <= 19){
    echo "This man is teenager";
}else{
    echo "This man is not teenager";
}
echo "\n";

$food = "apple"; //tuna // apple // orange
if("tuna" == $food || "salmon" == $food){
    echo "{$food} has Vitamin D";
}elseif("apple" == $food){
    echo "Apple does't Vitamin D";
}else{
    echo "We don't know if {$food} contain Vitamin D";
}