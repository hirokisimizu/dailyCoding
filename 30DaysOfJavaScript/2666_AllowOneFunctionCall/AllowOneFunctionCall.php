<?php
/**
 * Given a function `fn`, return a new function that is identical to the
 * original function except that it ensures `fn` is called at most once.
 * 
 * - The first time the returned function is called, it should return the same
 * ruesult as `fn`
 * - Every subsequent time it is called, it should return undefined
 * 
 * references: The difference btween `at most once`, `at least once` and `exactly once`
 * https://qiita.com/e99h2121/items/d3e2ecb46e42019a9910
 * 
 * 
 * ~~~~~~~~~~~~~~~~~~~~ note ~~~~~~~~~~~~~~~~~~~~~~~~
 * クロージャ関数：外部スコープから変数を持ってきて使用できる
 * (例)：function(...&args) use (&$called, &$result, $fn)
 * スプレッド構文（...）：関数が複数の引数を受け取る際に，それらを一つの
 * 配列にまとめて渡すことができる
 * `&`を使うことで参照して渡して，クロージャ内での変更を外部スコープでも反映
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * 
 * @param callable $fn
 * @return callable 
 */

function once(callable $fn) {
    $called = false;
    $result = null;

    return function(...$args) use (&$called, &$result, $fn) {
        if (!$called) {
            $called = true;
            $result = $fn(...$args);
            return $result;
        }
        return null;
    };
}

$fn = function($a, $b, $c) {
    return $a + $b + $c;
};

$onceFn = once($fn);

echo $onceFn(1, 2, 4) . "\n";
echo $onceFn(2, 5, 12) . "\n";
