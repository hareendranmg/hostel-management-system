<?php
require '../includes/config.inc.php';

session_start();

if (isset($_POST['submit'])) {
    $msg_id = $_POST['msg_id'];
    $message = $_POST['message'];

    $msg_sql = "SELECT * FROM Message WHERE msg_id = '$msg_id'";
    $msg_res = mysqli_query($conn, $msg_sql);
    $msg = mysqli_fetch_assoc($msg_res);

    $sender_id = $msg['receiver_id'];
    $receiver_id = $msg['sender_id'];
    $hostel_id = $msg['hostel_id'];
    $subject = $msg['subject_h'];

    $today_date = date("Y-m-d");
    $time = date("h:i A");

    $query = "INSERT INTO Message (sender_id,receiver_id,hostel_id,subject_h,message,msg_date,msg_time) 
            VALUES ('$sender_id','$receiver_id','$hostel_id','$subject','$message','$today_date','$time')";
    // print_r($query); exit;
    $result = mysqli_query($conn, $query);
    if ($result) {
        $query = "DELETE FROM `Message` WHERE `msg_id` = '$msg_id'";
        $result = mysqli_query($conn, $query);
        header("Location: message_hostel_manager.php?res=success");exit;
    } else {
        header("Location: message_hostel_manager.php?res=failed");exit;
    }
}
