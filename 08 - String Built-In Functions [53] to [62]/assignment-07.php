<?php

$chars = ['E', 1, 2, 'l', 'z', 'E', 'R', 'o'];
echo ucfirst(strtolower(substr_replace(join($chars), '', 1, 2)));

// $result = array_filter($chars, function ($value) {
//     return gettype($value) == 'string';
// });
// echo ucfirst(strtolower(join('', $result)));

// Output
// "Elzero"
