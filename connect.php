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

if (isset($_POST['savedata'])) {
  $firstname  =  $_POST['firstname'];
  $ph         =  $_POST['ph'];
  $vid    =  $_POST['vid'];
  $milk_type  =  $_POST['milk_type'];
  $min_litre  =  $_POST['min_litre'];
  $animalID  =  $_POST['animalID'];

}
$sql = "INSERT INTO farmer (fname, ph, f_vid, milk_type, min_litre, animalID)
VALUES ('$firstname','$ph','$vid','$milk_type','$min_litre','$animalID' )";

if ($conn->query($sql) === TRUE) {

  header('Location: farmer.php');
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
