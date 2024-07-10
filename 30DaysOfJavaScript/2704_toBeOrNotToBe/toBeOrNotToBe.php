/**
 * @param {string} val
 * @return {Object}
 */

 <?php

class Expect {
private $value;

    public function __construct($value) {
        $this->value = $value;
    }
        
    }
    public function toBe($expected) {
        if ($this->value === $expected) {
            return true;
        } else {
            throw new Expection("Not Equall");
        }
    }

    public function notToBe($expected) {
        if ($this->value !== $expected) {
            return true;
        } else {
            throw new Expection("Eqall"); 
        }
    }
}

// テストケース
try {
    var_dump(["value" => expect(5)->toBe(5)]); // ["value" => true]
} catch (Exception $e) {
    var_dump(["error" => $e->getMessage()]);
}