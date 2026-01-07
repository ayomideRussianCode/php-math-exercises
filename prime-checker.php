<?php

function isPrime($number) {

    //numbers less than 2 are not prime
    if($number < 2){
        return false;
    }
    for($i=2; $i < $number/2; $i++){
        if($number % $i == 0){
            return false;
        }
    }
    return true;


}
echo isPrime(67) ? "Prime" : "Not Prime";
echo '<br>';
echo isPrime(19) ? "Prime" : "Not Prime";
echo '<br>';
echo isPrime(1957) ? "Prime" : "Not Prime";
echo '<br>';
echo isPrime(2) ? "Prime" : "Not Prime";
echo '<br>';
echo isPrime(68) ? "Prime" : "Not Prime";


?>