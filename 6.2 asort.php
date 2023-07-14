<?php
    // sort an array in ascending order and maintain index association
    
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    
    asort($fruits);
    
    foreach ($fruits as $key => $val) {
        echo "$key = $val\n";
        echo "<br>";
    }
?>

<!-- 
c = apple
b = banana
d = lemon
a = orange
 -->
