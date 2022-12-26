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
    .jumbotron{
      background-color:#f4f9f9;
      padding:40px;
    }
    #nav
    {
      margin-top: 0%;
      float:left;
    }
    .nav{
      width:140px;
      padding-left:20px;
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
    .form-control
    {
      width: 163px;
      height: 34px;
    }
    .form-control:hover{
      background-color: silver;
    }
    .delstudent{
      height: 36px;
    }
    .editstudent{
      height: 36px;
    }
    .btn-danger{
      width:70px;
      height: 34px;
      line-height:50%;
    }
    .students{
      display:black;
      border:1px solid black;
      width:30%;
      margin-top:4%;
      background-color:#a2b29f;
      color:white;
      box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
      padding:20px;
      opacity:0.4;
    }
    .students:hover{
      opacity: 1;
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
      Email:  <?php echo $_SESSION['T_EMAIL'] ?>/
      Name :<?php echo $_SESSION['T_NAME'] ?>/
      Specialisation: <?php echo $_SESSION['SPECIALISATION'] ?></p></p>
      <a href="signout.php">Logout</a>
      
    </div>
  </section>



<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr>
        <td><input class="btn active btn-primary nav" type="submit" name="search_student" value="Search Student"></td>
     </tr>
     <tr>
        <td><input class="btn btn-primary nav" type="submit" name="edit_student" value="Edit Student"></td>
        </tr><tr>
        <td><input class="btn btn-primary nav" type="submit" name="add_student" value="Add Student"></td>
        </tr><tr>
        <td><input class="btn btn-primary nav" type="submit" name="delete_student" value="Delete Students"></td>
        </tr><tr>
        <td><input class="btn btn-primary nav" type="submit" name="show_students" value="Students"></td>
        </tr><tr>
        <td><input class="btn btn-primary nav" type="submit" name="result" value="Result"></td>
        </tr>
        <tr>
        <td><input class="btn btn-primary nav" type="submit" name="attendance" value="Attendance"></td>
      </tr>
        <tr>
        <td><input class="btn btn-primary nav" type="submit" name="notices" value="View notices"></td>

      </tr>
    </table>
  </form>
  </center>
</div>

<div id="container">
  <div id="">
  <?php
      if(isset($_POST['result']))
      {
        header("location: result.php");
      }
        ?>
    <?php
    if(isset($_POST['search_student'])){

    ?>
    <center>
      <h4>ENTER ID TO SEARCH STUDENT</h4>
      <form action="" method="POST">
        
        <input class="form-control" type="text" placeholder="ENTER ID" name="ID">
        <input type="submit" class="btn btn-primary" name="search_by_rollno_search" value="Search"> 
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
      <h5>ENTER ID TO EDIT STUDENT DETAILS</h5>
      <form action="" method="POST">
        <input type="text" class="form-control" placeholder="Enter ID" name="ID">
        <input type="submit" class="btn btn-danger"name="search_by_rollno_edit" value="Search"> 
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
              <input type="text " name="S_COURSE" value="<?php echo $row['S_COURSE']; ?>" >
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
        header("location: addstudentdetail.php");
      }
        ?>
        
    <?php
      if(isset($_POST['delete_student']))
    
      {
        ?>
        <center>
          <h4>Enter id to delete student</h4>
          <form action="deletestudent.php" method="POST">
             <input class="form-control" type="text" placeholder="Enter ID" name="id">
            <input type="submit"  class="btn btn-danger" name="search_for_delete"  value="delete ">
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
           
             <div class="container students">
             


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
            <td><?php echo $row['S_COURSE']; ?></td>
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


<?php
      if(isset($_POST['attendance'])){
        ?>
        <center>
          <h4>upload Attendance</h4>
          
        </center>
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from teachers_table where SPECIALISATION='".$_SESSION['SPECIALISATION']."'";
         $query_run = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           <form action="addattendance.php" method="POST">
           <div class="container attendance">
            <div class="row">
              
              <div class="col-sm">
              <?php 
              
              $query = "select * from stud_table";
              $query_run = mysqli_query($connection,$query);
              
              ?>
              <select class="form-control" name="sid">
              <option value="">Select Student ID</option>
              <?php
              while($row = mysqli_fetch_assoc($query_run))
              {               
              ?>
                <option value="<?php echo $row["S_ID"]?>"><?php echo $row["S_ID"]?></option>
                <?php 
                 }
                ?>
              </select>
              
              </div>
              <div class="col-sm">
              
            <select name="Study_period" id="Study_period">
              <option value="1sem">1sem</option>
              <option value="2sem">2sem</option>
              <option value="3sem">3sem</option>
              <option value="4sem">4sem</option>
              <option value="5sem">5sem</option>
              <option value="6sem">6sem</option>
            </select><br>
            <label for="Study Period">Study Period</label>
              </div>
              
              <div class="col-sm">
              <input type="date" name="date"><br> date: 
              </div>
              <div class="col-sm">
               
               <div class="container AB">
               <div>Status</div>
               <div class="a">
               P <input type="radio" name="p" value="p" id="a">
               </div>
               <div class="b">
               A <input type="radio" name="p" value="A" id="a">
               </div>
               </div>
               
              </div>
              
            </div>
            
          </div>
          <div class="col-sm">
            <input class="btn btn-danger" type="submit" name="submit" value="upload">
            </div>
         <hr>
             </div>

            
           </form>
           <?php
         }
        
      }
    ?>


    
     <?php
      if(isset($_POST['notices']))
      {
        ?>
        <center>
        <form action="./facultylogin/user_dashboard.php" method="post">
          
          <button type="submit" class="btn btn-primary"name="notice">  notice board</button>
        </form>
        </center>
        <?php
      }
      
    ?>    
    

   
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
<style>
#attend{
  width:180px
}


</style>
</html>