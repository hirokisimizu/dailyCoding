<?php

class Expect {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
    
    public function toBe($expected) {
        if ($this->value === $expected) {
            return true;
        } else {
            throw new Exception("Not Equal");
        }
    }

    public function notToBe($expected) {
        if ($this->value !== $expected) {
            return true;
        } else {
            throw new Exception("Equal");
        }
    }
}

// テストケース
function expect($value) {
    return new Expect($value);
}

try {
    var_dump(["value" => expect(5)->toBe(5), "success"]);
} catch (Exception $e) {
    var_dump(["error" => $e->getMessage()]);
}