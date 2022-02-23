<?php 
    include_once 'dbCon.php';
    $nic = htmlentities($_POST['nic']);
    $stmt = "SELECT * FROM teammembers WHERE nic= $nic";
    $result = $conn->query($stmt);
    
    session_start();
    $_SESSION['Nic'] = $nic;


    if($nic == "123@leoAdmin"){
        header("Location: ../Debatinators%2022/admin.php");
    }

    else if ($result->num_rows > 0) {
               
        header("Location: ../Debatinators%2022/index.php?Registered=1&nic=$nic"); 
    }else{
        header("Location: ../Debatinators%2022/index.php?Registered=0");
    }
?>