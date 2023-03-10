<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
<style>
@charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

after { clear: both; }

#login {
  margin: 50px auto;
  width: 320px;
  margin-top: 16%;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 260px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 260px;
  height: 50px;
}

#batch{
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 260px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}
</style>
<body>
    <div id="login">
      <form name='form-login' action="" method="POST">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="id" placeholder="Enter ID" required >
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" name="A_Password" placeholder="Password" required>

        <span class="fontawesome-">batch</span>
          <select id="batch" class="form-control" name="Degree">
                <option>BCA</option>
                <option>MCA</option>
                <option>Hotel Management</option>
                <option>B.Tech</option>
                
              </select>
        
        <input type="submit" name="submit" value="Login">


      </form>
      <?php
  session_start();
    if(isset($_POST['submit']))
    {
      $id = $_POST['id'];
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"sps");
      $query = "select * from stud_table where S_ID = '$_POST[id]'";
      
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run))
      {
        if($row['S_ID'] == $_POST['id'])
        {
          if($row['S_PASSWORD'] == $_POST['A_Password'])
          {
            if($row['S_COURSE'] == $_POST['Degree'])
            {
              $_SESSION['S_ID'] = $row['S_ID'];
              $_SESSION['S_EMAIL'] = $row['S_EMAIL'];
              $_SESSION['S_NAME'] = $row['S_NAME'];
              $_SESSION['S_COURSE'] = $row['S_COURSE'];
              header("location: studentdash.php");
            }
            

          }
          else{
            echo "incorrect";

          }
          
          
        }
        else{
          echo "wrong email";
        }

      }

    }


  ?>
</body>