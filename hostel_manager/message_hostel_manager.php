<?php
  require '../includes/config.inc.php';
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Allocated Rooms</title>

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
    <!--bootsrap -->

    <!--// Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web-fonts -->

</head>
<style type="text/css">
.card-header {
    padding: 15px;
    font-size: 30px;
}

.card-body {
    padding: 15px;
}

.card-footer {
    text-align: left;
    padding: 15px;
}
</style>


<body>

    <!-- banner -->
    <div class="inner-page-banner" id="home">
        <!--Header-->
        <?php
		include('hostel_manager_header.php');
	?>
        <!--Header-->
    </div>
    <!-- //banner -->
    <br><br><br>

    <?php
    $username = $_SESSION['username'];
    $hostel_man_id = $_SESSION['hostel_man_id'];
	$query = "SELECT * FROM Message WHERE receiver_id ='$hostel_man_id'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result)){  
          ?>

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
        <div class="card">
            <div class="card-header"><b><?php echo $row['subject_h']; ?></b></div>
            <div class="card-body">
                <div>Message :: 
                    <b><?php echo $row['message']; ?></b>
				</div>
				<br>
                <form action="reply_student.php" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="hidden" name="msg_id" value="<?php echo $row['msg_id'] ?>">
                            <input type="text" class="block" name="message" id="message" placeholder="Reply">
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Send" name="submit" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer"><?php echo $row['sender_id'] ?><span
                    style="float: right"><?php echo $row['msg_date']." ".$row['msg_time']; ?></span></div>
        </div>
    </div>
    <br><br>

    <?php
    } 

?>

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