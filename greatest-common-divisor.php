<?php 

echo "<h1>Greatest Common Divisor</h1>";

function findGcd($a, $b){

    $minValue = min($a, $b);
    $gcd = 0;

    for($i =1; $i<=$minValue; $i++){

        if($a % $i == 0 && $b % $i ==0){
            $gcd = $i;
        }
    }
    return $gcd;
}
echo "GCD: " . findGcd(20, 30);

?>