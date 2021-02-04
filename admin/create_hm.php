<?php
require '../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- js -->
    <script src="../web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../web_profile/js/sliding.form.js"></script>
    <!-- //js -->
    <link href="../web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../web_profile/css/hm_manage_card.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="../web_profile/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../web_profile/css/smoothbox.css" type='text/css' media="all" />
    <link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>

    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--// Meta tag Keywords -->

    <link href="../web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

    <!-- css files -->
    <link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- testimonials css -->
    <link rel="stylesheet" href="../web_home/css_home/flexslider.css" type="text/css" media="screen" property="" />
    <!-- flexslider css -->
    <!-- //testimonials css -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <!-- //web-fonts -->


</head>

<body>
    <!-- banner -->
    <div class="banner" id="home">
        <div class="cd-radial-slider-wrapper">

            <!--Header-->
            <?php
include 'admin_header.php';
?>
            <!--Header-->
            <br><br><br><br><br>
            <div class="main">
                <?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'passwordcheck') {
        ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Password doesnot match.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
} elseif ($_GET['error'] == 'userexists') {
        ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> user already exists.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
    }
} elseif(isset($_GET['added'])) {
    if ($_GET['added'] == 'success') {
    ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Hostel manager created Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
} else {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Error in Hostel manager creation
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    <?php
}
} elseif(isset($_GET['DeletionSuccessful'])) {
        ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Successfully deleted Hostel manager
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    <?php
}
elseif(isset($_GET['DeletionFailed'])) {
        ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Error in deletion of Hostel manager
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    <?php
}
?>

                <!-- ############################################################### -->
                <div class="form" id="formElem" name="formElem" action="../includes/hm_signup.php" method="post">

                    <ul class="tab-group">
                        <li class="tab active"><a href="#signup">Appoint</a></li>
                        <li class="tab"><a href="#login">Remove</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="signup">
                            <h1>Appoint Hostel Manager</h1>

                            <form action="../includes/hm_signup.php" method="POST">

                                <div class="field-wrap">
                                    <label>
                                        Username<span class="req">*</span>
                                    </label>
                                    <input type="text" name="hm_uname" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input type="password" name="pass" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Confirm Password<span class="req">*</span>
                                    </label>
                                    <input type="password" name="confpass" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input type="text" name="hm_fname" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input type="text" name="hm_lname" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        MobileNo<span class="req">*</span>
                                    </label>
                                    <input type="text" minlength="10" maxlength="10" onkeypress="return isNumber(event)" name="hm_mobile" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Hostel<span class="req">*</span>
                                    </label>
                                    <select name="hostel_name" class="w3-select" id="hostel" required>
                                        <option value="" disabled selected>Select the Hostel</option>
                                        <option value="1">Hostel A</option>
                                        <option value="2">Hostel B</option>
                                        <option value="3">Hostel C</option>
                                        <option value="4">Hostel D</option>
                                    </select>
                                </div>
                                <input type="submit" class="button button-block" name="hm_signup_submit"
                                    value="Appoint">

                            </form>

                        </div>

                        <div id="login">
                            <h1>Remove</h1>

                            <form action="../includes/hm_remove.php" method="post">

                                <div class="field-wrap">
                                    <?php
                                        $query = "SELECT * FROM `Hostel_Manager` WHERE `Isadmin` = 0 ";
                                        $result2 = mysqli_query($conn, $query);
                                        $options = "";
                                        while ($row2 = mysqli_fetch_array($result2)) {
                                            $options = $options . "<option value='".$row2[0]."'>".$row2[1]."</option>";
                                        }
                                    ?>
                                    <select name="hm_uname" class="w3-select" id="hostel" required>
                                        <option value="" disabled selected>Select the Hostel Manager</option>
                                        <?php echo($options); ?>
                                    </select>
                                </div>

                                <input type="submit" class="button button-block" name="hm_remove_submit" value="Remove">

                            </form>

                        </div>

                    </div><!-- tab-content -->

                </div> <!-- /form -->
                <!-- ############################################################### -->

                <!-- <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
                    <div id="steps" style="margin:0 auto;" class="agileits w3_steps">


                        <form id="formElem" name="formElem" action="../includes/hm_signup.php" method="post"
                            class="w3_form w3l_form_fancy">
                            <fieldset class="step w3_agileits">
                                <legend>Appoint Hostel Manager</legend>
                                <div class="agilecontactw3ls-grid">
                                    <div class="agile-con-centre">
                                        <form action="../includes/hm_signup.php" method="POST">
                                            <div class="contact-fields-w3ls">
                                                <label>Username</label>
                                                <input type="text" name="hm_uname" placeholder="USERNAME"
                                                    required="required">
                                            </div>
                                            <input type="text" name="hm_fname" placeholder="FIRST NAME"
                                                required="required">
                                            <input type="text" name="hm_lname" placeholder="LAST NAME"
                                                required="required">
                                            <input type="text" name="hm_mobile" placeholder="MOBILE NO"
                                                required="required">
                                            <input type="text" name="hostel_name" placeholder="HOSTEL NAME"
                                                required="required">
                                            <input type="text" name="Email" placeholder="EMAIL" required="required">
                                            <input type="password" name="pass" placeholder="HOSTEL MANAGER'S PASSWORD"
                                                required="required">
                                            <input type="password" name="confpass"
                                                placeholder="CONFIRM HOSTEL MANAGER'S PASSWORD" required="required">

                                            <div class="send-button">
                                                <input type="submit" name="hm_signup_submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </fieldset>

                        </form>
                        <form id="formElem" name="formElem" action="../includes/hm_remove.php" method="post"
                            class="w3_form w3l_form_fancy">
                            <fieldset class="step w3_agileits">
                                <legend>Remove Hostel Manager</legend>
                                <div class="agilecontactw3ls-grid">
                                    <div class="agile-con-centre">
                                        <form action="../includes/hm_remove.php" method="POST">
                                            <input type="text" name="hm_uname" placeholder="USERNAME"
                                                required="required">
                                            <input type="text" name="hostel_name" placeholder="HOSTEL NAME"
                                                required="required">
                                            <input type="password" name="pass" placeholder="ADMIN PASSWORD"
                                                required="required">
                                            <div class="send-button">
                                                <input type="submit" name="hm_remove_submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div> -->

            </div>

            <script type="text/javascript">
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

            $('.form').find('input, textarea').on('keyup blur focus', function(e) {

                var $this = $(this),
                    label = $this.prev('label');

                if (e.type === 'keyup') {
                    if ($this.val() === '') {
                        label.removeClass('active highlight');
                    } else {
                        label.addClass('active highlight');
                    }
                } else if (e.type === 'blur') {
                    if ($this.val() === '') {
                        label.removeClass('active highlight');
                    } else {
                        label.removeClass('highlight');
                    }
                } else if (e.type === 'focus') {

                    if ($this.val() === '') {
                        label.removeClass('highlight');
                    } else if ($this.val() !== '') {
                        label.addClass('highlight');
                    }
                }

            });

            $('.tab a').on('click', function(e) {

                e.preventDefault();

                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');

                target = $(this).attr('href');

                $('.tab-content > div').not(target).hide();

                $(target).fadeIn(600);

            });
            </script>
            <script type="text/javascript" src="../web_profile/js/smoothbox.jquery2.js"></script>

            <!-- js -->
            <script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
            <script type="text/javascript" src="../web_home/js/bootstrap.js"></script>
            <!-- Necessary-JavaScript-File-For-Bootstrap -->
            <!-- //js -->

            <!-- banner js -->
            <script src="../web_home/js/snap.svg-min.js"></script>
            <script src="../web_home/js/main.js"></script> <!-- Resource jQuery -->
            <!-- //banner js -->

            <!-- flexSlider -->
            <!-- for testimonials -->
            <script defer src="../web_home/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
            </script>
            <!-- //flexSlider -->
            <!-- for testimonials -->

            <!-- start-smoth-scrolling -->
            <script src="../web_home/js/SmoothScroll.min.js"></script>
            <script type="text/javascript" src="../web_home/js/move-top.js"></script>
            <script type="text/javascript" src="../web_home/js/easing.js"></script>
            <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
            </script>
            <!-- here stars scrolling icon -->
            <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear'
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
            </script>
            <!-- //here ends scrolling icon -->
            <!-- start-smoth-scrolling -->

            <!-- //js-scripts -->
</body>

</html>