<?php

echo '<h1>Factorial Calculator</h1>';


function factorial ($num) {

    //factorial variable initialized to 1;
    $factorial = 1;
    
//as long is the index (i) is less than or equals $num, it continues to calculate in the loop
    for($i=1; $i<=$num; $i++) {

        $factorial = $factorial * $i;

}
    return $factorial;
}

// $output = factorial(5);

echo factorial(5) .  ' is the factorial';

?>

