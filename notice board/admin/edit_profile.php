<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Messages</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"noticeboard");
    $query = "select * from teacher_message where To_whom = 'To Admin'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="card">
        <div class="card-body">
          <p class="card-text"><?php echo $row['date'];?></p>
          <h5 class="card-title">Name: <?php echo $row['title'];?></h5>
          <p class="card-text"><?php echo $row['message'];?></p>
          <button style="width: 100px;" type="button" class="btn btn-secondary btn-block" id="replay">Replay</button>
        </div>
      </div>
      <?php
    }
    ?>
  </body>
</html>
