<?php

$user = $_GET['user'];
echo "pass". $_GET["pass"];
if ($user == '1'){
    echo "HELLO";
}else
    echo $user;

    echo $user == 1 ? "HELLO" : $user
?>
