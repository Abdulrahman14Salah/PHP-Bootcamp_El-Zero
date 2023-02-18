<?php
$handel = fopen('elzero.txt', 'r');

// 1
echo fread($handel, 24) . '<br>';
rewind($handel);

// 2 - and you can use for loop
echo fgets($handel);
echo fgets($handel);
rewind($handel);
echo '<br>';

// 3
echo fread($handel, 24);
echo '<br>';

// 4
$array = file('elzero.txt');
array_pop($array);
echo join($array);

fclose($handel);

// Needed Output
'Hello Elzero Web School';
'Hello Elzero Web School';
'Hello Elzero Web School';
'Hello Elzero Web School';
