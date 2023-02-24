<?php
$time = getdate(time());

echo '<br>';
echo $time[0];

echo '<br>';
print_r(strtotime('now', time()));

echo '<br>';
echo time();
