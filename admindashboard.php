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
      background-color:#f8f5f1;
    }
    .jumbotron{
      position:;
    }
    #nav
    {
      margin-top: -2%;
      position:fixed;
      
      background-color:;
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
    .left-nav{
      width:150px;
    }
    .dbimage{
      width:30px;
      height:30px;
    }
    .searchteach #txt{
      background:transparent;
      border:none;
      border-bottom:1px solid black;
    }
    .searchteach #btn{

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
      <h2>Student Progress System</h2>
      <p>
      Email:  <?php echo $_SESSION['A_Email'] ?>/
      Name:<?php echo $_SESSION['A_Name'] ?></p>
      <a href="signout.php">Logout</a>
      
    </div>
  </section>

<div id="nav">
  
  <form action="" method="post">
    <table>
      <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="search_teacher" value="search teacher"></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="edit_teacher" value="edit teacher"></td>
      </tr> 
        <td><input class="btn btn-primary left-nav" type="submit" name="add_teacher" value="add teacher"></td>
      <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="show_teachers" value="Faculty members"></td>
        </tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="department" value="Department"></td>
      <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="adddepartment" value="add department"></td> 
        </tr>
      <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="deletedepartment" value="delete department">  </td>
        </tr>
        <tr>
        <td><input class="btn btn-primary left-nav" type="submit" name="course" value="course"></td>
        </tr>
      <tr>

        <td><input class="btn btn-primary left-nav" type="submit" name="addnotice" value="Notice Board">  </td> 
      </tr>
    </table>
  </form>
  
</div>
<div class="box">
<div id="container">
  <div id="">
    <?php
    if(isset($_POST['search_teacher'])){

    ?>
    <center>
    <div class="searchteach">
      <h4>Enter id to search Teacher</h4>
      <form action="" method="POST">
        Enter id
        <input id="txt" type="text" name="ID" required>
        <input class="btn btn-primary" type="submit" name="search_by_rollno_search" value="Search"> 
      </form>
      </div>
    </center>
    <?php
    }
    
    if(isset($_POST['search_by_rollno_search'])){
      $query = "select * from teachers_table where T_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){

         
        ?>
        <center>
        <table>
          <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_ID']; ?>" disabled>

            </td>
          </tr>
          <tr>
            <td><b>Name:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_NAME']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>email:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_EMAIL']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>password:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_Password']; ?>" hidden>
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_DOB']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>gender:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_GENDER']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>contact no.:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_MOB']; ?>" disabled>
            </td>
          </tr>
          <tr>
            <td><b>Address:</b></td>
            <td>
              <input type="text " value="<?php echo $row['T_ADDRESS']; ?>" disabled>
              
            </td>
          </tr>
          <tr>
        
          
          </tr>
        </table>
        <div class="dbimage">
        <?php echo "<img src='images/".$row['image']."' >"?>
        </div>
        </center>
      <?php
      }
    }
    ?>
     <?php
    if(isset($_POST['edit_teacher'])){

    ?>
    <center>
      <h4>Enter id to edit Teacher details</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input class="btn btn-primary" type="submit" name="search_by_rollno_edit" value="Search"> 
      </form>
    </center>

    <?php
    }
    
    if(isset($_POST['search_by_rollno_edit'])){
      $query = "select * from teachers_table where T_ID = '$_POST[ID]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <form action="admineditteacher.php" method="POST">
        <table>
        <tr>
            <td><b>ID:</b></td>
            <td>
              <input type="text " name="T_ID" value="<?php echo $row['T_ID']; ?>" >
            </td>
         
            <td><b>Name:</b></td>
            <td>
              <input type="text " name="T_NAME" value="<?php echo $row['T_NAME']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>email:</b></td>
            <td>
              <input type="text " name="T_EMAIL" value="<?php echo $row['T_EMAIL']; ?>" >
            </td>
         
            <td><b>password:</b></td>
            <td>
              <input type="text " name="T_Password" value="<?php echo $row['T_Password']; ?>" hidden>
            </td>
          </tr>
          <tr>
            <td><b>DOB:</b></td>
            <td>
              <input type="text " name="T_DOB" value="<?php echo $row['T_DOB']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>gender:</b></td>
            <td>
              <input type="text " name="T_GENDER" value="<?php echo $row['T_GENDER']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>contact no.:</b></td>
            <td>
              <input type="text " name="T_MOB" value="<?php echo $row['T_MOB']; ?>" >
            </td>
          
            <td><b>Address:</b></td>
            <td>
              <input type="text " name="T_ADDRESS" value="<?php echo $row['T_ADDRESS']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>pincode:</b></td>
            <td>
              <input type="text " name="T_PINCODE" value="<?php echo $row['T_PINCODE']; ?>" >
            </td>
          
            <td><b>City:</b></td>
            <td>
              <input type="text " name="T_CITY" value="<?php echo $row['T_CITY']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>Country:</b></td>
            <td>
              <input type="text " name="T_COUNTRY" value="<?php echo $row['T_COUNTRY']; ?>" >
            </td>
          </tr>
          <tr>
            <td><b>SPECIALISATION:</b></td>
            <td>
            <div class="form-group">
              <?php 
              
              $query = "select * from course_info";
              $query_run = mysqli_query($connection,$query);
              
              ?>
              <select class="form-control" name="SPECIALISATION">
              <option value="">Select Subject</option>
              <?php
              while($row = mysqli_fetch_assoc($query_run))
              {               
              ?>
                <option value="<?php echo $row["Course Name"]?>"><?php echo $row["Course Name"]?></option>
                <?php 
                 }
                ?>
              </select>
            </div>            
            </td>
         <tr>
          
            
          
          <tr>
            <td></td>
            <td>
              <input class="btn btn-primary" type="submit" name="edit" value="Save">
            </td>
          </tr>
          
        </table>
        </form>

      <?php
      }
    }
    ?>
