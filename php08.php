<?php
// ternary operator

$number = 1700;
if(1700 == $number){
    echo "Tour Confirm.";
}elseif(1650 == $number){
    echo "Not matter it's not low amount.";
}else{
    echo "A Captain er roll Mark kor.";
}

echo "\n";

$numberInWorld = (1000 == $number) ? "Tour Confirm." : "A Captain er roll Mark kor.";
echo $numberInWorld;
echo "\n";


$num = 12;
if($num % 2 == 0){
    echo "{$num} is Even Number";
}else{
    echo "{$num} is odd Number";
}
echo "\n";

$result = ($num % 2 == 0) ? "{$num} is Even Number" : "{$num} is odd Number";
echo $result;