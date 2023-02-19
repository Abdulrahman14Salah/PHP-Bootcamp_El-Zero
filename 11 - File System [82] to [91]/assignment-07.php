<?php

$old = 'Osamaa';
$new = 'Elzero';
$str = implode('', file('elzero.txt'));
$handle = fopen('elzero.txt', 'w');
$str = str_replace($old, $new, $str);

fwrite($handle, $str, strlen($str));
fclose($handle);
