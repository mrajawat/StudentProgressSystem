_____________________________________facultydashboard____________
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project/css/bootstrap.min.css">
  
  <title>admin dashboard</title>
  <style>
    *
    {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .header
    {
      height: 10%;
      width: 100%;
      top: 2%;
      background-color: silver;
      position: fixed;
      color: white;
      
      
    }
    #nav
    {
      margin-top: 7%;
    }
    #container
    {
      height: 75%;
      width:90%;
      background-color: whitesmoke;
      position:fixed ;
      
      top: 21%;
      border: solid 1px black;
      color: red;
      margin-left: 60px;
    }
    #td
    {
      border: 1px solid black;
      padding-left: 12px;
      text-align: left;
      width: 180px;
    }
    #id
    {
      border: 1px solid black;
      padding-left: 20px;
      color: black;
    }
    
  </style>
  


  <?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"sps");

  ?>
</head>
<body>
<div class="header">
<center><strong>Student progress system <br> </strong> Email:  <?php echo $_SESSION['T_EMAIL'] ?>  &nbsp&nbspName:<?php echo $_SESSION['T_NAME'] ?>
<a href="signout.php">Logout</a>
</center>
</div>
<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr>
        <td><input type="submit" name="search_student" value="Search Student"></td>
     
        <td><input type="submit" name="edit_student" value="Edit Student"></td>
       
        <td><input type="submit" name="add_student" value="Add Student"></td>

        <td><input type="submit" name="delete_student" value="Delete Students"></td>

        <td><input type="submit" name="show_students" value="Students"></td>

        <td><input type="submit" name="marks" value="Marks"></td>

      </tr>
    </table>
  </form>
  </center>
</div>

<div id="container">
  <div id="">
    <?php
    if(isset($_POST['search_student'])){

    ?>
    <center>
      <h4>Enter id to search Student</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input type="submit" name="search_by_rollno_search" value="Search"> 
      </form>
    </center>
    <?php
    }
    
    if(isset($_POST['search_by_rollno_search'])){
      $query = "select * from stud_table where S_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <table>
          <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_ID']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_NAME']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Batch:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_BATCH']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Mob:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_MOB']; ?>" disabled>
            </td>
          </tr>
            <td><b>EMAIL:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_EMAIL']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_DOB']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Gender:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_GENDER']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Address</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_ADDRESS']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Cousre:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_Course']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Password:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_PASSWORD']; ?>" hidden>
            </td>
          </tr>
          <tr>
            <td><b>City:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_CITY']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Pincode:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_PINCODE']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Country:</b></td>
            <td>
              <input type="text " value="<?php echo $row['S_COUNTRY']; ?>" disabled>
            </td>
          </tr>
          
        </table>

      <?php
      }
    }
    ?>
     <?php
    if(isset($_POST['edit_student'])){

    ?>
    <center>
      <h4>Enter id to edit Student details</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input type="submit" name="search_by_rollno_edit" value="Search"> 
      </form>
    </center>

    <?php
    }
    
    if(isset($_POST['search_by_rollno_edit'])){
      $query = "select * from stud_table where S_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <form action="teachereditstudent.php" method="POST">
        <table>
        <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " name="S_ID" value="<?php echo $row['S_ID']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " name="S_NAME" value="<?php echo $row['S_NAME']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Batch:</b></td>
            <td>
              <input type="text " name="S_BATCH" value="<?php echo $row['S_BATCH']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>MOB:</b></td>
            <td>
              <input type="text " name="S_MOB" value="<?php echo $row['S_MOB']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Email:</b></td>
            <td>
              <input type="text " name="S_EMAIL" value="<?php echo $row['S_EMAIL']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " name="S_DOB" value="<?php echo $row['S_DOB']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>gender:</b></td>
            <td>
              <input type="text " name="S_GENDER" value="<?php echo $row['S_GENDER']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Address:</b></td>
            <td>
              <input type="text " name="S_ADDRESS" value="<?php echo $row['S_ADDRESS']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Course:</b></td>
            <td>
              <input type="text " name="S_Course" value="<?php echo $row['S_Course']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Password:</b></td>
            <td>
              <input type="text " name="S_Course" value="<?php echo $row['S_PASSWORD']; ?>" hidden >
            </td>
          </tr>
          <tr>
            <td><b>City:</b></td>
            <td>
              <input type="text " name="S_Course" value="<?php echo $row['S_CITY']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Pincode:</b></td>
            <td>
              <input type="text " name="S_Course" value="<?php echo $row['S_PINCODE']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Country:</b></td>
            <td>
              <input type="text " name="S_Course" value="<?php echo $row['S_COUNTRY']; ?>" >
            </td>
          </tr>
          
          <tr>
            <td></td>
            <td>
              <input type="submit" name="edit" value="Save">
            </td>
          </tr>
          
        </table>
        </form>

      <?php
      }
    }
    ?>

    <?php
      if(isset($_POST['add_student']))
      {
        ?>
        <center><h4>fill the given details</h4></center>
        <form action="addstudent.php" method="POST">
          <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="S_ID" required></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><input type="text" name="S_NAME" required></td>
          </tr>
          <tr>
            <td>Batch</td>
            <td><input type="text" name="S_BATCH" required></td>
          </tr>
          <tr>
            <td>MOB</td>
            <td><input type="text" name="S_MOB" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="S_EMAIL" required></td>
          </tr>
          <tr>
            <td>DOB</td>
            <td><input type="text" name="S_DOB" required></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="text" name="S_GENDER" required></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="S_ADDRESS" required></td>
          </tr>
          <tr>
            <td>Course</td>
            <td><input type="text" name="S_Course" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="S_PASSWORD" required></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="S_CITY" required></td>
          </tr>
          <tr>
            <td>Pincode</td>
            <td><input type="text" name="S_PINCODE" required></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><input type="text" name="S_COUNTRY" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="add" value="add student"> </td>
          </tr>
          </table>
        </form>
        <?php
      }
      
    ?>
    <?php
      if(isset($_POST['delete_student']))
    
      {
        ?>
        <center>
          <h4>Enter id to delete student</h4>
          <form action="deletestudent.php" method="POST">
            id <input type="text" name="id">
            <input type="submit" name="search_for_delete" value="delete student">
          </form>
        </center>
        <?php
      }
    ?>

    <?php
      if(isset($_POST['show_students'])){
        ?>
        <center>
          <h4>students details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from stud_table";
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">
             


             <table>
          <tr>
            <td style="color: black;">ID</td>
            <td><?php echo $row['S_ID']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Name</td>
            <td><?php echo $row['S_NAME']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">BATCH</td>
            <td><?php echo $row['S_BATCH']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">MOB NO</td>
            <td><?php echo $row['S_MOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Email</td>
            <td><?php echo $row['S_EMAIL']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">DOB</td>
            <td><?php echo $row['S_DOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Gender</td>
            <td><?php echo $row['S_GENDER']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Address</td>
            <td><?php echo $row['S_ADDRESS']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">COURSE</td>
            <td><?php echo $row['S_Course']; ?></td>
          </tr>
          
          <tr>
            <td style="color: black;">CITY</td>
            <td><?php echo $row['S_CITY']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">PINCODE</td>
            <td><?php echo $row['S_PINCODE']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">COUNTRY</td>
            <td><?php echo $row['S_COUNTRY']; ?></td>
          </tr>
          
          </table>
          <br>
          <br>
             </div>
           
           <?php
         }
        
      }
    ?>
   
  </div>

</div>
  <script src="js/jquery-3.5.1.js"></script>
  <script scr="js/bootstrep.min.js"></script>
</body>
</html>
__________________________________addstudent.php_______
<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 $query = "insert into stud_table values($_POST[S_ID],'$_POST[S_NAME]','$_POST[S_BATCH]','$_POST[S_MOB]','$_POST[S_EMAIL]','$_POST[S_DOB]','$_POST[S_GENDER]','$_POST[S_ADDRESS]','$_POST[S_Course]','$_POST[S_PASSWORD]',
     '$_POST[S_CITY]',
     '$_POST[S_PINCODE]',
     '$_POST[S_COUNTRY]')";
 
  $query_run = mysqli_query($connection,$query); 
?>

<script>
  alert("Successfully added");
  window.location.href = "facultydashboard.php";
</script>
______________________________faculty.php_________
<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
<style>
@charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

after { clear: both; }

#login {
  margin: 50px auto;
  width: 320px;
  margin-top: 16%;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 260px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 260px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}
</style>
<body>
    <div id="login">
      <form name='form-login' action="" method="POST">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="T_EMAIL" placeholder="E-mail" required >
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" name="T_Password" placeholder="Password" required>
        
        <input type="submit" name="submit" value="Login">


      </form>
      <?php
  session_start();
    if(isset($_POST['submit']))
    {
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"sps");
      $query = "select * from teachers_table where T_EMAIL = '$_POST[T_EMAIL]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run))
      {
        if($row['T_EMAIL'] == $_POST['T_EMAIL'])
        {
          if($row['T_Password'] == $_POST['T_Password'])
          {
            $_SESSION['T_EMAIL'] = $row['T_EMAIL'];
            $_SESSION['T_NAME'] = $row['T_NAME'];
            header("location: facultydashboard.php");
          }
          else{
            echo "incorrect";

          }
          
        }
        else{
          echo "wrong email";
        }

      }

    }


  ?>
</body>
_____________________________deletestudent.php__
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
____________