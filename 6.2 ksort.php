<?php
    // sort an array by key in ascending order
    
    $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
    
    ksort($fruits);
    
    foreach ($fruits as $key => $val) {
        echo "$key = $val\n";
        echo "<br>";
    }
?>

<!-- 
a = orange
b = banana
c = apple
d = lemon
 -->