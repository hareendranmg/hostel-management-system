<?php
require '../includes/config.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Allocate Room</title>

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

<body>

    <!-- banner -->
    <div class="inner-page-banner" id="home">
        <!--Header-->
        <?php
            include 'hostel_manager_header.php';
        ?>
        <!--Header-->
    </div>
    <!-- //banner -->
    <br><br><br>

    <section class="contact py-5">
        <div class="container">
            <div class="mail_grid_w3l">
                <form action="allocate_room.php" method="post">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" placeholder="Search by Roll Number" name="search_box">
                        </div>
                        <div class="col-md-3">
                            <input type="submit" value="Search" name="search"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <?php
?>

        <div class="container">
            <?php
            if (isset($_GET['res'])) {
                if ($_GET['res'] == 'rooms_not_available') {
                    ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> Rooms not available.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                }
                if ($_GET['res'] == 'success') {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong>Successfully allocated room.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                }
                if ($_GET['res'] == 'passwordcheck') {
                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong>Failed to allocate room.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                }
            }
        ?>
            <h2 class="heading text-capitalize mb-sm-5 mb-4"> Applications Received </h2>
            <?php
$hostel_id = $_SESSION['hostel_id'];
$query1 = "SELECT * FROM Application where Hostel_id = '$hostel_id' and Application_status = '1'";
$result1 = mysqli_query($conn, $query1);
//select the hostel name from hostel table
$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
$result6 = mysqli_query($conn, $query6);
$row6 = mysqli_fetch_assoc($result6);
$hostel_name = $row6['Hostel_name'];
?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Hostel</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if (mysqli_num_rows($result1) == 0) {
    echo '<tr><td colspan="4">No Rows Returned</td></tr>';
} else {
    while ($row1 = mysqli_fetch_assoc($result1)) {
        //get the name of the student to display
        $student_id = $row1['Student_id'];
        $query7 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
        $result7 = mysqli_query($conn, $query7);
        $row7 = mysqli_fetch_assoc($result7);
        $student_name = $row7['Fname'] . " " . $row7['Lname'];

        echo "<tr>
                <td>{$student_name}</td>
                <td>{$row1['Student_id']}</td>
                <td>{$hostel_name}</td>
                <td>{$row1['Message']}</td>
                <td><form action='allocate_rooms_controller.php' method='post'>
                        <input type='hidden' value='{$row1['Student_id']}' name='stud_id'>
                        <input type='submit' class='btn btn-success' value='Allocate' name='submit'>
                    </form>
                </td>
            </tr>\n";
    }
}
?>
                </tbody>
            </table>
        </div>


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