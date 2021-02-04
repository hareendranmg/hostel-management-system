<?php

 require '../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Messages</title>

    <!-- Meta tag Keywords -->
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
            include 'student_header.php';
        ?>
        <!--Header-->
    </div><br><br><br>
    <!-- //banner -->

    <?php
    $roll_no = $_SESSION['roll'];
    $query = "SELECT * FROM Message WHERE receiver_id ='$roll_no'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result)){  
    	$hostel_id = $row['hostel_id'];
    	$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
       $hostel_name = $row6['Hostel_name'];
          ?>

    <div class="container">
        <div class="card">
            <div class="card-header"><b><?php echo $row['subject_h']; ?></b></div>
            <div class="card-body"><?php echo $row['message']; ?></div>
            <div class="card-footer"><?php echo $hostel_name." Hostel Manager"; ?><span
                    style="float: right"><?php echo $row['msg_date']." ".$row['msg_time']; ?></span></div>
        </div>
    </div>
    <br><br>

    <?php
    } 

?>

    <br>
    <br>

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