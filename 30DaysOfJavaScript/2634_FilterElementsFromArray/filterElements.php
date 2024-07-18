<?php


/**
 * Filters an array using a custom function.
 *
 * @param array $arr The array to filter.
 * @param callable $fn A function that evaluates each element and index, returns true if the element should be kept.
 * @return array The filtered array containing only elements that passed the function's test.
 */
function filterArray($arr, $fn) {
    $result = [];
    foreach ($arr as $index => $value) {
        if ($fn($value, $index)) {  // Check if the current element and index satisfy the function
            $result[] = $value;
        }
    }
    return $result;
}

// Example usage
print_r(filterArray([0, 10, 20, 30], function($n) { return $n > 10; }));  // Outputs: [20, 30]
print_r(filterArray([1, 2, 3], function($n, $i) { return $i === 0; }));   // Outputs: [1]
print_r(filterArray([-2, -1, 0, 1, 2], function($n) { return $n + 1; })); // Outputs: [-2, 0, 1, 2]