<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap-4.4.1/js/bootstrap.min.js">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  </head> 
  <title>admin dashboard</title>
  <style>
    body
    {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color:#f8f5f1;
    }
    #nav{
      float:left;
      margin-top:2%;
      
    }
    .nav
    {
      
      text-align:center;
      width:150px;
    }
    .jumbotron{
      background-color:#f4f9f9;
      padding:40px;
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
    position:relative;
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

<body>
<section class="jumbotron text-center">
    <div class="container">
      <h2>Student Dashboard</h2>
      <p>
      Email:  <?php echo $_SESSION['S_EMAIL'] ?> /
      ID: <?php echo $_SESSION['S_ID'] ?>/
      Name:   <?php echo $_SESSION['S_NAME'] ?></p>
      <a href="signout.php">Logout</a>
      
    </div>
  </section>

<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr >
        <td><input class="btn btn-primary nav" type="submit" name="details" value="Student Details">
          </td>
      </tr>
      
        
        
       
        <tr>
        <td><input  class="btn btn-primary nav" type="submit" name="marks" value="Marks"></td> 
        </tr>
        
        <tr>
        <td><input class="btn btn-primary nav" type="submit" name="attendence" value="Attendance">  </td>
        </tr>
        
        <tr>
        <td><input class="btn btn-primary nav" type="submit"  name="seenotice" value="Notice"></td> 
      </tr>
    </table>
  </form>
  </center>
</div>
<div class="box">
<div id="container">
  <div id="">
  <?php
  if(isset($_POST['details'])){
    header("location: studentdetails.php");
  }
  ?>

 
        

<?php
      if(isset($_POST['marks'])){
        ?>
        
        <table>
          <tr>
            <td style="color: black;">University :</td>
            <td>CU</td>
          </tr>
          <tr>
            <td style="color: black;"> Institute :</td>
            <td>Chitkara university School of Computer Application</td>
          </tr>
          </table>
          
          <div class="Row">
          <div class="Column">Student id</div>
          <div class="Column">Subject</div>
          <div class="Column">Study Period</div>
          <div class="Column">Test Name</div>
          <div class="Column">Max Marks</div>
          <div class="Column">Marks Scored</div>
          <div class="Column">Percentage</div>
          </div>
              
            
         
        <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,"sps");
         $query = "select * from result where id = '$_SESSION[S_ID]'";
         
         $query_run = mysqli_query($connection,$query,);
         while($row = mysqli_fetch_assoc($query_run)){
           ?>
           
          <div class="container">
            
            <div class="Row2">
                <div class="Column2"><?php echo $row['id']  ?></div>
                <div class="Column2"><?php echo $row['Subject']  ?></div>
                <div class="Column2"><?php echo $row['Study Period']  ?></div>
                <div class="Column2"><?php echo $row['Test Name']  ?></div>
                <div class="Column2"><?php echo $row['Max marks']  ?></div>
                <div class="Column2"><?php echo $row['Marks Scored']  ?></div>
                <div class="Column2"><?php echo $row['Percentage']  ?>%</div>
                </div>
           
          </div>
             
           <?php
         }
        
      }
    ?>
    
    
  
    <?php
      if(isset($_POST['seenotice']))
      {
        ?>
        <center>
        <form action="../notice board/user_dashboard.php" method="post">
          
          <button type="submit" class="btn btn-primary"name="notice">Notice board</button>
        </form>
        </center>
        <?php
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
           
  </div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>