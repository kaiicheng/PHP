<?php
    // The fruits have been sorted in alphabetical order.
    
    $fruits = array("lemon", "orange", "banana", "apple");

    sort($fruits);

    foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val;
        echo "<br>";
    }
?>