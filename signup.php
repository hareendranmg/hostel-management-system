<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <link href="web/css/w3.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link
        href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Hostel Room Allocation System</h1>

    <?php
        if(isset($_GET['error'])) {
            if($_GET['error'] == 'userexists') {
                ?>
                <div class="w3-display-middle w3-panel w3-round-large w3-yellow w3-card-4">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Warning!</h3>
                    <p>A user with same student roll number is exists.</p>
                </div>
                <?php
            }
            if($_GET['error'] == 'invalidroll') {
                ?>
                <div class="w3-display-middle w3-panel w3-round-large w3-red w3-card-4">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Error!</h3>
                    <p>Invalid Student RollNo.</p>
                </div>
                <?php
            }
            if($_GET['error'] == 'passwordcheck') {
                ?>
                <div class="w3-display-middle w3-panel w3-round-large w3-yellow w3-card-4">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Warning!</h3>
                    <p>Password and Confirm Password doesnot match.</p>
                </div>
                <?php
            }
            if($_GET['error'] == 'sqlerror') {
                ?>
                <div class="w3-display-middle w3-panel w3-round-large w3-red w3-card-4">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Error!</h3>
                    <p>Server error occured. Please contact your hostel administator.</p>
                </div>
                <?php
            }
        }
    ?>


    <div class="w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="includes/signup.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student Roll No</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_fname" placeholder="First Name"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_lname" placeholder="Last Name"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" minlength="10"
                        maxlength="10" required="required" onkeypress="return isNumber(event)" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="department" placeholder="Department"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Year of Study</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="year_of_study" placeholder="Year of Study (eg: 2020)"
                        minlength="4" maxlength="4" onkeypress="return isNumber(event)" required="required" />
                </div>
            </div>

            <!--  <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                </div>
            </div>-->

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password"
                        required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>

</body>

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

</html>