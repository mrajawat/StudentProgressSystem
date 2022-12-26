<?php
session_start();
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $teachername = $_SESSION['T_NAME'];
 $subject = $_SESSION['SPECIALISATION'];
 $query = "insert into attendance values('$subject','$_POST[sid]','$_POST[Study_period]','$teachername','$_POST[date]','$_POST[p]')";
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully added");
  window.location.href = "facultydashboard.php";
</script>