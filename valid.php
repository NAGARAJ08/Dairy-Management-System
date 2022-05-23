<?php 
session_start();
require_once "connection.php";
if(isset($_POST['senddata']))
{    $date=date("Y-m-d",strtotime($_POST['to-date']));
     $fid=$_POST['fid'];
     $quan=$_POST['quan'];
     $query="INSERT into record values('$date','$fid','$quan')";
     $query_run=mysqli_query($conn,$query);
     $n=mysqli_affected_rows($conn);
     if($n==1)
     {   
         $_SESSION['status']="record updated sucessfully";
         header("Location:data.php");
     }
     else
     {
        $_SESSION['status']="record not  updated sucessfully";
         header("Location:data.php"); 
     }
     
}?>



































