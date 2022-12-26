<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into department values('$_POST[D_no]','$_POST[D_name]','$_POST[D_head]')";
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully added");
  window.location.href = "admindashboard.php";
</script>