<?php
usleep( 250000 );
 include('include/connect.php');


 if (isset($_POST['data2'], $_POST['data3'])){


        $from = $_POST['data2'];
        $to = $_POST['data3'];


          
          $query = mysqli_query($conn, "SELECT * from blotter where date BETWEEN '$from' AND '$to';") or die(mysqli_error($conn));
                    
          if($query->num_rows > 0){ 
            while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              ?>
                  <tr>
                  <td><?php echo $row['blotterID']; ?></td>
                  <td>
                  <?php $date = $row['date']; ?>
                                  <?php
                                      echo date('m-d-Y',strtotime($date));
                                  ?>
                  </td>
                  <td >
                  <?php echo $row['natureCases']; ?>
                    </td>
            
                    <td><?php echo $row['complainant']?></td> 
                    <td>
                    <?php echo $row['status']; ?>
                    </td>
                  
                  </tr>
              <?php
            }
          }else {
              ?>
              <td colspan="6">No cases found</td>
              <?php
          }
    



    }


 

?>

