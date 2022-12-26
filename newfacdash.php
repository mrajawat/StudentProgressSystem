<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.a{
    background:transparent;
    border:none;
}

.sidenav .a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav .a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"sps");

  ?>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <input class="a" type="submit" name="search_teacher" value="search teacher">
  <input class="a" type="submit" name="search_teacher" value="search teacher">
  <input class="a" type="submit" name="search_teacher" value="search teacher">
  <input class="a" type="submit" name="search_teacher" value="search teacher">
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<div class="container">
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

</div>  



</body>
</html> 
