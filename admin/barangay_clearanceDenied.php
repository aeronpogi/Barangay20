<?php 

    include 'include/connect.php';
    include 'include/session.php';

    if(isset($_POST["approved"])) {

        $id = $_POST['id'];
        // $date_approve = date('m-d-Y');
        $date_approve = date('Y-m-d');
        $req_status = "Approved";
        $usersFullname = $_POST['usersFullname'];

        $query1 = "SELECT * FROM content ";
        $result1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result1) > 0) {
            while($row = mysqli_fetch_assoc($result1)) {
                $fee = $row['delivery_fee'];

            }
        }

        $query = "SELECT * FROM application WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $pick = $row['pickupMode'];
            }
        }

        if($pick == "Delivery") {
           
            $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status', fee='$fee'  where id ='$id'") or die (mysqli_error($conn));
    
            $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Approved $usersFullname Barangay clearance request', '$date_approve')") or die(mysqli_error($conn));
            header('location: barangay_clearance.php');
        }else {
            $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status'   where id ='$id'") or die (mysqli_error($conn));
    
            $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Approved $usersFullname Barangay clearance request', '$date_approve')") or die(mysqli_error($conn));
            header('location: barangay_clearance.php');
        }   

    }
    else if (isset($_POST["denied"])) {


        $req_status = "Denied";

        $id = $_POST['id'];
        $date_approve = date('F j, Y h:i A');
        $usersFullname = $_POST['usersFullname'];

        $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Denied $usersFullname Barangay clearance request', '$date_approve')") or die(mysqli_error($conn));
        header('location: barangay_clearance.php');
    }

    else {
        header('location: barangay_clearance.php');
    }

    