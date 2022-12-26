<script>
  if(confirm("Are you sure, you want to delete"))
  {
    document.write(<?php 
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"sps");
      $query = "delete from department where D_Name = '$_POST[name]' ";
       $query_run = mysqli_query($connection,$query);
      
       
      ?>);
     
      window.location.href = "admindashboard.php";
  }
  else
  {
    window.location.href = "admindashboard.php";
  }
</script>
