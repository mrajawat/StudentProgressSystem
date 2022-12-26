<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into stud_table values(null,'$_POST[S_NAME]','$_POST[S_BATCH]','$_POST[S_MOB]','$_POST[S_EMAIL]','$_POST[S_DOB]','$_POST[S_GENDER]','$_POST[S_ADDRESS]','$_POST[S_COURSE]','$_POST[S_PASSWORD]',
     '$_POST[S_CITY]',
     '$_POST[S_PINCODE]',
     '$_POST[S_COUNTRY]')";
 
  $query_run = mysqli_query($connection,$query); 
?>

<script>
  alert("Successfully added");
  window.location.href = "facultydashboard.php";
</script>