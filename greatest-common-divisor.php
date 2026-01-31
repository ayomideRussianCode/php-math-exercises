<?php 

echo "<h1>Greatest Common Divisor</h1>";

//since we're finding a GCD of two positive integers, we need 2 numbers

function findGcd($a, $b){


    //min is used here to ensure the search for the gcd stops at the value of rhe smaller number
    
    $minValue = min($a, $b);
    $gcd = 0;

    for($i =1; $i<=$minValue; $i++){

        if($a % $i == 0 && $b % $i ==0){
            $gcd = $i;
        }
    }
    return $gcd;
}
echo "GCD: " . findGcd(5, 100);

?>