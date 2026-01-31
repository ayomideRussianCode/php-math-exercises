<?php

echo '<h1>Sum of Digits</h1>';


// $number = str_split('1234');
// echo array_sum($number);
// $add = implode('+', $number);





// function sumOfDigits($number){
//     $digits = str_split($number);
//     return array_sum($digits);
// }
// echo sumOfDigits(123456);


function sumOfDigits($number){

    $sum = 0;

    while($number > 0){

        $digit = $number % 10;
        $sum = $sum + $digit;

        $number = floor($number/10);
    }
    return $sum;
}

echo 'Sum: ' . sumOfDigits(12345);
?>
