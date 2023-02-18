<?php

mkdir('Programming/PHP', 0711, true);

if (file_exists('Programming')) {
    rmdir('Programming/PHP');
    if (!file_exists('Programming/PHP')) {
        echo 'Directory Programming/PHP Removed <br>';
    }

    rmdir('Programming');
    if (!file_exists('Programming/PHP')) {
        echo ' Directory Programming Removed';
    }
}
