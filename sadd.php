<?php

      require_once 'connection.php';


      if (isset($_POST['savestaffdata'])) {
        $ename  =  $_POST['fname'];
        $phno =  $_POST['phonenumber'];
        $salary  =  $_POST['salary'];
        $designation  =  $_POST['Designation'];
         $address    =  $_POST['staffaddress'];
      }
      $sql = "INSERT INTO employee (ename, phno,salary, designation,address)
      VALUES ('$ename','$phno','$salary','$designation','$address' )";

      if ($conn->query($sql) === TRUE) {

        header('Location: staff.php');
        //echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>
