<?php include_once 'dbCon.php'; 
    session_start();
    if(!isset($_SESSION['Nic'])){
        header("Location: ../Debatinators%2022/signup.php");
    }elseif($_SESSION['Nic'] != "123@leoAdmin"){
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/admin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>

    <h1 class="proname text-center font-weight-bold"> Debatinators 22' </h1>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style='display:none'></th>
                    <th scope="col">University</th>
                    <th scope="col">Team Leader</th>
                    <th scope="col">NIC</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>

                </tr>
            </thead>

            

            <tbody>

            <?php 
            $stmt = "SELECT * FROM teammembers";
            $result = $conn->query($stmt);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                if($row['TLnic'] == $row['nic']){
                    echo"<tr>";
                    echo"<th scope='row' style='display:none' >". $row['TLnic'] . "</th>";
                    echo"<th scope='row'>". $row['university'] . "</th>";
                    echo"<td>". $row['firstName'] .' '.$row['lastname']. "</td>";
                    echo"<td>". $row['nic'] . "</td>";
                    echo"<td><a href='../Debatinators%2022/delete.php?TLnic={$row['TLnic']}'><button type='button' class='btn btn-danger'> Delete</button> </a></td>";
                    echo"<td> <a href='../Debatinators%2022/view.php?TLnic={$row['TLnic']}'> <button type='button' class='btn btn-success' type='submit' name='teamView' > View</button></a>  </td>";
                    
                    echo"</tr>";
                }
             } }

             
            ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>