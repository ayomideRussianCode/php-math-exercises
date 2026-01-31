<?php

echo '<h1>Armstrong Number Checker</h1>';

function isArmstrong($number){

    //convert number to string to get the length
$number = $number;
$length = strlen((string)$number);
$output = 0;

for($i=1; $i<=$length; $i++){

    $rem = $number % 10;
    $output = $output + pow($rem, $length);
    $number = floor($number/10);
}

if ($output == $number){
    return true;
}
echo $output;
}
echo isArmstrong(153);


?>