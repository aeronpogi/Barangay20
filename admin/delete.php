<?php
include_once("include/session.php");

if (isset($_POST['btn_delete'])) {
    # code...
    $id = $_POST['id'];
    $rbi = $_POST['rbi'];
    $famId = $_POST['famiId'];
    $page = $_POST['page'];
    $blotterSession_id = $_POST['blotterSession_id'];

    if($page=="users"){
        
        $Query = mysqli_query($conn, "delete from tbl_users where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:user_management.php");

    }
    elseif ($page=="clearance") {
        # code...
        // $Query = mysqli_query($conn, "delete from application where permit_type='Barangay Clearance' AND id='$id' ") or die(mysqli_error($conn));
        $Query = mysqli_query($conn, "update application set ustatus ='Archive' where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:barangay_clearance.php");

    }elseif ($page=="business") {
        # code...
        $Query = mysqli_query($conn, "delete from application where permit_type='Business Clearance' AND id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:business_clearance.php");
    }elseif ($page=="indigency") {
        # code...
        $Query = mysqli_query($conn, "delete from application where permit_type='Indigency'and id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:barangay_indigency.php");
    }
    elseif ($page=="travel") {
        # code...
        $Query = mysqli_query($conn, "delete from application where permit_type='Travel Authorization' and  id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:travel_authorization.php");
    }
    elseif ($page=="App_archive") {
        # code...
        $Query = mysqli_query($conn, "delete from application where id='$id' ") or die(mysqli_error($conn));
        $_SESSION["success"] = "Deleted Successfully";
        header("location:archive_application.php");
    }
    elseif ($page=="resident") {
        # code...
        $Query = mysqli_query($conn, "delete from user_account where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:residents.php");
    }
    elseif ($page=="staff") {
        # code...
        $Query = mysqli_query($conn, "delete from brgy_account where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:staff.php");
    }
    elseif ($page=="officials") {
        # code...
        $Query = mysqli_query($conn, "delete from brgy_account where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:kagawad.php");
    }
    elseif ($page=="admin") {
        # code...
        $Query = mysqli_query($conn, "delete from brgy_account where id='$id'") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:admin.php");
    }
    elseif ($page=="news") {
        # code...
        $Query = mysqli_query($conn, "delete from news where id='$id' ") or die(mysqli_error($conn));
        $_SESSION["success"] = "Deleted Successfully";
        header("location:news.php");
    }
    elseif ($page=="businessRequest"){
        $Query = mysqli_query($conn, "delete from business where ID='$id' ") or die(mysqli_error($conn));
        $_SESSION["success"] = "Deleted Successfully";
        header("location:businesses_request.php");
    }
    elseif ($page=="street") {
        # code...
        $Query = mysqli_query($conn, "delete from street where id='$id' ") or die(mysqli_error($conn));
        $_SESSION["success"] = "Deleted Successfully";
        header("location:street.php");
    }
    elseif ($page=="rbi") {
        # code...
        $Query = mysqli_query($conn, "delete from rbi_tenant where rbi_id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:rbi.php");
    }
    elseif ($page=="blotter") {
        # code...
        $Query = mysqli_query($conn, "delete from blotter where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:blotter.php");
    }
    elseif ($page =="blotterSession") {
        $Query = mysqli_query($conn, "delete from blotter where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:blotterSession.php?id=$blotterSession_id");
    }
    elseif ($page=="complaints") {
        # code...
        $Query = mysqli_query($conn, "delete from complaints where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:complaint.php");
    }
    elseif ($page=="member") {
        # code...
        $Query = mysqli_query($conn, "delete from rbi_tenant where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:member.php?id=$rbi");
    }

    elseif ($page=="Familymember") {
        # code...
        $Query = mysqli_query($conn, "delete from rbi_tenant where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:rbiMemberFamily.php?id=$rbi&&familyNo=$famId");
    }
    elseif($page == "rbiMember") {
        $Query = mysqli_query($conn, "delete from rbi_tenant where id='$id' ") or die(mysqli_error($conn));
        $_SESSION['success'] = "Deleted Successfully";
        header("location:rbiMember.php?id=$rbi");
    }
    else{

        header("location:dashboard.php");
    }
}

?>