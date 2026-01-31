<?php

echo '<h1>Palindrome  Checker</h1>';



function isPalindrome($num){

    $number = $num;
    $sum = 0;
    while(floor($number)){

        //floor is used to estimate the integer value of any float result I might get 
        
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number /10;
    }

    return $sum==$num;
}
echo isPalindrome(-121) ? "It's a Palindrome" : "Not a Palindrome";
echo '<br>';
echo isPalindrome(666) ? "It's a Palindrome" : "Not a Palindrome";





















// $string = 'lol';
// $convert = strrev($string);


// if($string == $convert){

//     echo $convert . 'is a palindrome';

// } else {
//     return false;
// }

// function isPalindrome($string){

// $convert = strrev($string);

// if($string == $convert){

//     echo $convert  .  ' is a palindrome';

// } else {
//      return $string  .  ' is not a palindrome!';
//  }
// }
// echo isPalindrome('1001');


?>