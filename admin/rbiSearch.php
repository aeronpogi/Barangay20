<?php

include('include/connect.php');
if(isset($_POST['rbiSearch'])) {

    $input = $_POST['rbiSearch'];


    $sql = "SELECT * FROM rbi_tenant where full_name ='$input' OR firstname='$input' OR lastname='$input';";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)> 0) {

        ?>
                <thead>
                          <tr>
                              <th>RBI No.</th>
                              <th>Resident ID </th>
                              <th>Fullname</th>
                              <th >Status</th>
                              <th >Action</th>
                            </tr>
                       </thead>
        <?php

        while($row = mysqli_fetch_assoc($result)) {
        //    $fullname = $row['full_name'];
        $id = $row['id'];
        $rbiId = $row['rbi_id'];
        $famNo = $row['family_no'];
            ?>
            <tr>
                <td><?php echo $row['rbi_id']?></td>
                <td><?php echo $row['resident_no']?></td>
                <td><?php echo $row['full_name']?></td>
                 
                <td >
                      <?php 
                      
                        if($row['status']=='Transferred') { ?>
                          <span class="badge badge-warning"> 
                            <?php echo $row['status']; ?>
                          </span>
                   
                      <?php }
                      
                      else if ($row['status'] == 'Active'){ ?>
                        <span class="badge badge-success"> 
                        <?php echo $row['status']; ?>
                        </span>
                     
                      <?php }else { ?>
                        <span class="badge badge-danger"> 
                        <?php echo $row['status']; ?>
                        </span>
                      <?php } ?>
                      
                    </td>
                <td > 
                    <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit>
                        <i class="fa fa-eye"></i>  Details 
                      </button> -->
                      <a href="rbiMemberFamily.php?id=<?php echo $rbiId?>&&familyNo=<?php echo $famNo;?>" class="btn btn-info btn-sm" >
                      <i class="fa fa-eye"></i>  Family 
                    </a>
                </td>   
            </tr>
   
            <?php
            //   include("rbiMemberFamilyEditModal.php");
            
        }
    }else {
        ?>
        <td>No record found!</td>
        <?php
    }
}
?>
