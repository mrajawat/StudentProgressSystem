<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "update teachers_table set T_NAME = '$_POST[T_NAME]',T_EMAIL = '$_POST[T_EMAIL]',T_DOB = '$_POST[T_DOB]',T_GENDER = '$_POST[T_GENDER]',T_MOB = '$_POST[T_MOB]',T_ADDRESS = '$_POST[T_ADDRESS]',T_PINCODE = $_POST[T_PINCODE],T_CITY = '$_POST[T_CITY]',T_COUNTRY = '$_POST[T_COUNTRY]',SPECIALISATION = '$_POST[SPECIALISATION]' where T_ID = $_POST[T_ID]";
  $query_run = mysqli_query($connection,$query);
?>

<script>
  alert("Successfully updated");
  window.location.href = "admindashboard.php";
</script>