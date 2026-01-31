<?php

echo '<h1>Power Calculator</h1>';

// $base = 2;
// $exponent = 4;
// $pow = 

// function calcPower($base, $exponent){
    
//     $pow =  $base ** $exponent;

//     return $pow;

// }
// echo  calcPower(2, 4);


function calcPower ($base , $exponent){

    $power = 1;

    for($i = 1; $i<= $exponent; $i++){

        $power = $power * $base;
    }

    return $power;
}

echo calcPower(2, 2);

?>