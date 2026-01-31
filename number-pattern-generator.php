<?php

//the goal is to make sure the next digit is added to the initial number  and the number the function accepts is how many times it will iterate

echo '<h1>Number Pattern Generator</h1>';

function triangularNumbers($num) {

    $sum = 0;

    for($i = 1; $i <=$num; $i++){

        $sum = $sum + $i;

        echo $sum . ',';
    }

}

echo triangularNumbers(7);


 ?>