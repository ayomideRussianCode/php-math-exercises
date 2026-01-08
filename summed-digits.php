<?php


// $number = str_split('1234');
// echo array_sum($number);
// $add = implode('+', $number);





function sumOfDigits($number){
    $digits = str_split($number);
    return array_sum($digits);
}
echo sumOfDigits(123456);
?>