<?php
    // a++ and a-- print a, and then increase and decrease a
    // ++a and --a increase and decrease a, and then print a
    echo "<h3>Postincrement (a++)</h3>";
    $a = 5;
    echo "Should be 5: " . $a++ . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";

    echo "<h3>Preincrement (++a)</h3>";
    $a = 5;
    echo "Should be 6: " . ++$a . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";

    echo "<h3>Postdecrement (a--)</h3>";
    $a = 5;
    echo "Should be 5: " . $a-- . "<br />\n";
    echo "Should be 4: " . $a . "<br />\n";

    echo "<h3>Predecrement (--a)</h3>";
    $a = 5;
    echo "Should be 4: " . --$a . "<br />\n";
    echo "Should be 4: " . $a . "<br />\n";
?>