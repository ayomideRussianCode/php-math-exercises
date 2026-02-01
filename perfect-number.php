<?php 

echo '<h1>Perfect Number</h1>';

function isPerfect($num){

    if($num < 0) {
        return false;
    }

    $sum = 0;

    for ($i=1; $i<$num; $i++){

        if($num % $i == 0){

            $sum = $sum + $i;
        }
    }
    return $sum == $num;
}

echo isPerfect(12000) ? 'Perfect' : 'Not Perfect';
?>