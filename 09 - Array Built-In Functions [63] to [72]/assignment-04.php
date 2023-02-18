<?php

$nums = [10, 20, 30];

echo array_reduce($nums, fn($n1, $n2) => $n1 + $n2) . '<br>';

echo array_sum($nums);


// Output
// 60
// 60
