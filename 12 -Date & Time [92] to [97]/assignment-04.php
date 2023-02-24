<?php
date_default_timezone_set('Africa/Cairo') . '<br>';

$date = '1990-10-01';
$epoch = time();

echo '<br>';
echo round(strtotime($date, $epoch) / 60 / 60 / 24, 1);
echo '<br>';
echo round(strtotime($date, $epoch) / 60 / 60 / 24 / 365, 1);

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
