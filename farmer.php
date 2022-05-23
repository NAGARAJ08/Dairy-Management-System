<?php
include 'snippets/head_footer.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/farmer.css">

    <title>farmer</title>
    <style media="screen">
      .main-container{
        margin-top: 80px;
      }
    </style>
</head>
  <body>
    </ul>
      <h2 class="h2">Customer Details</h2>
    </div>

    <div class="main-container">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fas fa-user-plus"></i> New farmer </button>
    <div id="id01" class="modal">
      <form class="modal-content animate" action="connect.php" method="POST">
      <h3>  <b> <u> Add new farmer</u></b> </h3>
        <div class="container">
                <label for="name">First Name <sup>*</sup> </label>
                <input type="text" name="firstname" value="" placeholder="enter name of farmer" required/>
                <br>
                <label for="ph">Phone number<sup>*</sup> </label>
                <input type="text" name="ph" value="" placeholder="Phone Number" maxlength="10" required/>
                <br>
                <label for="vid">village id<sup>*</sup> </label>
                <input type="text" name="vid" value="" placeholder="Village" required/>
                <br>
                <label for="milk_type">Milk Type<sup>*</sup> </label>
                <input type="text" name="milk_type" value="" placeholder="cow or Buffalo" required/>
                <br>
                <label for="min_litre">Minimum Litre<sup>*</sup> </label>
                <input type="number" name="min_litre" value="" placeholder="/day" maxlength="2" required/>
                <br>
                <label for="animalID">Animal Health ID<sup>*</sup> </label>
                <input type="text" name="animalID" value="" placeholder="Issued by Health Ministry" maxlength="5" required/>
                <br>
                <input type="submit" name="savedata" class="submit-btn-add" value="Submit">
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        </div>
      </form>
    </div>
<!--################################################################################################################################################-->
<!--Edit Modal-->

<!--################################################################################################################################################-->
<!--Delete Modal!-->

<!--################################################################################################################################################-->
  <!--Fetch Details &  display-->
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
            $sql = "SELECT * FROM farmer ";
            $query_run = mysqli_query($conn, $sql);
      ?>

        <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col"><i class="fas fa-id-badge"></i>  ID</th>
          <th scope="col"><i class="fas fa-user-alt"></i> Firstname</th>

          <th scope="col"><i class="fas fa-phone"></i> Phone</th>
          <th scope="col"><i class="fas fa-address-book"></i> village id</th>
          <th scope="col"> <i class="fas fa-caret-square-down"></i> More</th>


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
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['fname']; ?> </td>
            <td> <?php echo $row['ph']; ?> </td>
            <td> <?php echo $row['f_vid']; ?> </td>
            <td>
              <div class="btn-group">
                <a  class="btn btn-secondary" href="edit.php?id=<?php echo $row['id']; ?>" ><i class="fas fa-edit"></i>  Edit</a>
                <a class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i>  Delete</a>
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
    <hr>
    <hr>


    <div class="footer">
      <p>&copy DIARY.com <sub>All Rigths Reserved</sub> </p>
    </div>
    <script src="css/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>

    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

function edit()
{
  var modal1 = document.getElementById('id02');
  modal1.style.display='block';

}
</script>



  </body>
</html>
