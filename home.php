<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Student Progress System</title>
  </head>
  <style>
  main{
    background-color:#eeebdd;
  }
  .card-img-top{
   
  }
  .album{
    background-color:#c8c6a7;
  }
  </style>
  <body>
    <main>
    <section class="jumbotron text-center">
    <div class="container">
      <h1>Student Progress System</h1>
      <p>
        <a href="https://www.chitkarauniversity.edu.in/" class="btn btn-primary my-2">View College</a>
        <a href="#" class="btn btn-secondary my-2">View Faculty</a>
      </p>
    </div>
  </section>
  <form action="" method="post">
    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <div class="card">
            <img src="images/admin3.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Admin Login</h5>
              <p class="card-text">
                
              </p>
              
              <input class="btn btn-primary" type="submit" name="admin_login" value="login">
            </div>
          </div>
          </div>
        </div>
       
      
        

        
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <div class="card">
            <img
              src="images/teacher2.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Faculty Login</h5>
              <p class="card-text">
                
              </p>
              <input class="btn btn-primary" type="submit" name="faculty_login" value="login">            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <div class="card">
            <img
              src="images/student.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Student Login</h5>
              <p class="card-text">
                  
              </p>
              <input class="btn btn-primary" type="submit" name="student_login" value="login">
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </form>
    </main>
    <?php
  if(isset($_POST['admin_login'])){
    header("Location: admin.php");
  }
  if(isset($_POST['faculty_login'])){
    header("Location: faculty.php");
  }
  if(isset($_POST['student_login'])){
    header("Location: studentlogin/studentlogin.php");
  }

  ?>







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
  </body>
</html>