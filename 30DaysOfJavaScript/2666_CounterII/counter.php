<?php

class Counter {
    private $init;
    private $currentValue;

    public function __construct($init) {
        $this->init = $init;
        $this->currentValue = $init;
    }

    public function incremnt() {
        $this->currentValue += 1;
        return $this->currentValue;
    }

    public function decrement() {
        $this->currentValue -= 1;
        return $this->currentValue;
    }

    public function reset() {
        $this->currentValue = $this->init;
        return $this->currentValue;
    }
}

$counter = new Counter(5);

echo $counter->incremnt() . "\n";
echo $counter->reset() . "\n";
echo $counter->decrement() . "\n";
