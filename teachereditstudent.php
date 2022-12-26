<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "update students_table set S_ID = 'S_ID', S_NAME = '$_POST[S_NAME]',S_BATCH = '$_POST[S_BATCH]',S_MOB = '$_POST[S_MOB]',S_EMAIL = '$_POST[S_EMAIL]',T_MOB = '$_POST[T_MOB]',S_DOB = '$_POST[S_DOB]',S_GENDER = $_POST[S_GENDER],S_ADDRESS = '$_POST[S_ADDRESS]',S_COURSE = '$_POST[S_COURSE]',S_PASSWORD = '$_POST[S_PASSWORD]',S_CITY = '$_POST[S_CITY]',S_PINCODE = '$_POST[S_PINCODE]',S_COUNTRY = '$_POST[S_COUNTRY]' where T_ID = $_POST[T_ID]";
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully updated");
  window.location.href = "facultydashboard.php";
</script>