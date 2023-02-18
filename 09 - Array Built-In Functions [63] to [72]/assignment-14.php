<?php

$nums = [10, 100, -20, 50, 30];

echo array_reduce($nums, fn($n1, $n2) => $n1 < $n2 ? $n1 : $n2, true); // true to make the initial value = first element in to array

// Output
// -20
