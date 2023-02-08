<?php
$str = 'aAa';
$num = 3;
$char = '_';

// Write Your Code Here
$str[$num] = $char;
echo str_repeat(strtolower($str), $num);

// aaa_aaa_aaa_
