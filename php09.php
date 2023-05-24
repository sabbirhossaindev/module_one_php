<?php
// php loops example...
// 1-10 print kor er program
for($i = 1; $i <=10; $i++){
    echo $i;
    echo PHP_EOL;
}

// 1-20 odd number print kor er program;
for($i = 1; $i <=20; $i+= 2){
    echo $i;
    echo PHP_EOL;
}

// funy type;
for($i = 1; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
    for($j=0; $j<$i;$j++){
        echo "*";
    }
}
echo PHP_EOL;

// while loop example;
$i = 0;
while($i <10){
    $i++;
    echo $i . PHP_EOL;
}
echo PHP_EOL;

// do while loop example
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);
