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
</head>
<body>
<section class="jumbotron text-center">
    <div class="container">
      <h2>Student Progress System</h2>
      <p>
      Email:  <?php echo $_SESSION['T_EMAIL'] ?>/
      Name<?php echo $_SESSION['T_NAME'] ?></p>
      
      
    </div>
  </section>



<div id="nav">
  <center>
  <form action="" method="post">
    <table>
      <tr>
        <td><input class="btn btn-primary nav" type="submit" name="add_marks" value="Upload Result"></td>
     </tr>
     <tr>
        <td><input class="btn btn-primary nav" type="submit" name="Results" value="See Results"></td>
        </tr>
    </table>
  </form>
  </center>
</div>

<div id="container">
<?php
      if(isset($_POST['add_marks']))
      {

        ?>
        <center><h4>Upload Student Marks</h4>
        <div class="container">
        <form action="addresult.php" method="POST">
          <table>
          
          <tr>
            <td>Subject</td>
            <td>
            <div class="form-group">
              <?php 
              
              $query = "select * from course_info";
              $query_run = mysqli_query($connection,$query);
              
              ?>
              <select class="form-control" name="subject">
              <option value="">Select Subject</option>
              <?php
              while($row = mysqli_fetch_assoc($query_run))
              {               
              ?>
                <option value="<?php echo $row["Course Name"]?>" required><?php echo $row["Course Name"]?></option>
                <?php 
                 }
                ?>
              </select>
            </div>            
            </td>
         <tr>
            <td>Student ID</td>
            <td>
            <input class="form-control" type="text" name="id" >
            </td>
            </tr>
          <tr>
          <td>Studey period</td>
            <td>
            <div class="form-group">
              
              <select class="form-control" name="studyperiod">
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
            <td>Test Name</td>
            <td>
            <input class="form-control" type="text" name="testname" required>
            </td>
             
          <tr>
            <td>Max Marks</td>
            <td><input class="form-control" type="text" name="maxmarks" required></td>
          </tr>
          <tr>
            <td>Scored Marks</td>
            <td><input class="form-control" type="text" name="scored" required></td>
          </tr>
         
          
          
          <tr>
            <td></td>
            <td><input type="submit" class="btn btn-danger"name="add" value="add details"> </td>
          </tr>

          </table>
        </form>
        
        </div>
        </center>
        <?php
      }
      
    ?>

<?php
    if(isset($_POST['Results'])){
    
    ?>
    <h4>Search Result</h4>
      <form action="" method="POST">
        Enter id:
        <input type="text" name="ID">
        <input type="submit" class="btn btn-danger"name="search_by_rollno_search" value="Search"> 
      </form><br>
     
    

    
    
    <center>
    <?php
    } 
    

    if(isset($_POST['search_by_rollno_search'])){
          $query = "select * from result where id = '$_POST[ID]'";
          $query_run = mysqli_query($connection,$query);
          ?>
          <div class="container">
          <div class="Row">
          <div class="Column">Student id</div>
          <div class="Column">Subject</div>
          <div class="Column">Study Period</div>
          <div class="Column">Test Name</div>
          <div class="Column">Max Marks</div>
          <div class="Column">Marks Scored</div>
          <div class="Column">Percentage</div>
          </div>
          </div>
          <?php
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
    
    

    if(isset($_POST['Results'])){
          $query = "select * from result";
          $query_run = mysqli_query($connection,$query);
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
    </center>
     

   
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>