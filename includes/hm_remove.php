<?php

if (isset($_POST['hm_remove_submit'])) {

  require 'config.inc.php';

  $userid = $_POST['hm_uname'];
  $sql3 = "DELETE FROM Hostel_Manager WHERE Hostel_man_id = '$userid'";
  $result3 = mysqli_query($conn, $sql3);
  if ($result3) {
      header("Location: ../admin/create_hm.php?DeletionSuccessful");
      exit();
  } else {
      header("Location: ../admin/create_hm.php?error=DeletionFailed");
      exit();
  }
}

