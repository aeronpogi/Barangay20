<?php
    {
        require_once 'include/connect.php';
        $id = $_GET['id'];
        $query = mysqli_query($conn,"select * from application where id ='$id'");
        while ($row = mysqli_fetch_assoc($query)) {
            // code...
            $usersFullname = $row['uname'];
            $address = $row['street'];
            $usersPurpose = $row['upurpose'];

        }
       

    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
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
                <h2 class="title">Certificate of Indigency</h2>
            
                <div class="letter" style="padding: 0px;">
            
                    <h2>TO WHOM IT MAY CONCERN:</h2>

                    <p>This is to certify that the person whose name appear herein has applied for RECORD CLEARANCE from this office and is a bonda fide resident of this barangay.</p>
                    <p>It is further certificed that this person is known for his/her good moral character without any derogatory record in this barangay.</p>
                    <p class="info">Name : <?php echo $usersFullname;?></p>
                    <p class="info">Address : <?php echo $address;?></p>
                    <p class="info">Purpose : <?php echo $usersPurpose;?></p>

                    <p>This cerfication is issued in accordance with the implementation of the New Local Government Code of 1991 and for this purpose only, bail.</p>
                    
                    <p>IN WITNESS WHEREOF, I have hereunto set my hand and affixed the Official Seal of this office, done in the Barangay Hall, Barangay 206, Zone 19, District 11, City of Manila, this</p>
                </div>

                <div class="chairman" style="margin-top:10px">
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
            <!-- <button onclick="window.print()">Print Certificate</button> -->

         

            <form action="include/generate_barangay_indigency.php" method="POST">

                <?php
                    $sql = "SELECT * FROM application WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result)>0) {
                        while($row= mysqli_fetch_assoc($result)) {
                            ?>
                            
                            <input type="hidden" value="<?php echo $id;?>"name="id">
                            <input type="hidden" value="<?php echo $uname;?>"name="uname">
                            <input type="hidden" value="<?php echo $uemail;?>"name="uemail">
                            <input type="hidden" value="<?php echo $upurpose;?>"name="upurpose">
                            <input type="hidden" value="<?php echo $uaddress;?>"name="uaddress">
                            <button type="submit" name="generate" onclick="window.print()">Print Certificate</button>
                            <?php
                        }
                    }
                ?>
               
            </form>
        
            <a href="barangay_clearance.php">
                <button class="cancel">Cancel</button>
            </a>
        </div>
    </div>


</body>
</html>