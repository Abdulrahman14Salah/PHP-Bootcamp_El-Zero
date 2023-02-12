<?php

$nums = [11, 2, 10, 7, 20, 50];

echo array_reduce($nums, fn($n1, $n2) => $n1 + $n2);

// Output
// 100
