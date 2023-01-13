<?php
if(file_exists(__DIR__ . "/../api/user-insert.php")){
    $stringUsers = file_get_contents(__DIR__ . "/../api/user-insert.php");
    echo $stringUsers;
}