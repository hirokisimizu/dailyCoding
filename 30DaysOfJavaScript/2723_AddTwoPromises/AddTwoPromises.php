<?php

/**
 * @param callable $fn1
 * @param callable $fn2
 * @return mixed
 */

 function addTwoResults($fn1, $fn2) {
    $result1 = $fn1();
    $result2 = $fn2();

    return $result1 + $result2;
 }

 $fn1 = function() {
    sleep(1);
    return 10;
 };

 $fn2 = function() {
    sleep(1);
    return 23;
 };

 $result = addTwoResults($fn1, $fn2);
 echo $result;