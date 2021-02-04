<?php
require '../includes/config.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Manage Hostels</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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

<body>

    <!-- banner -->
    <div class="inner-page-banner" id="home">
        <!--Header-->
        <?php
include 'admin_header.php';
?>
        <!--Header-->
    </div>
    <!-- //banner -->
    <br><br><br>

    <div class="container">
        <h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostels </h2>
        <?php
//$hostel_id = $_SESSION['hostel_id'];
$query1 = "SELECT * FROM Hostel";
$result1 = mysqli_query($conn, $query1);
//select the hostel name from hostel table
//$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
//$result6 = mysqli_query($conn,$query6);
//$row6 = mysqli_fetch_assoc($result6);
//$hostel_name = $row6['Hostel_name'];
?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Hostel ID</th>
                    <th>Hostel Name</th>
                    <th>Total Rooms</th>
                    <th>Allotted Rooms</th>
                </tr>
            </thead>
            <tbody>
                <?php
if (mysqli_num_rows($result1) == 0) {
    echo '<tr><td colspan="4">No Rows Returned</td></tr>';
} else {
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $hostel_id = $row1['Hostel_id'];
        $Hostel_name = $row1['Hostel_name'];
        $No_of_rooms = $row1['No_of_rooms'];
        $No_of_students = $row1['No_of_students'];

        echo "<tr>
                <td>{$hostel_id}</td>
                <td>{$Hostel_name}</td>
                <td>{$No_of_rooms}</td>
                <td>{$No_of_students}</td>
            </tr>\n";
    }
}
?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>


    <!-- js-scripts -->

    <!-- js -->
    <script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../web_home/js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

    <!-- banner js -->
    <script src="web_home/js/snap.svg-min.js"></script>
    <script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
    <!-- //banner js -->

    <!-- flexSlider -->
    <!-- for testimonials -->
    <script defer src="web_home/js/jquery.flexslider.js"></script>
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
    <script src="web_home/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="web_home/js/move-top.js"></script>
    <script type="text/javascript" src="web_home/js/easing.js"></script>
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