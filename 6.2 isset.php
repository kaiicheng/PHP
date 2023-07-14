<?php
    // isset() does not return true for array keys that correspond to a null value, while array_key_exists() does.
    $search_array = array('first' => null, 'second' => 4);

    // return false
    print (isset($search_array['first']));

    // return true
    print (array_key_exists('first', $search_array));
?>