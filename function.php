<?php
// break example
for($i = 20; $i <50; $i++){
    if($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
        break;
    }
}

// continue example
for($i = 20; $i < 30; $i++){
    if($i < 27){
        continue;
    }
    echo $i;
    echo PHP_EOL;
}

$veryOld = 0;
$old = 1;
$new = 1;

for($i = 0; $i < 10;$i++){
    echo $veryOld . " ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}