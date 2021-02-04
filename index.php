<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
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
    <?php
     if(isset($_GET['signup'])) {
            if($_GET['signup'] == 'success') {
                ?>
                <div class="w3-display-middle w3-panel w3-round-large w3-green w3-card-4">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Success!</h3>
                    <p>Successfully created your account. Please login to access the dashboard.</p>
                </div>
                <?php
            }
        }
        ?>
    <h1>Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <h2>Student Login</h2>
        <form action="includes/login.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student Roll No:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button>
        </form>
        <p class=" w3l-register-p">Login as<a href="login-hostel_manager.php" class="register"> Hostel-Manager/Admin</a>
        </p>
        <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>
    </div>

</body>

</html>
