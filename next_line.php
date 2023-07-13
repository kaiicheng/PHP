<?php
    // Note: The character \n writes a newline in UNIX while for Windows there is the two character sequence: \r\n. 
    // To be on safe side use the \r\n instead.
    
    // use the PHP newline characters \n or \r\n to create a new line inside the source code
    
    echo "If you view the page source \r\n you will find a newline in this string.";
    
    echo "<br>";

    echo "<br>";
    
    // However, if you want the line breaks to be visible in the browser too, you can use the PHP nl2br() function 
    // which inserts HTML line breaks before all newlines in a string.
    // nl2br will turn \n or \r\n into <br\>
    echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");

    echo nl2br("\n This is the end.");

    echo "<br>";
?>