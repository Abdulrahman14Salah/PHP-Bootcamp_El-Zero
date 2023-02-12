<?php

$nums = [10, 100, -20, 50, 30];

echo array_reduce($nums, fn($n1, $n2) => $n1 > $n2 ? $n1 : $n2);

// Output
// 100;
