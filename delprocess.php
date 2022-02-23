<?php 
include_once 'dbCon.php';

if(($_GET['TLnic']))
{
    $sql = "DELETE FROM teammembers WHERE TLnic={$_GET['TLnic']} ";
    $conn->query($sql);
    header("Location: ../Debatinators%2022/admin.php");
}
else{
    header("Location: ../Debatinators%2022/admin.php");
}
?>