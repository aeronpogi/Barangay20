<?php
 include('include/connect.php');
//  include('include/sidebar.php');


   if($_POST['request']){
   // if(isset($_POST['request'])){

      $request = $_POST['request'];


       $sql = "SELECT * FROM rbi_tenant where rbi_id ='$request' && status='Active'";
       $result = mysqli_query($conn, $sql);

       ?>
        <option selected disabled>Select…</option>
       <?php
       while($row = mysqli_fetch_assoc($result)) {
        //    $fullname = $row['full_name'];
           ?>

           
            <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name'];?></option>
           <?php
           
       }
      
       
   }
   
   else if(isset($_POST['resident'])) {

         $resident = $_POST['resident'];

         $sql = "SELECT * FROM rbi_tenant where full_name ='$resident'";
         $result = mysqli_query($conn, $sql);
  
         ?>
             <option selected disabled>Select…</option>
         <?php
         while($row = mysqli_fetch_assoc($result)) {
          //    $fullname = $row['full_name'];
             ?>
      
              <option value="<?php echo $row['resident_no'];?>"><?php echo $row['resident_no'];?></option>
             <?php
             
         }
      
      
 
   }

   else if(isset($_POST['residentID'])) {

      $residentID = $_POST['residentID'];

      $sql = "SELECT * FROM rbi_tenant where resident_no ='$residentID'";
      $result = mysqli_query($conn, $sql);

     
      
      ?>
      <option selected disabled>Select…</option>
    
      <?php
      while($row = mysqli_fetch_assoc($result)) {
          ?>
           <option value="<?php echo $row['street'];?>"><?php echo $row['street'];?></option>

          <?php
          
      }
   
   

}


 

?>

