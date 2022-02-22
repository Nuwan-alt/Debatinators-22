<?php
    include_once 'dbCon.php';
    if(isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
	    $last_name = $_POST['last_name'];
        $birthday = $_POST['birthday'];
	    $gender = $_POST['gender'];
        $email = $_POST['email'];
	    $phone_number = $_POST['phone'];
        $nic = $_POST['nic'];
	    $university = $_POST['university'];
    }

    $stmt =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
    VALUES (?,?,?,?,?,?,?,?,?)");
    
    if (isset($_GET['abc'])){
        $TLnic = $_GET['tlnic'];
        $stmt->bind_param("sssssssss",$TLnic,$nic,$first_name,$last_name,$birthday,$gender,$email,$phone_number,$university);
        $stmt->execute();
        header("Location: ../Debatinators%2022'/mem2Reg.php?tlnic=$TLnic");
    }else{
        $stmt->bind_param("sssssssss",$nic,$nic,$first_name,$last_name,$birthday,$gender,$email,$phone_number,$university);
        $stmt->execute();
        header("Location: ../Debatinators%2022'/mem1Reg.php?abc=$nic");
    }
    

    
    
    
 
?>