<?php

date_default_timezone_set('Africa/Cairo') . '<br>';
echo date_default_timezone_get() . '<br>';
$date = '2005-10-02 15:15:10';

$d = date_create($date);

echo date_format($d, 'Y, F, l "dS" H:i:s');
// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:10"

