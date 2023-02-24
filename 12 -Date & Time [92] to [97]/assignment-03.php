<?php

date_default_timezone_set('Africa/Cairo') . '<br>';

$date = '1990-10-01';

$d = date_create($date);

$old = getdate(strtotime($date));

$now = getdate();
echo '<pre>';

echo '</pre>';
$resultDay = round($old['0'] / 60 / 60 / 24, 1);
$resultYear = round($old['0'] / 60 / 60 / 24 / 365, 1);

echo '<br>';
echo "From Epoch Time Till 1990-10-01 Is Approximately $resultDay Days";
echo '<br>';
echo "From Epoch Time Till 1990-10-01 Is Approximately $resultYear Years";
