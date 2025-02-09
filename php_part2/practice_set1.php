<?php

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

echo "Total price: $" . calculateTotalPrice($items);

function manipulateString(string $input): string {
    $input = str_replace(' ', '', $input);
    return strtolower($input);
}

$string = "This is a poorly written program with little structure and readability.";
echo "\nModified string: " . manipulateString($string);

function checkEvenOdd(int $number): string {
    return ($number % 2 == 0) ? "The number $number is even." : "The number $number is odd.";
}

$number = 42;
echo "\n" . checkEvenOdd($number);

?>