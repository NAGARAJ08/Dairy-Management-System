
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dairy Cart</title>

    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">

    function computeCost() {
         $MILK = document.getElementById("milk").value;
         $CURD = document.getElementById("curd").value;
         $GHEE = document.getElementById("ghee").value;
         $CHEESE = document.getElementById("cheese").value;
         $BUTTER = document.getElementById("BUTTER").value;


      // Compute the cost

        document.getElementById("cost").value =
        totalCost = $MILK * 52.25+ $CURD * 50 + $GHEE * 400 + $CHEESE * 410 + $BUTTER * 510;
      }

    </script>

    <!--<script type="text/javascript" src="compute.js"></script>-->
    <style media="screen">

    .LOGO{
      height: 80px;
      width: auto;
      float: left;
      margin-left: 30px;
    }

    h3{
      text-align: center;
      color: green;
      font-size: 40px;
    }
    .form{

      margin-left: 30px;
      margin-right: 40px;
    }
    img{
      height: 60px;
      width: 120px;
    }
    p.VALUES{
      margin-right: 230px;
      float: right;
    }
    .list{
          float: right;
          margin-right: 40px;
        }
  .list li
  {
    display: inline-block;
    margin-right: 30px;
    margin-top: 30px;
}
.list li a{
  text-decoration: none;
  font-size: 15px;
  color:black;
  font-family: serif;
  font-weight: bold;
}

.list li:hover{
  border-bottom: 4px solid black;
  transition: .3s;
}
.details{
  margin-top: 30px;

}
.modal-title{
  text-align: center;
  color: green;
}
  </style>
  </head>
  <body>
<a href="startpage.php">  <img src="images/NATURE-ONE-DAIRY-CORPORATE-LOGO-01.png"  alt="logo" class="LOGO"></a>
<ul class="list">
  <li> <a href="startpage.php" class="effect"><i class="fas fa-home"></i>  HOME</a> </li>
  <li> <a href="Service.php" class="effect"><i class="fas fa-dolly-flatbed"></i>  SERVICES</a> </li>

</ul>

    <div class="form">
      <form action = "Dairypro.php" method="POST">
        <h3> Dairy Products </h3>
        <p class="details">

          <label for="customer_name">Customer Name
          <input type="text" name="customer_name" value="" placeholder="NAME">
        </label>
        <label for="customer_mobile">
        Customer Mobile
          <input type="text" name="customer_mobile" value="" placeholder="MOBILE" maxlength="10">
        </label>
        <a href="cust_History.php"><button type="button" class="btn btn-danger" style="float:right;"><i class="fas fa-history"></i> Payment History</button></a>

        </p>

    <table class="table">
      <tr class="bg-success">
            <th></th>
            <th> Product Name </th>
            <th> Price </th>
            <th>Product ID</th>
            <th> Quantity </th>
          </tr>

  <!-- Now, the table data entries -->

          <tr>
            <td><img src="images/milk.jpeg" alt="milk"> </td>

            <th> MILK 1 L</th>
            <td><i class="fas fa-rupee-sign"></i> 52.25 </td>
            <td> <label for="id_1"> <input type="Checkbox" name="id_1" value="209&210"/> 209 & 210  </label> </td>
            <td> <input type = "text" name="quantity1" id = "milk" value="0" size ="10" /> </td>


          </tr>
          <tr>
            <td> <img src="images/curd.jpeg" alt="curd"> </td>
            <th> curd 1 L</th>
            <td><i class="fas fa-rupee-sign"></i> 50 </td>
            <td> <label for="id_2"> <input type="Checkbox" value="205" name="id_2"/>   205</label> </td>
            <td> <input type = "text"  id = "curd" name="quantity2" value="0"
                  size = "10" /> </td>
          </tr>
          <tr>
            <td> <img src="images/ghee.jpeg" alt="ghee"> </td>
            <th> GHEE 1 L </th>
            <td><i class="fas fa-rupee-sign"></i> 400 </td>
            <td> <label for="id_3"> <input type="Checkbox" name="id_3"  value="206"/>   206</label> </td>
            <td> <input type = "text"  id = "ghee" name="quantity3" value="0"
                  size = "10" /></td>
          </tr>
          <tr>
            <td> <img src="images/healthiest-cheese.jpg" alt="chesse"> </td>
            <th> CHEESE 1KG </th>
            <td><i class="fas fa-rupee-sign"></i> 410 </td>
            <td> <label for="id_4"> <input type="Checkbox" name="id_4"  value="207"/>   207</label> </td>
            <td> <input type = "text"  id = "cheese" name="quantity4" value="0"
                  size = "10" /></td>
          </tr>
          <tr>
            <td> <img src="images/butter1.jpg" alt="chesse"> </td>
            <th> BUTTER 1KG </th>
            <td><i class="fas fa-rupee-sign"></i> 510 </td>
            <td> <label for="id_5"> <input type="Checkbox" name="id_5"  value="208"/>   208</label> </td>
            <td> <input type = "text"  id = "BUTTER" name="quantity5" value="0"
                  size = "10" /></td>
          </tr>

          <tr class="bg-success">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>

  <!-- Button for precomputation of the total cost -->

        <p class="VALUES">

          <input type = "button" name="Total_cost"  value = "Total Cost" onclick = "computeCost();" class="btn btn-success" required/> <i class="fas fa-rupee-sign"></i>
          <input type = "text"  size = "15"  id = "cost" onfocus = "this.blur();" />
        </p>

  <!-- The submit and reset buttons -->

        <p class="submit">
          <input type = "submit" name="save_the_form_data"  value = "Submit Order"  class="btn btn-success"/>
          <input type = "reset"  value = "Clear Order Form" class="btn btn-danger"/>
        </p>
      </form>

  </div>

<!-- ###########################################################################################################################################################  -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
