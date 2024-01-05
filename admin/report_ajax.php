<?php

usleep( 250000 );
 include('include/connect.php');
//  include('include/sidebar.php');


//    if($_POST['filterSearch']){
   // if(isset($_POST['request'])){
    if(isset($_POST['filterSearch'])){
        $search = $_POST['filterSearch'];

        if($search == "Civil Status") {

            ?>
            <option value="">Select Category</option>
            <option value="Married">Married</option>
            <option value="Single">Single</option>
            <?php
        }

        
        else if($search == "3") {

            ?>
            <option value="">Select Category</option>
            <option value="No Educational">No Educational</option>
            <option value="Elementary Undergraduate">Elementary Undergraduate</option>
            <option value="Elementary Graduate">ELementary Graduate</option>
            <option value="Highschool Undergraduate">Highschool Undergraduate</option>
            <option value="Highschool Graduate">Highschool Graduate</option>
            <option value="College Undergraduate">College Undergraduate</option>
            <option value="College Graduate">College Graduate</option>
            <?php
        }

        else if($search == "7") {

            ?>
            <option value="">Select Category</option>
            <option value="Employed">Employed</option>
            <option value="Unemployed">Unemployed</option>
          
            <?php
        }

        else if($search == "4") {

            ?>
            <option value="">Select Category</option>
            <option value="Voters">Voters</option>
            <option value="Non-voters">Non-voters</option>
        
            <?php
        }

        else if($search == "1") {

  

            $query = mysqli_query($conn, "SELECT * from rbi_tenant") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }
        
        
        else if($search == "5") {

         

            $query = mysqli_query($conn, "SELECT * from rbi_tenant where status='Deceased'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }


        else if($search == "6") {

            ?>
            <option value="">Select Category</option>
            <option value="Infant">Infant</option>
            <option value="Minor">Minor</option>
            <option value="Adult">Adult</option>
            <option value="Senior">Senior</option>
    
            <?php

            $query = mysqli_query($conn, "SELECT * from rbi_tenant ") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }
    }
    else if (isset($_POST['filterMatch'])){

        $filterMatch = $_POST['filterMatch'];

        // $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE civil_Status='$filterMatch' and status='Active'");
        // $row2 = mysqli_num_rows($query2);
        // echo $row2;


        if($filterMatch == 'Single') {

            $query = mysqli_query($conn, "SELECT * from rbi_tenant where civil_Status ='Single' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Married') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where civil_Status ='Married' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        
        else if ($filterMatch == 'No Educational') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='No Educational' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }


        else if ($filterMatch == 'Elementary Undergraduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='Elementary Undergraduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Elementary Graduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='Elementary Graduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Highschool Undergraduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='Highschool Undergraduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Highschool Graduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='Highschool Graduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'College Undergraduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='College Undergraduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'College Graduate') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where educ_attainment ='College Graduate' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Voters') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where voter_status ='Registered' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Non-voters') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where voter_status ='Not-Registered' and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 
                                
                                    <td>
                                    <?php echo $row['age']; ?>
                                    </td>
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }


        else if ($filterMatch == 'Infant') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where age <= 1 and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                   
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        
        else if ($filterMatch == 'Minor') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where age < 18 and age >1 and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Adult') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where age > 17 and age < 58 and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        
        else if ($filterMatch == 'Senior') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where age > 59 and status='Active'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }
  
        else if ($filterMatch == 'Employed') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where occupation !='N/A' AND occupation <>'Student' ") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }

        else if ($filterMatch == 'Unemployed') {
            $query = mysqli_query($conn, "SELECT * from rbi_tenant where occupation ='N/A' or occupation ='Student'") or die(mysqli_error($conn));
                                
    
            if(mysqli_num_rows($query) > 0) {
    
                while($row = mysqli_fetch_array($query)) {
                    ?>
                         <tr>
                                <td><?php echo $row['rbi_id']; ?></td>
                
                                <td>
                                <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                                </td>
                                <td  width="">
                                    <?php echo $row['full_name']; ?>
                                </td>
                            
                                    <td>
                                    <?php echo $row['street']; ?>
                                    </td>
        
                                    <td width="">
                                    <?php echo $row['birth_place']; ?>
                                    </td> 
                                    <td>
                                    <?php echo $row['birth_date']; ?>
                                    </td>
                                    <td width="">
                                    <?php echo $row['gender']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['civil_status']; ?>
                                    </td> 
                                <td width="">
                                    <?php echo $row['tenantOwner']; ?>
                                    </td> 
                                    <td width="">
                                    <?php echo $row['occupation']; ?>
                                    </td> 

                                    <td width="">
                                    <?php echo $row['age']; ?>
                                    </td> 
                                
                                </tr>
                    <?php
                }
            
            }else {
                ?>
                    <tr>
                        <td colspan="10">No record found</td>
                    </tr>
                <?php
            }
        }
  

        
    }


 

?>

