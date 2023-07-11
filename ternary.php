<?php
    $www = 123;

    $msg_1 = $www > 100 ? "Large" : "Small";

    echo "First: $msg_1";  

    echo "<br>";

    $msg_2 = ( $www % 2 == 0 ) ? "Even" : "Odd";
    
    echo "Second: $msg_2";

    echo "<br>";

    // type conversion
    // 1 is true, 0 is false
    $msg_3 = ( $www % 2 ) ? "Odd" : "Even";
    
    echo "Second: $msg_3";
?>
