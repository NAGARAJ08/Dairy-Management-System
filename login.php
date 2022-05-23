<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['data'])) {
  $loginname  =  $_POST['uname'];
$loginpassword    =  $_POST['psw'];
}

    
    $query=mysqli_query($conn,"select * from employee where eid='".$loginname."'AND phno='".$loginpassword."' limit 1");
	$rows=mysqli_num_rows($query);
    
    if($rows == 1){
        echo " You Have Entered correct Password";
	   header("Location:startpage.php");
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
?>