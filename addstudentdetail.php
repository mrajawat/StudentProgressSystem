<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
    .jumbotron{
      padding:40px;
      background-color:#f4f9f9;
    }
    #nav
    {
      margin-top: 0%;
      float:left;
      
    }
    .nav{
      width:150px;
      padding-left:10px;
    }
    #container
    {
      width:80%;
      padding:20px;
      background-color: whitesmoke;
      position:absolute ;
      float: right;
      
      border: solid 1px black;
      color: #625261;
      margin-left:15%;
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
<section class="jumbotron text-center">
    <div class="container">
      <h2>Student Dashboard</h2>
      <p>
      Email:  <?php echo $_SESSION['T_EMAIL'] ?> /
      Name:   <?php echo $_SESSION['T_NAME'] ?>/
      </p>
      <a href="facultydashboard.php">Back</a>
      
    </div>
  </section>

<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr>
        <td><input class="btn btn-primary nav" type="submit" name="parent_info" value="add Parent details"></td>
     </tr>
        
       <tr>
        <td><input class="btn btn-primary nav" type="submit" name="add_student" value="Add Student Details"></td>

        

      </tr>
    </table>
  </form>
  </center>
</div>

<div id="container">
  <div id="">
   
    
    

    <?php
      if(isset($_POST['add_student']))
      {
        ?>
        <center><h4>fill Student details</h4></center>
        <form action="addstudent.php" method="POST">
          <table>
          
          <tr>
            <td>Name</td>
            <td><input type="text" name="S_NAME" required></td>
          
            <td>Batch</td>
            <td><input type="text" name="S_BATCH" required></td>
          </tr>
          <tr>
            <td>MOB</td>
            <td><input type="text" name="S_MOB" required></td>
          
            <td>Email</td>
            <td><input type="text" name="S_EMAIL" required></td>
          </tr>
          <tr>
            <td>DOB</td>
            <td><input type="date" name="S_DOB" required></td>
          
            <td>Gender</td>
            <td><input type="text" name="S_GENDER" required></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input  type="text" name="S_ADDRESS" required></td>
          
            <td>Course</td>
            <td><input type="text" name="S_COURSE" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="S_PASSWORD" required></td>
          
            <td>City</td>
            <td><input type="text" name="S_CITY" required></td>
          </tr>
          <tr>
            <td>Pincode</td>
            <td><input type="text" name="S_PINCODE" required></td>
          
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
      if(isset($_POST['parent_info']))
      {
        ?>
        <center><h4>fill Parent details</h4></center>
        <form action="addparent.php" method="POST">
          <table>
          
          <tr>
            <td>Father Name</td>
            <td><input type="text" name="F_name" required></td>
         
            <td>Mother Name</td>
            <td><input type="text" name="M_name" required></td>
            </tr>
          <tr>
            <td>Father Occupation</td>
            <td><input type="text" name="F_occupation" required></td>
          
            <td>Mother Occupation</td>
            <td><input type="text" name="M_occupation" required></td>
          </tr>
          <tr>
            <td>Father Mobileno</td>
            <td><input type="text" name="F_mobno" required></td>
          
            <td>Mother Mobileno</td>
            <td><input type="text" name="M_mobno" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="Email" required></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><input type="text" name="Country" required></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="City" required></td>
          </tr>
          
          <tr>
            <td></td>
            <td><input type="submit" name="add" value="add details"> </td>
          </tr>
          </table>
        </form>
        <?php
      }
      
    ?>
    

    
      

   
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>