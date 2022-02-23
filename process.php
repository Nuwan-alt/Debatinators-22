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
        $tlnic = $_POST['tlnic'];
        $member = $_POST['member'];
    }
    session_start();
    $details = array($first_name,$last_name,$birthday,$gender,$email,$phone_number,$nic,$university,$tlnic);
    if($member == 0){
        $_SESSION['leader'] = $details;
        $_SESSION['Nic'] = $nic;
        header("Location: ../Debatinators%2022/mem1Reg.php");
    }elseif ($member == 1){
        $_SESSION['mem1'] = $details;
        header("Location: ../Debatinators%2022/mem2Reg.php");
    }elseif ($member == 2){
        $_SESSION['mem2'] = $details;
        header("Location: ../Debatinators%2022/mem3Reg.php");
    }elseif ($member == 3){
        $_SESSION['mem3'] = $details;
        header("Location: ../Debatinators%2022/mem4Reg.php");
    }elseif ($member == 4){
        $_SESSION['mem4'] = $details;

        $stmt1 =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
        VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt2 =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
        VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt3 =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
        VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt4 =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
        VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt5 =$conn->prepare ("INSERT INTO teammembers (TLnic,nic,firstName,lastName,birthday,gender,email,phonenumber,university)
        VALUES (?,?,?,?,?,?,?,?,?)");

        // ----leader data send to database------------------
    $stmt1->bind_param("sssssssss",$_SESSION['leader'][6],$_SESSION['leader'][6],$_SESSION['leader'][0],
    $_SESSION['leader'][1],$_SESSION['leader'][2],$_SESSION['leader'][3],$_SESSION['leader'][4],$_SESSION['leader'][5],
    $_SESSION['leader'][7]);
    $stmt1->execute();

        // ----member1 data send to database------------------

    $stmt2->bind_param("sssssssss",$_SESSION['leader'][6],$_SESSION['mem1'][6],$_SESSION['mem1'][0],
    $_SESSION['mem1'][1],$_SESSION['mem1'][2],$_SESSION['mem1'][3],$_SESSION['mem1'][4],$_SESSION['mem1'][5],
    $_SESSION['mem1'][7]);
    $stmt2->execute();

        // ----member2 data send to database------------------

    $stmt3->bind_param("sssssssss",$_SESSION['leader'][6],$_SESSION['mem2'][6],$_SESSION['mem2'][0],
    $_SESSION['mem2'][1],$_SESSION['mem2'][2],$_SESSION['mem2'][3],$_SESSION['mem2'][4],$_SESSION['mem2'][5],
    $_SESSION['mem2'][7]);
    $stmt3->execute();

        // ----member3 data send to database------------------

    $stmt4->bind_param("sssssssss",$_SESSION['leader'][6],$_SESSION['mem3'][6],$_SESSION['mem3'][0],
    $_SESSION['mem3'][1],$_SESSION['mem3'][2],$_SESSION['mem3'][3],$_SESSION['mem3'][4],$_SESSION['mem3'][5],
    $_SESSION['mem3'][7]);
    $stmt4->execute();

        // ----member3 data send to database------------------

    $stmt5->bind_param("sssssssss",$_SESSION['leader'][6],$_SESSION['mem4'][6],$_SESSION['mem4'][0],
    $_SESSION['mem4'][1],$_SESSION['mem4'][2],$_SESSION['mem4'][3],$_SESSION['mem4'][4],$_SESSION['mem4'][5],
    $_SESSION['mem4'][7]);
    $stmt5->execute();

    header("Location:../Debatinators%2022/index.php?Registered=1 ");
    }else{}
     
 
?>