<?php

$nums = [5, 10, 20, 5, 30, 40];

echo '<pre>';
echo array_reduce(
    array_filter($nums, fn($ns) => $ns > 5),
    fn($n1, $n2) => $n1 + $n2
);
echo '<pre>';
// echo array_reduce($nums, 'sum');

// Output
// 100
