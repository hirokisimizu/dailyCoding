<?php
/**
 * Given a objcet or an array,
 * return if it's empty
 * - An empty object contains no key-value pairs.
 * - An empty array contains no elements.
 * 
 * We may assume the objcet or array is the output of 'Json.perse'
 */



/**
 * @param miexed $obj
 * @return bool 
 */
function isEmpty($obj) {
    if (is_array($obj)) {
        return count($obj) === 0;
    }

    if (is_object($obj)) {
        return count(get_object_vars($obj)) === 0;
    }

    return false;
}


// example excute

$example1 = (object) ["x" => 5, "y" => 42];
echo isEmpty($example1) ? 'true' : 'false';
echo "\n";


$example2 = (object) [];
echo isEmpty($example2) ? 'true' : 'false';
echo "\n";


$example3 = [null, false, true, 35, "text", 0];
echo isEmpty($example3) ? 'true' : 'false';
echo "\n";

$example4 = [];
echo isEmpty($example4) ? 'true' : 'false';
echo "\n";