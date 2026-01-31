<?php 

echo "<h1>Fibonacci Sequence Generator</h1>";

function fibonacci($n){

//set values
    $n1 = 1;
    $n2 = 0;

    //loop to generate fibonacci sequence
    for($index = 1; $index <= $n; $index++){

        //output zero first
        echo $n2 . ',';

    //calculation
      $nth = $n1 + $n2;
      $n1 = $n2;
      $n2 = $nth;

        
    }
    

}
echo fibonacci(7);


?>



