<?php 
    // if condition is true, the pass this round and continue next round
    for($count=1; $count<=10; $count++) {
        if ( ($count % 2) == 0 ) continue;
        echo "Count: $count";
        echo "<br>";
    }
    echo "Done!";
?>
