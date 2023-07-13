<?php
    $x = 7;

    if ($x < 2) {
        echo "Small";
    } elseif ( $x < 10 ) {
        echo "Medium";
    } else {
        echo "Large";
    }

    echo "<br>";

    echo "7 > 2 and 7 < 10.";

    echo "<br>";

    echo "All done.";

    echo "<br>";
?>

<br>

<!-- curly braces are not required -->
<?php
    $x = 6;

    if ($x < 2) echo "Small";
    elseif ( $x < 10 ) echo "Medium";
    else echo "Large";

    echo "<br>";

    echo "6 > 2 and 6 < 10.";

    echo "<br>";

    echo "All done.";

    echo "<br>";
?>