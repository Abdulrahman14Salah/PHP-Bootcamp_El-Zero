<?php

// Test Cases
function change_permissions($f)
{
    if (is_dir($f)) {
        echo 'This Is Directory And Only Files Allowed <br>';
    } else {
        if (pathinfo($f, PATHINFO_EXTENSION) != 'txt') {
            echo 'File Extension Is Not Txt <br>';
        } else {
            chmod($f, 0700);
            if (fileperms($f) == 33216) {
                echo 'Permissions Changed <br>'; // Windows ignores
            }
        }
    }
}

echo change_permissions('Elzero'); // This Is Directory And Only Files Allowed
echo change_permissions('Work.docx'); // File Extension Is Not Txt
echo change_permissions('Result.txt'); // Permissions Changed
