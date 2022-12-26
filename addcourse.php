<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into course_info values(null,'$_POST[batch]','$_POST[Degree]','$_POST[semester]','$_POST[code]','$_POST[course]')";
 
  $query_run = mysqli_query($connection,$query); 
?>

<script>
  alert("Successfully added");
  window.location.href = "facultydashboard.php";
</script>