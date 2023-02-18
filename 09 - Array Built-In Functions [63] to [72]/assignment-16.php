<?php

$mix = ['A', 'C', 'B', 1, 100, 3, 2, 6, 5, 7];

echo '<pre>';
print_r(array_values(array_filter($mix, fn($n)=> gettype($n) == 'integer' ? ($n % 2 != 0 ? $n : false) : false)));
echo '</pre>';

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )
