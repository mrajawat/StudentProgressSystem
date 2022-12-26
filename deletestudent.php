<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "DELETE FROM stud_table WHERE S_ID = $_POST[id]";
 

  $query_run = mysqli_query($connection,$query);


 // sql to delete a record


if ($connection->query($query) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
  
?>

<script>
  alert("Successfully added");
  window.location.href = "facultydashboard.php";
</script>