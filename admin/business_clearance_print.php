<?php
date_default_timezone_set('Asia/Manila');
    {

        require_once 'include/connect.php';
        $id = $_GET['id'];
        $query = mysqli_query($conn,"select * from application where ID ='$id'");
        while ($row = mysqli_fetch_assoc($query)) {
            // code...
            $businessName = $row['businessName'];
            $businessType = $row['businessType'];
            $businessAddress = $row['businessAddress'];
            $date_approve = date('F D, Y');
            $owner = $row['uname'];

        }
       

    }

    // if(isset($_POST["denied"])) {
    //     require_once './includes/dbh.inc.php';

    //     $uemail = $_POST["email"];
    //     $newid = $_POST["newid"];

    //     $to = "$uemail";
    //     $subject = "App";
    //     $msg = "Hello world!";
    //     $headers = "From: webmaster@example.com" . "\r\n" .
    //     "CC: somebodyelse@example.com";

    //     mail($to,$subject,$msg,$headers);

    //     $sql2 = "UPDATE barangayclearance SET req_status ='denied' WHERE ID = '$newid'";
    //     mysqli_query($conn, $sql2);

    //     header("location: ./services-barangay-clearance.php");
    //     exit();

    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance</title>
    <link rel="stylesheet" href="css/certificates.css">
</head>
<body>
    <div class="wrapper">

        <div id="print">


            <div class="header">
                <div class="box logo">
                    <img src="img/Barangay.svg" alt="">
                </div>
                <div class="box txt">
                    <h3>Republic of the Philippines</h3>
                    <h2>OFFICE OF THE </h2>
                    <h2>BARANGAY CHAIRMAN</h2>
                    <h3>BARANGAY 206, ZONE 19, DISCRICT 11, MANILA</h3>
                </div>
                <div class="box logo">
                    <img src="img/lungsod.png" alt="">
                </div>
            </div>

            <main>
                <h2 class="title" style="color: red;">Barangay Business Clearance</h2>
            
                <div class="letter">
            
                    <h2>TO WHOM IT MAY CONCERN:</h2>

                    <p>This is certify that the business establishment with business name, address and owner's name is hereby granted this Barangay clearance as required by law under Republic Act No. 7160, otherwise known as the LOCAL GOVERNMENT CODE of 1991 to writ:</p>
                    <center>
                    <p class="info">Business Name : <?php echo $businessName;?></p>
                    <p class="info">Type of Business : <?php echo $businessType;?></p>
                    <p class="info">Business Address : <?php echo $businessAddress;?></p>
                    <p class="info">Owner/Proprietor : <?php echo $owner;?></p>
                   <!--  <p class="info">Address : <?php echo $usersPurpose;?></p> -->
                    </center>

                    <p>This cerfication is issued upon the request of the interested party for the applcation/renewal of business permit.</p>
                    
                    <p>Give this <u><?php echo $date_approve ?></u> city of Manila Philippines</p>
                </div>

                <div class="chairman">
                    <div class="chairman-name">
                        <h1>ROMEO MARCELLANO</h1>
                        <center>
                            <h3>Barangay Chairman</h3>
                        </center>
                    </div>
                   
                </div>
            </main>

        </div>
     
        <div class="btn">
            <button onclick="window.print()">Print Certificate</button>

         

        
            <a href="business_clearance.php">
                <button class="cancel">Cancel</button>
            </a>
        </div>
    </div>


</body>
</html>