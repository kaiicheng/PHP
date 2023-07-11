<?php
    $a = 56; $b = 12;

    $c = $a / $b;
    
    echo "C: $c";

    echo "<br>";


    // TRUE is 1
    // 100 + 36.25 + 1 = 137.25
    $d = "100" + 36.25 + TRUE;
    
    echo "D: $d (num)";

    echo "<br>";


    echo "D2: ". (string) $d . " (string)";

    echo "<br>";

    // (int) 9.9 => 9
    // 9 - 1 = 8
    $e = (int) 9.9 - 1;

    echo "E: $e";

    echo "<br>";


    // "sam" turned into number => 0
    // 0 + 25 = 25
    $f = "sam" + 25;

    echo "F: $f";

    echo "<br>";


    // string concatenation
    // sam . 25 =sam25
    $g = "sam" . 25;

    echo "G: $g\n";
?>