<?php

$id = $_GET['id'];

 require "condb.php";


 try{
    $sql ="DELETE FROM tb_user WHERE user_id = '$id' ";
    mysqli_query($link,$sql);
    echo "Affected : " .mysqli_affected_rows($link);
 } catch (Exception $e) {
    echo $e . "Error no : " . mysqli_errno($link);

 }
?>