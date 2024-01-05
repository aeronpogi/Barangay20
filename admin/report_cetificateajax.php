<?php
usleep( 250000 );
 include('include/connect.php');


 if (isset($_POST['data1'], $_POST['data2'], $_POST['data3'])){

        $filterMatch = $_POST['data1'];

        $from = $_POST['data2'];
        $to = $_POST['data3'];


        if($filterMatch == "General") {

          $query = mysqli_query($conn, "SELECT * from application where ustatus='Approved'  AND udate_approve BETWEEN '$from' AND '$to';") or die(mysqli_error($conn));
                    
          if($query->num_rows > 0){ 
            while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              ?>
                  <tr>
                    <td><?php echo $row['urbi']; ?></td>
                  <td>
                      <?php echo $row['uname']; ?>
                  </td>
                  <td  width="20%">
                      <?php echo $row['upurpose']; ?>
                    </td>
            
                    <td>
                    <?php $date = $row['udate']; ?>
                      <?php
                          echo date('m-d-Y',strtotime($date));
                      ?>
                    </td>
                 
                  
                  </tr>
              <?php
            }
          }else {
            ?>
            <td colspan="6">No record found</td>
            <?php
           }
          exit();

        }
        else {

          $query = mysqli_query($conn, "SELECT * from application where permit_type = '$filterMatch' and ustatus='Approved'  AND udate_approve BETWEEN '$from' AND '$to';") or die(mysqli_error($conn));
                    
          if($query->num_rows > 0){ 
            while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              ?>
                  <tr>
                    <td><?php echo $row['urbi']; ?></td>
                  <td>
                      <?php echo $row['uname']; ?>
                  </td>
                  <td  width="20%">
                      <?php echo $row['upurpose']; ?>
                    </td>
            
                    <td>
                    <?php $date = $row['udate']; ?>
                      <?php
                          echo date('m-d-Y',strtotime($date));
                      ?>
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
          
    



    }


 

?>

