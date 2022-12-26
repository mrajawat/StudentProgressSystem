<?php
session_start();
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"noticeboard");
  $query = "update admins set name='$_POST[name]',email='$_POST[email]',password='$_POST[password]' where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'admin_dashboard.php'
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'admin_dashboard.php'
    </script>";
  }
}
if(isset($_POST['send_notice'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"noticeboard");
  $query = "insert into notice values(null,'$_POST[post_date]','$_POST[to_whom]','$_POST[subject]','$_POST[message]')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script>alert('Notice Created...');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#view_reply_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#create_notice_button").click(function(){
          $("#main_content").load('create_notice.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_all_notice.php');
        });

        $("#Back").click(function(){
          $("#main_content").load('admindashboard.php');
        });
      });
    </script>
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Notice Dashboard</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
         
          <br>

          
          <button type="button" class="btn btn-secondary btn-block" id="create_notice_button">Create a Notice</button>
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
          <button type="button" class="btn btn-primary btn-block" id="view_reply_button">View Messages</button>
          
         
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to Notice-board</h2>
          <p>
          wellcome sir!! <br> now you can add notice.</p>
         
        </div>
      </div>
    </section>
  </body>
</html>
