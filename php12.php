<?php
    function evenOrOddNumber($n){
        if($n % 2 == 0){
            return true;
        }
        return false;
    }

    $x = 12;
    if(evenOrOddNumber($x)){
        echo "{$x} is an even Number";
    }else{
        echo "{$x} is an odd Number";
    }