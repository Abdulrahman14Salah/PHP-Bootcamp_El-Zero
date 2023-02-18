<?php

$str = 'Elzero Web School';
$e = 'e';
$o = 'O';
$four = 4;
echo '<br>';
echo substr_count($str, $e, $four); // 1
echo '<br>';
echo substr_count(strtoupper($str++), $o, $four + strlen($e) + strlen($o)); // 2
