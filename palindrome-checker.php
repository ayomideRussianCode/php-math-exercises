<?php

echo '<h1>Palindrome  Checker</h1>';

// $string = 'lol';
// $convert = strrev($string);


// if($string == $convert){
  
//     echo $convert . 'is a palindrome';

// } else {
//     return false;
// }

function isPalindrome($string){

$convert = strrev($string);

if($string == $convert){
  
    echo $convert  .  ' is a palindrome';

} else {
     return $string  .  ' is not a palindrome!';
 }
}
echo isPalindrome('1001');


 ?>