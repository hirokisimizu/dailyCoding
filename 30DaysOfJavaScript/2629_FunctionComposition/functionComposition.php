<?php

/**
 * class FunctionComposer
 * 
 * This class is designed to take an array of functions and compose them into a single function.
 * The composed function will excute the provided functions in reverse order 
 * passing the result of each function to the next.
 * 
 */
class FunctionComposer {
    /**
     *  @var array $functions An array of funtion to be composed.
     */
    private $functions;

    public function __construct($functions) {
        $this->functions = $functions;
    }

    /**
     * 
     * @return callable A function that represents the composition of the provided functions.
     * 
     */
    public function compose() {
        return function($x) {
            foreach (array_reverse($this->functions) as $func) {
                $x = $func($x);
            }
            return $x;
        };
    }
}

/**
 * Test the FunctionComposer class
 */

// Instantiate the FunctionComposer with an array of functions
$composer = new FunctionComposer([
    function($x) { return $x + 1; },
    function($x) { return 2 * $x; },
    function($x) { return $x * $x; }
]);
// Compose the functions into a single function
$fn = $composer->compose();

// Execute the composed function with an input of 5
echo $fn(5); // Output: 9
?>
