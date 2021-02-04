<?php

require '../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contact </title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--// Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <!-- //web-fonts -->

</head>

<body>

    <!-- banner -->
    <div class="inner-page-banner" id="home">
        <!--Header-->
        <?php
            include 'student_header.php';
        ?>
        <!--Header-->
    </div>
    <!-- //banner -->

    <!-- contact -->
    <section class="contact py-5">
        <div class="container">
            <?php
			if (isset($_GET['res'])) {
				if ($_GET['res'] == 'failed') {
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Failed to send message.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
				}
				if ($_GET['res'] == 'success') {
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success!</strong>Successfully Sended message.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
				}
			}
			?>
            <h2 class="heading text-capitalize mb-sm-5 mb-4"> Contact Us </h2>
            <div class="mail_grid_w3l">
                <form action="contact_controller.php" method="post">
                    <div class="row">
                        <div class="col-md-6 contact_left_grid" data-aos="fade-right">
                            <input type="hidden" name="hostel_id" value="<?php echo $_SESSION['hostel_id']; ?>">
                            <div class="contact-fields-w3ls">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Name" readonly
                                    value="<?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>" required="">
                            </div>
                            <label for="rol_no">Roll Number</label>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="rol_no" placeholder="Roll Number" readonly
                                    value="<?php echo $_SESSION['roll']; ?>" required="">
                            </div>
                            <label for="subject"> Subject</label>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="subject" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="col-md-6 contact_left_grid" data-aos="fade-left">
                            <label for="message"> Message</label>
                            <div class="contact-fields-w3ls">
                                <textarea name="message" placeholder="Message..." required=""></textarea>
                            </div>
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </section>
    <!-- //contact -->



    <!-- js-scripts -->

    <!-- js -->
    <script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../web_home/js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

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