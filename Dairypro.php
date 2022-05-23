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

if (isset($_POST['save_the_form_data'])) {

  $name  =  $_POST['customer_name'];
  $mobile    =  $_POST['customer_mobile'];
  $id1=$_POST['id_1'];
  $id2=$_POST['id_2'];
  $id3=$_POST['id_3'];
  $id4=$_POST['id_4'];
  $id5=$_POST['id_5'];

  $q1 = $_POST['quantity1'];
  $q2 = $_POST['quantity2'];
  $q3 = $_POST['quantity3'];
  $q4 = $_POST['quantity4'];
  $q5 = $_POST['quantity5'];


  $cost = 19.25 * $q1 + 20 * $q2 + 400 * $q3 + 410 *$q4 + 510 * $q5;


}

$sql = "INSERT INTO `Dairy_customers`( `customer_name`, `customer_mobile`, `Total_cost`, `PR1`, `PR2`, `PR3`, `PR4`, `PR5`)
VALUES ('$name','$mobile','$cost','$id1','$id2','$id3','$id4','$id5')";

if ($conn->query($sql) === TRUE) {

  header('Location: Cart.php');
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
