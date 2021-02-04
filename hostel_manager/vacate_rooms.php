<?php
  require '../includes/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Vacate room</title>
	
	<!-- Meta tag Keywords -->
	<script type="application/x-javascript">
		addEventListener("load", function () {
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
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<?php
		include('hostel_manager_header.php');
	?>
	<!--Header-->
</div>

<br><br><br>
<?php
   $hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   $result1 = mysqli_query($conn,$query1);
   $row1 = mysqli_fetch_assoc($result1);
   $hostel_name = $row1['Hostel_name'];
?>

<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Vacate Form </h2>
			<div class="mail_grid_w3l">
				<form action="vacate_rooms.php" method="post">
					<div class="row form-group">
						<div class="col-md-8" data-aos="fade-right">
						<?php
							$query = "SELECT * FROM `Student` WHERE `Hostel_id` = '$hostel_id'";
							// print_r($query);exit;
							$result2 = mysqli_query($conn, $query);
							$options = "";
							while ($row2 = mysqli_fetch_array($result2)) {
								$options = $options . "<option value='" . $row2['Student_id'] . "'>" . $row2['Fname'] . "</option>";
							}
							?>
							<select name="student_id" class="form-control" id="student_id" required>
								<option value="" disabled selected>Select the Student</option>
								<?php echo ($options); ?>
							</select>

						</div>
						<div class="col-md-4">
							<input type="submit" name="submit" class="btn btn-success" value="Click to Vacate">
						</div>
					</div>

				</form>
			</div>
		
	</div>
</section>
<?php
if(isset($_POST['submit'])){
     $student_id = $_POST['student_id'];

	$query3 = "SELECT * FROM Student WHERE Student_id = '$student_id' ";
	$result3 = mysqli_query($conn,$query3);
    if(mysqli_num_rows($result3)==0){
        echo "<script type='text/javascript'>alert('Incorrect Details 2')</script>";
        exit();
    }
    $row3 = mysqli_fetch_assoc($result3);
    if($result3){
    	$query4 = "UPDATE Student SET Hostel_id = NULL, Room_id = NULL WHERE Student_id = '$student_id'";
    	$result4 = mysqli_query($conn,$query4);
    	if($result4){
    		$query5 = "UPDATE Room SET Allocated = '0' WHERE Student_id = '$student_id'";
    		$result5 = mysqli_query($conn,$query5);
    		if($result5){
    			$query6 = "DELETE FROM Application WHERE Student_id = '$student_id'";
    			$result6 = mysqli_query($conn,$query6);
    			if($result6){
					echo "<script type='text/javascript'>alert('Vacated Successfully')</script>";	
					header("Location: vacate_rooms.php?res=vacated_successfully");
    			}
    			
    		}
    	}
    }
}


?>

<br><br><br>

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="../web_home/js/snap.svg-min.js"></script>
	<script src="../web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="../web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="../web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="../web_home/js/move-top.js"></script>
	<script type="text/javascript" src="../web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>

