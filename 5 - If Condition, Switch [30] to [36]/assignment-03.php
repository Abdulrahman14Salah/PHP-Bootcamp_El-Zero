<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (in_array($_REQUEST['user'], $admins)) {
        echo "The Request Method Is POST And Username Is " . $_REQUEST['user'] . "Is Admin";
    } else {
        echo "The Request Method Is POST";
    }

} else {

    echo "The Request Method Is " . $_SERVER["REQUEST_METHOD"];

}