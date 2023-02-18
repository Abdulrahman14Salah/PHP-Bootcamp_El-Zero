<?php

echo 'Size In Megabyte Is ' .
    round(filesize('video.mp4') / 1024 / 1024) .
    '<br>';

echo 'Size In Kilobyte Is ' . round(filesize('video.mp4') / 1024) . '<br>';

// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"
