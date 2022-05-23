<?php

require_once 'connection.php';  //connecting to database


//###########################
//This deletion is for staff id
if (isset($_GET['eid'])) {
    $id = $_GET['eid']; // get id through query string
}
$del = "DELETE FROM `employee` WHERE eid='$id'"; // delete query

if ($conn->query($del) === TRUE) {

  header('Location: staff.php');
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
