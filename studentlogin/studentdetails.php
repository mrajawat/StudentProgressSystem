<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap-4.4.1/js/bootstrap.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  
  <title>admin dashboard</title>
  <style>
    body
    {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    
    #nav
    {
      margin-top: 0%;
      float:left;
    }
    .nav{
      width:140px;
      text-align:center;
      
    }
    .jumbotron{
      background-color:#f4f9f9;
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
   
    .box
    {
      width: 100%;
      height: 100vh;
      
      
    }
    #td
    {
      border: 1px solid black;
      padding-left: 12px;
      text-align: left;
      width: 150px;
    }
    #id
    {
      border: 1px solid black;
      padding-left: 20px;
      color: black;
    }
    #department td
    {
      color: black;
    }
    .addept{
      float: right;
    }
    .fstid{
      height: 22px;
      border: 1px solid black;
      border-radius: 4px;
      background-color: #e8eae6;
    }
    
    .Row {
    display: table;
    width: 100%; /*Optional*/
    height: 40px;
    table-layout: fixed; /*Optional*/
    border-spacing: 5px; /*Optional*/
    text-align: center;
}
.Column {
    display: table-cell;
    background-color: #cfdac8; /*Optional*/
   
}
.Row2 {
    display: table;
    width: 100%; /*Optional*/
    height: 40px;
    table-layout: fixed; /*Optional*/
    border-spacing: 5px; /*Optional*/
    text-align: center;
}
.Column2 {
    display: table-cell;
    background-color: #cdd0cb; /*Optional*/
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
      Email:  <?php echo $_SESSION['S_EMAIL'] ?> /
      Name:   <?php echo $_SESSION['S_NAME'] ?>/
      BATCH: <?php echo $_SESSION['S_COURSE']  ?></p>
      <a href="studentdash.php"> back</a>
      
    </div>
  </section>

<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr >
        <td><input class="btn btn-primary nav" type="submit" name="personal_info" value="Personal info">
          </td>
      </tr>
      <tr>
        <td><input class="btn btn-primary nav" type="submit" name="Parents_info" value="Parents info"></td>
        </tr>
        <tr>
        <td><input class="btn btn-primary nav" type="submit" name="edit_details" value="Edit Details"></td>
        </tr>
        <tr>
        <td><input class="btn btn-primary nav" type="submit" name="course_info" value="Course info"></td>
        </tr><tr>
        <td><input class="btn btn-primary nav" type="submit" name="attendence" value="Attendence"></td>
        </tr><tr>
        

        
      </tr>
    </table>
  </form>
  </center>
</div>
<div class="box">
<div id="container">
  <div id="">

  <?php
      if(isset($_POST['personal_info'])){
        ?>
        <center>
          <h4>personal details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from stud_table where S_EMAIL = '$_SESSION[S_EMAIL]'";
         
         $query_run = mysqli_query($connection,$query,);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">
             <hr>
             
             <table>
          <tr>
            <td style="color: black;">ID :</td>
            <td><?php echo $row['S_ID']; ?></td>
          
            <td style="color: black;"> Name :</td>
            <td><?php echo $row['S_NAME']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Batch  :</td>
            <td><?php echo $row['S_BATCH']; ?></td>
          
            <td style="color: black;">CONTACT NO. :</td>
            <td><?php echo $row['S_MOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;"> E-MAIL :</td>
            <td><?php echo $row['S_EMAIL']; ?></td>
         
            <td style="color: black;">DOB  :</td>
            <td><?php echo $row['S_DOB']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">GENDER :</td>
            <td><?php echo $row['S_GENDER']; ?></td>
         
            <td style="color: black;"> ADDRESS :</td>
            <td><?php echo $row['S_ADDRESS']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">COURSE :</td>
            <td><?php echo $row['S_COURSE']; ?></td>
          
            <td style="color: black;">CITY  :</td>
            <td><?php echo $row['S_CITY']; ?></td>
         </tr>
         <tr>
            <td style="color: black;">PINCODE  :</td>
            <td><?php echo $row['S_PINCODE']; ?></td>
         
            <td style="color: black;">COUNTRY  :</td>
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
 <?php
    
    
    if(isset($_POST['edit_details'])){
      $query = "select * from stud_table where S_EMAIL = '$_SESSION[S_EMAIL]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <form action="studentedit.php" method="POST">
        <table>
        <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " name="S_ID" value="<?php echo $row['S_ID']; ?>" hidden >
            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " name="S_NAME" value="<?php echo $row['S_NAME']; ?>" hidden >
            </td>
          </tr>
          <tr>
            <td><b>Batch:</b></td>
            <td>
              <input type="text " name="S_BATCH" value="<?php echo $row['S_BATCH']; ?>" hidden >
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
              <input type="text " name="S_DOB" value="<?php echo $row['S_DOB']; ?>" hidden>
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
              <input type="text " name="S_COURSE" value="<?php echo $row['S_COURSE']; ?>" hidden >
            </td>
          </tr>
          <tr>
            <td><b>Password:</b></td>
            <td>
              <input type="text " name="S_PASSWORD" value="<?php echo $row['S_PASSWORD']; ?>" hidden >
            </td>
          </tr>
          <tr>
            <td><b>City:</b></td>
            <td>
              <input type="text " name="S_CITY" value="<?php echo $row['S_CITY']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Pincode:</b></td>
            <td>
              <input type="text " name="S_PINCODE" value="<?php echo $row['S_PINCODE']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Country:</b></td>
            <td>
              <input type="text " name="S_COUNTRY" value="<?php echo $row['S_COUNTRY']; ?>" >
            </td>
          </tr>
          
          <tr>
            <td></td>
            <td>
              <input type="submit" Class="btn btn-primary"name="edit" value="Save">
            </td>
          </tr>
          
        </table>
        </form>

      <?php
      }
    }
    ?>

<?php
      if(isset($_POST['Parents_info'])){
        ?>
        <center>
          <h4>Parents details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from parents_table where S_name = '$_SESSION[S_NAME]'";
         
         $query_run = mysqli_query($connection,$query,);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">
             <hr>
             
             <table>
          <tr>
            <td style="color: black;">Fathes Name :</td>
            <td><?php echo $row['F_name']; ?></td>
          
            <td style="color: black;">Mothers Name :</td>
            <td><?php echo $row['M_name']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Father occupation  :</td>
            <td><?php echo $row['F_occupation']; ?></td>
          
            <td style="color: black;">Mother occupation :</td>
            <td><?php echo $row['M_occupation']; ?></td>
          </tr>
          <tr>
            <td style="color: black;"> Father mobileno :</td>
            <td><?php echo $row['F_mobno']; ?></td>
         
            <td style="color: black;">Mother mobileno  :</td>
            <td><?php echo $row['M_mobno']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Email :</td>
            <td><?php echo $row['F_email']; ?></td>
         
            <td style="color: black;"> Country :</td>
            <td><?php echo $row['Country']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">City :</td>
            <td><?php echo $row['City']; ?></td>
          
         </tr>
         
          </table>
          


             
          <br>
          <br>
             </div>
           
           <?php
         }
        
      }
    ?>

   
     

    <?php
      if(isset($_POST['course_info'])){
        ?>
        <center>
          <h4>Course details</h4>
          
        </center>
        <table >
          <tr>
            <td style="color: black;">University :</td>
            <td>CU</td>
          </tr>
          <tr>
            <td style="color: black;"> Institute :</td>
            <td>Chitkara university School of Computer Application</td>
          </tr>
          </table>
          <div class="container">
          <div class="Row">
          <div class="Column">STUDY PERIOD</div>
          <div class="Column">COURSE CODE</div>
          <div class="Column">COURSE NAME</div>
          </div>
          </div>
              
            
         
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from course_info where Degree = '$_SESSION[S_COURSE]'";
         
         $query_run = mysqli_query($connection,$query,);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
          <div class="container">
            <div class="Row2">
            <div class="Column2"><?php echo $row['Study Period']  ?></div>
            <div class="Column2"><?php echo $row['Code']  ?></div>
            <div class="Column2"><?php echo $row['Course Name']  ?></div>
            </div>
          </div>
             
           <?php
         }
        
      }
    ?>
    <?php
     if(isset($_POST['attendence'])){
      $query = "select * from attendance where Stud_id = '$_SESSION[S_ID]'";
      $query_run = mysqli_query($connection,$query);
      ?>
      <div class="container">
      <div class="Row">
          <div class="Column">Subject</div>
          <div class="Column">Study Period</div>
          <div class="Column">Teacher name</div>
          <div class="Column">Date</div>
          <div class="Column">Status</div>
          </div>
          </div>
      <?php
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="container">
            <div class="Row2">
            <div class="Column2"><?php echo $row['Subject']  ?></div>
            <div class="Column2"><?php echo $row['Study_period']  ?></div>
            <div class="Column2"><?php echo $row['Teacher_name']  ?></div>
            <div class="Column2"><?php echo $row['Date']  ?></div>
            <div class="Column2"><?php echo $row['status']  ?></div>
            </div>
          </div>
        <?php
      }
    }
    ?>    
            
            
          
    <?php
      if(isset($_POST['department'])){
        ?>
        <center>
          <h4>Department details</h4><br>
          
          
           
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from department";
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">


          <table>
          <tr>
            <td style="color: black;">Department no :</td>
            <td><?php echo $row['D_No.']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Department Name :</td>
            <td><?php echo $row['D_Name']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">Department Head  :</td>
            <td><?php echo $row['D_Head']; ?></td>
          </tr>
          </table>
          <br>
          <br>
          
             </div>
             <hr>
             
      <?php
      }
    }
    ?>
     <?php
      if(isset($_POST['adddepartment']))
      {
        ?>
        <center><h4>fill the given details</h4></center>
        <form action="adddepartment.php" method="POST">
          <table>
          <tr>
            <td>Department no</td>
            <td><input type="text" name="D_no" required></td>
          </tr>
          <tr>
            <td>Department Name</td>
            <td><input type="text" name="D_name" required></td>
          </tr>
          <tr>
            <td>Department Head</td>
            <td><input type="text" name="D_head" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="add" value="add Department"> </td>
          </tr>
          </table>
        </form>
        <?php
      }
      
      
    ?>  
    <?php
      if(isset($_POST['deletedepartment']))
    
      {
        ?>
        <center>
          <h4>Enter departmentno. to delete department</h4>
          <form action="deletedepartment.php" method="POST">
            Enter Department name. <input type="text" name="name">
            <input type="submit" name="search_for_delete" value="delete department">
            
          </form>
        </center>
        <?php
      }
    ?>

    <?php
      if(isset($_POST['addnotice']))
      {
        ?>
        <center>
        <form action="./notice board/admin/admin_dashboard.php" method="post">
          
          <button type="submit" class="btn btn-primary"name="notice"> add Notice</button>
        </form>
        </center>
        <?php
      }
      
    ?>    
           
  </div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>