<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"sps");
 if(isset($_POST['subject'],$_POST['id'],$_POST['studyperiod'],$_POST['testname'],$_POST['maxmarks'],$_POST['scored']))
    {
        $sub = $_POST['subject'];
        $id=$_POST['id'];
        
        $studyperiod=$_POST['studyperiod'];
        $testname = $_POST['testname'];
        $p1=(int)$_POST['maxmarks'];
        $p2=(int)$_POST['scored'];
        if($p2<$p1)
        {
        $percentage=$p2/$p1;
        $percentage = $percentage*100;

        }
        else
        header("location:addresult.php");
        
        
 $query = "insert into result values('$sub','$id','$studyperiod','$testname','$p1','$p2','$percentage')";
 
  $query_run = mysqli_query($connection,$query); 
    }
?>

<script>
 alert("Successfully added");
  window.location.href = "result.php";
</script>