<?php 

echo "<h1>Fibonacci Sequence Generator</h1>";

function fibonacci($n){

    $n1 = 1;
    $n2 = 0;
    for($index = 1; $index <= $n; $index++){

       echo $n2. ',';

      $nth = $n1 + $n2;
      $n1 = $n2;
      $n2 = $nth;
        
    }

}
echo fibonacci(7);


?>

