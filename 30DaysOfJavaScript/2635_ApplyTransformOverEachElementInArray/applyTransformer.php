<?php

class ArrayTransformer {
    /**
     * 配列の各要素に特定の関数を適用し，その結果を新しい配列として返す。
     * @param array $arr[] input
     * @param callable $fn
     * @return array new array that was transformed by $fn
     */
    
    public function map(array $arr, callable $fn): array {
        $result = [];
        foreach($arr as $index => $value) {
            $result[] = $fn($value, $index);
        }
        return $result;
    }
    
    
    /**
     * Increases each array element by 1.
     * @param int $n The element's value.
     * @param return int
     */
    public function plusOne(int $n): int {
        return $n += 1;
    }

    /**
     * Increase each array element by its index.
     * @param int $n The element's value.
     * @param return 
     * 
     * 
     */
    public function plusI(int $n, int $i): int {
        return $n += $i;
    }
}

$transformer = new ArrayTransformer();
$arr1 = [1, 2, 3];

// Using plusOne method
echo "Using plusOne method:\n";
print_r($transformer->map($arr1, [$transformer, 'plusOne'])); // [2, 3, 4]

$arr2 = [1, 2, 3];
// Using plusI method
echo "Using plusI method:\n";
print_r($transformer->map($arr2, [$transformer, 'plusI'])); // [1, 3, 5]