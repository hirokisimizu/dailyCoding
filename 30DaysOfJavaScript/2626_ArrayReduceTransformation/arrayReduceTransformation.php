<?php

/**
 * Reduces an array using a reducer function and an initial value
 * 
 * nums[]と言う配列と，配列の数を減らす関数fnと，初期値のinitが与えられる。配列の各要素に
 * 関数fnを実行し前の計算結果を引数として渡すことで得られる値を最終結果resultとして返す
 * この結果は次の操作によって達成されます：val = fn(init, nums[0])、val = fn(val, nums[1])、
 * val = fn(val, nums[2])、... 
 * このようにして配列の全ての要素が処理されるまで続けます。最終的な val の値が返されます。
 * 
 * @param array $nums - the array of numbers to reduce.
 * @param callable $fn - the reducer function.
 * @param int $init - the initial value.
 * @return int - the reduced value.
 */
class ArrayReducer {
    private $nums;
    private $fn;
    private $init;

    public function __construct(array $nums, callable $fn, int $init) {
        $this->nums = $nums;
        $this->fn = $fn;
        $this->init = $init;
    }

    public function reduceArrayElements(): int {
        $result = $this->init;
        foreach ($this->nums as $num) {
            $result = call_user_func($this->fn, $result, $num);
        }
        return $result;
    }
}

// 例えば，
$nums1 = [1, 2, 3, 4];
$fn1 = function($accum, $curr) {
    return $accum + $curr;
};
$init1 = 0;
$reducer1 = new ArrayReducer($nums1, $fn1, $init1);
echo $reducer1->reduceArrayElements();

