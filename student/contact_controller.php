<?php
require '../includes/config.inc.php';

session_start();

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	$hostel_id = $_POST['hostel_id'];
	
	$query6 = "SELECT * FROM Hostel_Manager WHERE Hostel_id = '$hostel_id'";
	
    $result6 = mysqli_query($conn, $query6);
    $row6 = mysqli_fetch_assoc($result6);
    $hos_man_user = $row6['Hostel_man_id'];

    $roll = $_SESSION['roll'];

    $today_date = date("Y-m-d");
    $time = date("h:i A");

    $query = "INSERT INTO Message (sender_id,receiver_id,hostel_id,subject_h,message,msg_date,msg_time) VALUES ('$roll','$hos_man_user','$hostel_id','$subject','$message','$today_date','$time')";
	// print_r($query); exit;
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: contact.php?res=success"); exit;
    } else {
        header("Location: contact.php?res=failed"); exit;
    }
}
