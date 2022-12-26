
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sps");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['add'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	//$image_text = mysqli_real_escape_string($db, $_POST['ID'],$_POST['NAME'],$_POST['EMAIL'],$_POST['Password'],$_POST['DOB'],$_POST['GENDER'],$_POST['MOB'],$_POST['ADDRESS'],$_POST['PINCODE'],$_POST['CITY'],$_POST['COUNTRY']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO teachers_table VALUES ($_POST[ID],'$_POST[NAME]','$_POST[EMAIL]','$_POST[Password]','$_POST[DOB]','$_POST[GENDER]','$_POST[MOB]','$_POST[ADDRESS]','$_POST[PINCODE]','$_POST[CITY]','$_POST[COUNTRY]','$_POST[SPECIALISATION]','$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM teachers_table");
?>

<script>
  alert("Successfully added");
  window.location.href = "admindashboard.php";
</script>