<?php
    $vv = "Hello World!";
    
    // 6
    echo "First: " . strpos($vv, "Wo") . "\n";

    print ("<br>");

    // 0
    echo "Second: " . strpos($vv, "He") . "\n";

    echo "<br>";

    
    // "" => empty
    echo "Third: " . strpos($vv, "ZZ") . "\n";

    echo "<br>";


    // FALSE => 0
    if (strpos($vv, "He") == FALSE) print ("Wrong A");

    echo "<br>";


    // FALSE => FALSE
    if (strpos($vv, "ZZ") == FALSE) print ("Right B");

    echo "<br>";



    if (strpos($vv, "He") !== FALSE) print ("Right C");

    echo "<br>";



    if (strpos($vv, "ZZ") === FALSE) print ("Right D");

    echo "<br>";



    print_r(FALSE); print FALSE;

    echo "Where were they?";

?>