<?php
usleep( 250000 );
 include('include/connect.php');


 if (isset($_POST['data2'], $_POST['data3'])){


        $from = $_POST['data2'];
        $to = $_POST['data3'];


          
          $query = mysqli_query($conn, "SELECT * from application where udate_approve between '$from' and '$to' and pickupMode='Delivery';") or die(mysqli_error($conn));
                    
          if($query->num_rows > 0){ 
            while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              ?>
                  <tr>
                  <td><?php echo $row['permit_type']; ?></td>
                  <td>
                  <?php echo $row['uname']; ?>
                  </td>
                  <td >
                  <?php echo $row['udate_approve']; ?>
                    </td>
            
                    <td>
                    <?php echo $row['fee']; ?>
                    </td>
                   
                  
                  </tr>
              <?php
            }
          }else {
              ?>
              <td colspan="6">No record found</td>
              <?php
          }
    



    }


 

?>

