<?php
require '../includes/config.inc.php';

if (isset($_POST['submit'])) {

    $stud_id = $_POST['stud_id'];

    $stud_det_sql = "SELECT * FROM Application WHERE Student_id = '$stud_id'";

    $stud_det_res = mysqli_query($conn, $stud_det_sql);
    $stud_det = mysqli_fetch_assoc($stud_det_res);

    
    $hostel_id = $stud_det['Hostel_id'];

    $hostel_det_sql = "SELECT  No_of_students, No_of_rooms  FROM Hostel where Hostel_id = $hostel_id";
    $hostel_det_res = mysqli_query($conn, $hostel_det_sql);
    $hostel_det = mysqli_fetch_assoc($hostel_det_res);

    $total_rooms = $hostel_det['No_of_rooms'];
    $active_rooms = $hostel_det['No_of_students'];

    if ($active_rooms >= $total_rooms) {
        header("Location: allocate_room.php?res=rooms_not_available");
        exit();
    } else {
        $room_no = ++$active_rooms;
        $query3 = "UPDATE Application SET Application_status = '0',Room_No = '$room_no' WHERE Student_id = '$stud_id'";
        $result3 = mysqli_query($conn, $query3);

        if ($result3) {
            // $room_id = $room_no;
            $query4 = "INSERT INTO Room (`Hostel_id`, `Room_No`, `Student_id`, `Allocated`) 
                        VALUES ($hostel_id, $room_no, '$stud_id', 1)";
            // print_r($query4); exit;
            $result4 = mysqli_query($conn, $query4);

            if ($result4) {
                $room_id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT room_id FROM Room WHERE Student_id = '$stud_id'"));
                $room_id = $room_id['room_id'];

                $query5 = "UPDATE Student SET Hostel_id = '$hostel_id',Room_id = '$room_id' WHERE Student_id = '$stud_id'";
                $result5 = mysqli_query($conn, $query5);
                if ($result5) {
                    $update_activerooms = mysqli_query($conn, "UPDATE `Hostel` SET `No_of_students`= $room_no WHERE `Hostel_id` = '$hostel_id'");
                    header("Location: allocate_room.php?res=success");
                    exit();
                }
            } else {
                header("Location: allocate_room.php?res=error");
                exit();
            }
        } else {
            header("Location: allocate_room.php?res=error");
            exit();
        }
    }
}
