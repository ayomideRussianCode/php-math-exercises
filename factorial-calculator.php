<?php

echo '<h1>Factorial Calculator</h1>';


function factorial ($num) {

    $factorial = 1;

    for($i=1; $i<=$num; $i++) {

        $factorial = $factorial * $i;


}
    return $factorial;
}


echo factorial(0). 'is the factorial of';

?>

