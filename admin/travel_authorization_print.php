<?php
    {
        require_once 'include/connect.php';
        $id = $_GET['id'];
        $query = mysqli_query($conn,"select * from travelauthorization where ID ='$id'");
        while ($row = mysqli_fetch_assoc($query)) {
            // code...
            $usersFullname = $row['usersFullname'];
            $usersPurpose = $row['usersPurpose'];
            $address = $row['address'];
            $address_to_travel = $row['address_to_travel'];
            $date = date('Y-m-d');
        }
       

    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Authorization Clearance</title>
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
                <h2 class="title">Ceritification-Travel Authorization</h2>
            
                <div class="letter">
            
                    <h2>TO WHOM IT MAY CONCERN:</h2>

                    <p>This is to certiy that <u><?php echo $usersFullname ?></u>, is a bona file resident of this barangay with address at <u><?php echo $address ?></u>, has applied for record clearance. It is further certified that this person is know for his/her good moral character without any derogatory record in this barangay.</p>

                    <p>This certification is being issued for the purpose that the above-named person has undergone a 14-day quarantine and is Covid-18 free. This is to give him/her special travel pass to <u><?php  echo $address_to_travel ?></u>.</p>
                
                    
                    <p>IN WITNESS WHEREOF, I have hereunto set my hand and affixed the Official Seal of this office, done in the Barangay Hall, Barangay 206, Zone 19, District 11, City of Manila, this <u><?php echo date("F d(D), Y",strtotime($date)) ?></u>.</p>
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
            <!-- <button onclick="window.print()">Print Certificate</button> -->

         

            <form action="include/generate_travel_authorization_clearance.php" method="POST">

                <?php
                    $sql = "SELECT * FROM travelauthorization WHERE ID = '$id'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result)>0) {
                        while($row= mysqli_fetch_assoc($result)) {
                            $uname = $row["usersFullname"];
                            $uemail = $row["usersEmail"];
                            $upurpose = $row["usersPurpose"];
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
        
            <a href="travel_authorization.php">
                <button class="cancel">Cancel</button>
            </a>
        </div>
    </div>


</body>
</html>