<?php
    // all statements below are equal 

    if (123 == "123") print ("Equality 1");

    echo "<br>";

    if (123 == "100" + 23 ) print ("Equality 2");

    echo "<br>";


    // TRUE == "1"
    if (TRUE == "1") print ("Equality 3");

    echo "<br>";


    // FALSE == "0"
    if (FALSE == "0") print ("Equality 4");
    
    echo "<br>";

    // 5 < 6 => TRUE => 1
    echo 5 < 6;

    echo "<br>";

    // "3" - "2" = 1
    echo "3" - "2";

    echo "<br>";

    // TRUE == 1
    if ( (5 < 6) == "2" - "1") print ("Equality 5");

    echo "<br>";


    // 5 < 6 => TRUE => 1
    if ( (5 < 6) === TRUE) print ("Equality 6");
?>