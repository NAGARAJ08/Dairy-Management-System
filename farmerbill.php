<?php
 require_once "connection.php"?>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css">
<script type = "text/javascript"  src ="hide.js"></script>
<style>
.header {
  position: fixed;
  right:0;
  top: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}

/* Header styling   */
.LOGO{
  height: 100px;
  width: auto;
  float: left;
  margin-left: 30px;
}

.list{
  float: right;
  margin-right: 40px;
}


.list li{
  display: inline-block;
  margin-right: 30px;
  margin-top: 30px;
}

.list li a{
  text-decoration: none;
  font-size: 20px;
  color:white;
  font-family: serif;
  font-weight: bold;
}

.list li:hover{
  border-bottom: 4px solid yellow;
  transition: .3s;
}
		.main-box{width:auto;
		margin-top:90px;
		}
	.heading{top:12%;
		color:white;
	font-size:35px;
	text-align:center;
	position:relative;
	letter-spacing:3px;
	line-height:10px
	}
.main-box{

margin-left:50px;
}
.bill label{
padding:10px;
margin-top:10px;
font-size:25px;
font-weight:bold;
font-family:cursive;
line-height:40px;

}
.bill input{background-color:rgba(255,255,255,0);
font-size:20px;
line-height:20px;
padding:10px;
margin-top:25px;
font-weight:bold;}
.design{width:100%;
	text-align:center;
	}
	.bill input:hover{
		background-color:rgba(255,255,255,0.5);
	}
	.submit{
    font-size:15px;
line-height:20px;
padding:10px;
margin-top:25px;
}
#receipt label{
font-size:30px;
font-family:ui-sans-serif;
font-weight:bold
color:black;


}
#receipt input{font-size:20px;
text-align:center;
padding:10px;
margin-top:25px;

font-weight:bold;
width:150px;
border:none;
margin-left:10px;
background-color:rgba(255,255,255,0);}
.bdy{
 background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('images/billbg.png');
 background-repeat:no-repeat;
 background-size:100% 100%;
}
 .submitf{
	color:red;
	font-size:20px;
	margin-left:500px;


}
body{
  color: white;
}

</style>
</head>
<body  class="bdy" >
	<!--Header-->
    <div class="header">
      <a href="startpage.php">  <img src="images/NATURE-ONE-DAIRY-CORPORATE-LOGO-01.png"  alt="logo" class="LOGO"></a>

      <ul class="list">
        <li> <a href="startpage.php" class="effect">HOME</a> </li>
        <li> <a href="Service.php" class="effect">SERVICE</a> </li>
        <li> <a href="aboutus.html" class="effect">ABOUT US</a> </li>
      </ul>
      <h3 class="heading">Bill generation </h3>
    </div>

	<div class="main-box">

		<form class="bill"  action="farmerbill.php"  method="POST">
			 <label for="fid">Farmer ID: </label>
                <input type="text" name="fid" value=""placeholder="enter farmer id"/>

				<label>  From-Date:</label>
				<input type="date" name="from-date"/>

				 <label>To-Date</label>
				<input type="date" name="to-date"/>

               <br>
			   <input type = "submit" style="color:white" class="btn btn-success submitf" name="billinfo" value = "Submit" />
			   <hr>


        </form>
       </div>
	   <?php
require_once "connection.php";
	if(isset($_POST['billinfo']))
	{$fid=$_POST['fid'];
	 $frmdate=date("Y-m-d",strtotime($_POST['from-date']));
	 $todate=date("Y-m-d",strtotime($_POST['to-date']));

	$sql="SELECT f.id,f.fname,f.milk_type, sum(quan) from farmer f join  record r on f.id=r.fid where dt  between '$frmdate' and '$todate'  AND f.id='$fid' GROUP by f.id ,f.fname ,f.milk_type";

	$query_run=mysqli_query($conn,$sql);

	if($query_run)
	{
		foreach($query_run as $row)
		{  ?>
		<div class="design">
			<form id="receipt" action="final.php" method="POST">
				<label for="fid" >Farmer ID :</label>
				<input type="text"   name="fid" value="<?php echo $row['id'];?>"/>
        <br>
				<label for="fname" >Farmer Name:</label>
				<input type="text" name="fname" value="<?php echo $row['fname'];?>"/>
        <br>
				<label for="type" >Milk Type :</label>
				<input type="text" name="type" value="<?php echo $row['milk_type'];?>"/>
        <br>
				<label for="cost" >Cost per lit:</label>
				<input type="text" name="cost" value="<?php if($row['milk_type']=="cow||COW||Cow")
					{
		             $price="select product_cost from Dairy_products where produt_id=210";
					 $sl=mysqli_query($conn,$price);
					 $result=mysqli_fetch_array($sl);
					echo $result['product_cost'];
					}
					else{
						$price="select product_cost from Dairy_products where produt_id=209";
						$sl=mysqli_query($conn,$price);
					 	$result=mysqli_fetch_array($sl);
						echo $result['product_cost'];
						}


					?>"/>
          <br>
				<label for="sum" >Net Quantity:</label>
				<input type="text" name="sum"  value="<?php echo $row['sum(quan)'];?>"/>
        <br>
				<label for="amount" >Net amount:</label>
				<input type="text" name="amount"  value="<?php echo $row['sum(quan)']*$result['product_cost'];?>"/>
				<br>
				<input type="submit"  class="submitf" name="final" value="BILL"/>
			</form>


		<?php
		}
	}
	else{
		echo "record not found";

		}
	}
	?>

</body>
</html>
