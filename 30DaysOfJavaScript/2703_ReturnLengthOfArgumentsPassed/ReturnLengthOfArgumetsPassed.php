<?php
/**
 * @param mixed ...$args
 * @return int
 */

function argumentsLength(...$args) {
    return count($args);
}

echo argumentsLength(1, 2, 3) . "\n";
echo argumentsLength([], 3, "abc", [1, 2, 3]);