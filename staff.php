<?php
include 'snippets/head_footer.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STAFF</title>
    <link rel="stylesheet" href="css/farmer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style media="screen">
      .main-content{
        margin-top: 140px;
      }
      .modal-content{
        width: 50%;
      }
      #buttom{
        margin: 10px 10px;

      }
    </style>
  </head>
  <body>

<div class="main-container">
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;" id="buttom"><i class="fas fa-user-plus"></i> Add STAFF</button>
<!-- Add staff -->
<div id="id03" class="modal">
  <form class="modal-content animate" action="sadd.php" method="POST">
  <h3>  <b> <u> Add STAFF</u></b> </h3>
    <div class="container">
            <label for="fname">First Name <sup>*</sup> </label>
            <input type="text" name="fname" value="" placeholder="first name" required/>
            <br>
            <label for="phonenumber">Phone number<sup>*</sup> </label>
            <input type="text" name="phonenumber" value="" placeholder="Phone Number" maxlength="10" required/>
            <br>
            <label for="staffaddress">Address<sup>*</sup> </label>
            <input type="text" name="staffaddress" value="" placeholder="address" required/>
            <br>
            <label for="salary">Salary<sup>*</sup> </label>
            <input type="text" name="salary" value="" placeholder="salary" required/>
            <br>
            <label for="Designation">Designation<sup>*</sup> </label>
            <input type="text" name="Designation" value="" placeholder="Designation" required/>
            <br>

            <input type="submit" name="savestaffdata" class="submit-btn-add" value="Submit">
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

<!--Fetch Details-->
<div class="card">
    <div class="card-body">
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
          $sql = "SELECT * FROM employee ";
          $query_run = mysqli_query($conn, $sql);
    ?>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
        <th scope="col"><i class="fas fa-user-alt"></i> Name</th>
        <th scope="col"><i class="fas fa-phone"></i> Phone</th>
        <th scope="col"><i class="fas fa-address-book"></i> Address</th>
        <th scope="col"><i class="fas fa-money-bill-wave"></i> Salary</th>
        <th scope="col"><i class="fas fa-briefcase"></i> Designation</th>
        <th scope="col"><i class="fas fa-caret-square-down"></i> More</th>

      </tr>
</thead>
    <?php
      if ($query_run)
      {
          foreach ($query_run as $row)
          {
    ?>
<tbody>
        <tr>
          <td> <?php echo $row['eid']; ?> </td>
          <td><?php echo $row['ename'] ; ?></td>
          <td> <?php echo $row['phno']; ?> </td>
          <td> <?php echo $row['address']; ?> </td>
          <td><i class="fas fa-rupee-sign"></i> <?php echo $row['salary']; ?> </td>
          <td> <?php echo $row['designation']; ?> </td>
          <td>
            <div class="btn-group">
              <a class="btn btn-secondary" href="sedit.php?eid=<?php echo $row['eid']; ?>"><i class="fas fa-edit"></i>  Edit</a>
              <a class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" href="sdelete.php?eid=<?php echo $row['eid']; ?>"> <i class="fas fa-trash-alt"></i>  Delete</a>
            </div>
          </td>


</tr>
</tbody>
      <?php
          }
        }
        else {
          echo "No Record Found";
        }

      ?>
    </table>
    </div>
  </div>
</div>


  <script type="text/javascript">

  // Get the modal
  var modal = document.getElementById('idol3');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  </script>
  </body>
</html>
