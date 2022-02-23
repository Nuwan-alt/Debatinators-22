
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Form(TM3)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="assets/css/regForm.css">
    <link rel="stylesheet" href="assets/css/notify.css">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
            <div class="text-center"> <div id="note" > <b> Notification message  </b> </div></div>
                <div class="card-body">
                    <h2 class="title">Registration Form (Team Member 3)</h2>
                    <form method="POST" action="process.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" id="fname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="birthday" id="bday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male" id="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female" id="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIC Number</label>
                                    <input class="input--style-4" type="text" name="nic" id="nic">
                                </div>
                            </div>
                            <div class="col-2">
                               
                                <div class="input-group">
                                    <label class="label">University</label>
                                    <input class="input--style-4" type="text" name="university" id="uni">
                                </div>
                            </div>
                            <div class="col-2" style="display:none;">
                               
                                <div class="input-group">
                                    <label class="label">tlnic</label>
                                    <input class="input--style-4" type="text" name="tlnic" value="<?php echo($_GET['TLnic']) ?>" >
                                </div>
                            </div>
                            <div class="col-2" style="display:none;">
                               
                                <div class="input-group">
                                    <label class="label">member</label>
                                    <input class="input--style-4" type="text" name="member" value="3" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit" name="submit" onclick="return   nameValfirst() && nameVallast() && mobileVal() && dateVali() && emailVal() && doCalculate() && uniVali()">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./vendor/select2/select2.min.js"></script>
    <script src="./vendor/datepicker/moment.min.js"></script>
    <script src="./vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./assets/js/global.js"></script>
    <script src="./assets/js/notify.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->