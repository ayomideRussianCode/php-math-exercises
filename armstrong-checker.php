<?php

echo '<h1>Armstrong Number Checker</h1>';

function isArmstrong($number){

    //convert number to string to get the length
$originalNumber = $number;
$length = strlen((string)$number);
$output = 0;

while($number > 0){

    $digit = $number % 10;
    $output = $output + pow($digit, $length);
    $number = floor($number/10);
}

if ($output == $originalNumber){

    return true;
} else{
    return false;
}
}
echo isArmstrong(153) ? "Armstrong" : "Not Armstrong";  
echo '<br>';
echo isArmstrong(123) ? "Armstrong" : "Not Armstrong"; 

?>