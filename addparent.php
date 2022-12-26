<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into parents_table values(null,'$_POST[F_name]','$_POST[M_name]','$_POST[F_occupation]','$_POST[M_occupation]','$_POST[F_mobno]','$_POST[M_mobno]','$_POST[Email]','$_POST[Country]','$_POST[City]')";
 
  $query_run = mysqli_query($connection,$query); 
?>

<script>
  alert("Successfully added");
  window.location.href = "addstudentdetail.php";
</script>