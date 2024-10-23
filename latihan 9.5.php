<?php

class Comparator {
    private $key;

    public function __construct(string $key) {
        $this->key = $key;
    }

    public function __invoke($a, $b) {
        return $a[$this->key] <=> $b[$this->key];
    }
}

$customers = [
    ['id' => 1, 'name' => 'John', 'credit' => 20000],
    ['id' => 3, 'name' => 'Alice', 'credit' => 10000],
    ['id' => 2, 'name' => 'Bob', 'credit' => 15000]
];

// Sort customers by names
$comparator = new Comparator('name');
usort($customers, [$comparator, '__invoke']);
print_r($customers);

// Sort customers by credit
$comparator = new Comparator('credit');
usort($customers, [$comparator, '__invoke']);
print_r($customers);

?>