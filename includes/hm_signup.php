<?php

if (isset($_POST['hm_signup_submit'])) {

    require 'config.inc.php';

    $username = $_POST['hm_uname'];
    $fname = $_POST['hm_fname'];
    $lname = $_POST['hm_lname'];
    $mobile = $_POST['hm_mobile'];
    $hostel_id = $_POST['hostel_name'];
    $password = $_POST['pass'];
    $cnfpassword = $_POST['confpass'];

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../admin/create_hm.php?error=invalidusername");
        exit();
    } else if ($password !== $cnfpassword) {
        header("Location: ../admin/create_hm.php?error=passwordcheck");
        exit();
    } else {

        $sql = "SELECT Username FROM Hostel_Manager WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin/create_hm.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../admin/create_hm.php?error=userexists");
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $zz = 0;
                $sql = "INSERT INTO Hostel_Manager (Username, Fname, Lname, Mob_no, Hostel_id, Pwd, Isadmin) VALUES ('$username', '$fname', '$lname', '$mobile', '$hostel_id', '$hashedPwd', '$zz')";
                // print_r($sql); exit;
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header("Location: ../admin/create_hm.php?added=success");
                } else {
                    header("Location: ../admin/create_hm.php?added=failure");
                }

            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    header("Location: ../admin/create_hm.php");
    exit();
}