<?php
      if(isset($_POST['course']))
      {
        ?>
        <center><h4>fill Course details</h4>
        <div class="container">
        <form action="addcourse.php" method="POST">
          <table>
          
          <tr>
            <td>Batch</td>
            <td>
            <div class="form-group">
              
              <select class="form-control" name="batch">
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option></option>
                
              </select>
            </div>            
            </td>
         <tr>
            <td>Select Degree</td>
            <td>
            <div class="form-group">
              
              <select class="form-control" name="Degree">
                <option>BCA</option>
                <option>MCA</option>
                <option>Hotel Management</option>
                <option>B.Tech</option>
                
              </select>
            </div>
            </td>
            </tr>
          <tr>
          <td>Studey period</td>
            <td>
            <div class="form-group">
              
              <select class="form-control" name="semester">
                <option>1 sem</option>
                <option>2 sem</option>
                <option>3 sem</option>
                <option>4 sem</option>
                <option>5 sem</option>
                <option>6 sem</option>
                
              </select>
            </div>
            </td>
          </tr>
          <tr>
            <td>Code</td>
            <td>
            <input type="text" class="form-control" name="code" required>
            </td>
          <tr>
            <td>Course</td>
            <td><input type="text" class="form-control" name="course" required></td>
          </tr>
          
          <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" name="add" value="add details"> </td>
          </tr>
          </table>
        </form>
        </div>
        </center>
        <?php
      }
      
    ?>
    <?php
      if(isset($_POST['add_teacher']))
      {
        ?>
        <center><h4>FILL THE GIVEN DETAILS</h4></center>
        <form action="addteacher.php" method="POST" enctype="multipart/form-data">
          <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="ID" required></td>
         
            <td>Name</td>
            <td><input type="text" name="NAME" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="EMAIL" required></td>
          
            <td>Password</td>
            <td><input type="text" name="Password" required></td>
          </tr>
          <tr>
            <td>DOB</td>
            <td><input type="text" name="DOB" required></td>
          
            <td>Gender</td>
            <td><input type="text" name="GENDER" required></td>
          </tr>
          <tr>
            <td>Contact no.</td>
            <td><input type="text" name="MOB" required></td>
          
            <td>Address</td>
            <td><input type="text" name="ADDRESS" required></td>
          </tr>
          <tr>
            <td>Pin Code</td>
            <td><input type="text" name="PINCODE" required></td>
         
            <td>City</td>
            <td><input type="text" name="CITY" required></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><input type="text" name="COUNTRY" required></td>
          </tr>
          <tr>
            <td>SPECIALISATION</td>
            <td>
            <div class="form-group">
              <?php 
              
              $query = "select * from course_info";
              $query_run = mysqli_query($connection,$query);
              
              ?>
              <select class="form-control" name="SPECIALISATION">
              <option value="">Select Subject</option>
              <?php
              while($row = mysqli_fetch_assoc($query_run))
              {               
              ?>
                <option value="<?php echo $row["Course Name"]?>"><?php echo $row["Course Name"]?></option>
                <?php 
                 }
                ?>
              </select>
            </div>            
            </td>
         <tr>
          <tr>
          <td><b>Image </b></td>
            <td>
            <input type="hidden" name="size" value="1000000">
            <div>
            <input type="file" name="image">
            </div>
            </td>
          
          
          
            <td></td>
            <td><input class="btn btn-primary" type="submit" name="add" value="add teacher"> </td>
          </tr>
          </table>
        </form>
        <?php
      }
      
    ?>
    

    <?php
      if(isset($_POST['show_teachers'])){
        ?>
        <center>
          <h4>Faculty members details</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from teachers_table";
         
         $query_run = mysqli_query($connection,$query,);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
             <div class="container">
             
             <table>
          <tr>
            <td style="color: black;">ID :</td>
            <td><?php echo $row['T_ID']; ?></td>
          </tr>
          <tr>
            <td style="color: black;"> Name :</td>
            <td><?php echo $row['T_NAME']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">email  :</td>
            <td><?php echo $row['T_EMAIL']; ?></td>
          </tr>
          <tr>
            <td style="color: black;">DOB :</td>
            <td><?php echo $row['T_DOB']; ?></td>
          </tr>
          <tr>
            <td> Gender :</td>
            <td><?php echo $row['T_GENDER']; ?></td>
          </tr>
          <tr>
            <td>contat no  :</td>
            <td><?php echo $row['T_MOB']; ?></td>
          </tr>
          <tr>
            <td>Address :</td>
            <td><?php echo $row['T_ADDRESS']; ?></td>
          </tr>
          <tr>
            <td> Pin code :</td>
            <td><?php echo $row['T_PINCODE']; ?></td>
          </tr>
          <tr>
            <td>city no  :</td>
            <td><?php echo $row['T_CITY']; ?></td>
          </tr>
          <tr>
            <td>country  :</td>
            <td><?php echo $row['T_COUNTRY']; ?></td>
         <tr>
         <td></td>
         </tr>
            <td></td>
            <td></td>
            <td><?php echo "<img src='images/".$row['image']."' >"?></td>
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
            <td><input class="btn btn-primary" type="submit" name="add" value="add Department"> </td>
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
            <input class="btn btn-danger" type="submit" name="search_for_delete" value="delete department">
            
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
  <<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>