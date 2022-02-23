<?php 
    include_once 'dbCon.php';
    
    if(!isset($_POST['signup'])){
        header("Location: ../Debatinators%2022/signup.php");
    }

    $nic = htmlentities($_POST['nic']);
    
    $stmtq = "SELECT * FROM teammembers WHERE nic= '$nic'";
    $result = $conn->query($stmtq);
    print_r($result);
    $data = $result->fetch_assoc();
    
    session_start();
    $_SESSION['Nic'] = $nic;


    if($nic == "123@leoAdmin"){
        header("Location: ../Debatinators%2022/admin.php");
    }

    else if ($data != null) {
               
        header("Location: ../Debatinators%2022/index.php?Registered=1&nic=$nic"); 
    }else{
        header("Location: ../Debatinators%2022/index.php?Registered=0");
    }
?>