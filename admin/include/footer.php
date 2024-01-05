<footer class="main-footer">
    <strong>Copyright &copy; 2022 - 2025 <a href="#">Barangay 206</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="dist/js/moment.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bootstrap-fileinput/js/fileinput.min.js"  type="text/javascript"></script>

<script src="ctp_.js"></script>
<script src="dist/js/fullcalendar.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- <script src="js/password.js"></script> -->
<!-- <script src="js/calendar.js"></script> -->
<script src="js/editUserAccount.js"></script>

<!-- page script -->


<script>
    $(document).ready(function(){

      $("#searchSubmit").on('click', function(){
        var input = $("#rbisearchFilterValue").val();
        //  alert(input); 

          $.ajax({
            url: "rbiSearch.php",
            type: "POST",
            data: "rbiSearch=" + input,
            success: function(data){
              $("#rbiCon").html(data);
            }
          })

      });

      $("#searchSubmit").on('keyup', function(){
        $("#icon").css("display", "none");
      })
    })
</script>
<script>
  
  // const editButton = document.querySelectorAll('.edit-btn');

  // editButton.forEach(el => {
  //     el.addEventListener('click', function(){
  //         const targetId = this.dataset.target;
  //         const targetElement = document.getElementById(targetId);
  //         this.dataset.show ? this.dataset.show = 'false' : this.dataset.show = 'true';
      
  //         // const enabledView = targetElement.querySelector('.enabledView');
  //         // const disabledView = targetElement.querySelector('.disabledView');
  //         const enabledView = targetElement.querySelector('.disabledForm');
  //         const disabledView = targetElement.querySelector('.enabledForm');
      
  //         if(this.dataset.show === 'true'){
  //             disabledView.style.display = 'none';
  //             enabledView.style.display = 'block';
  //         }else{
  //             disabledView.style.display = 'block';
  //             enabledView.style.display = 'none';
  //         }
  //     });
  // });

  const editButton = document.querySelectorAll('.edit-btn');

  editButton.forEach(el => {
  el.addEventListener('click', function(){
      const targetId = this.dataset.target;
      const targetElement = document.getElementById(targetId);
      targetElement.dataset.show ==='false' ? targetElement.dataset.show = 'true' : targetElement.dataset.show = 'false';
      console.log(targetElement.dataset.show);
      const enabledView = targetElement.querySelector('.disabledForm');
      const disabledView = targetElement.querySelector('.enabledForm');
      if(targetElement.dataset.show === 'true'){
          disabledView.style.display = 'none';
          enabledView.style.display = 'block';
      }else{
          disabledView.style.display = 'block';
          enabledView.style.display = 'none';
      }
  });
});
</script>
</body>
</html>