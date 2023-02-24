<?php

date_default_timezone_set('Asia/Riyadh') . '<br>';
echo date_default_timezone_get() . '<br>';

$d = date_create();

echo date_format($d, 'D, d M y - h:i:s  A') . '<br>';

echo date_format($d, 'l, d F Y - h:i:s  A') . '<br>';

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"
