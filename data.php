
<?php
include 'snippets/head_footer.php';
require_once 'connection.php';
session_start();?>  //connecting to database


<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css"
	<title>data enry</title>
	<style>

		.main-box{width:auto;
		margin-top:130px;
		}
	.heading{top:12%;
		color:black;
	font-size:35px;
	text-align:center;
	position:relative;
	letter-spacing:3px;
	line-height:10px
	}
	.entry{
		font-size:23px;

		margin:30px;
		line-height:20px;
	}
	.entry input
	{
	padding:7px;
}

		.container {
  width: 500px;
  clear: both;

}

.container input {
  width: 100%;
  clear: both;
}
.submit-btn-add{
	margin-left: 150px;
}
	</style>
</head>
<body>
<div class="main-box container">
	<h3 class="heading">Daily Data Entry sheet </h3>
	<?php
	if(isset($_SESSION['status']))
	{
		echo"<h4>".$_SESSION['status']."</h4>";
		unset($_SESSION['status']);
	}
	?>
		<form class="entry"  action="valid.php"  method="POST">
			 Farmer id: <input type="text" name="fid" value="" placeholder="enter farmer id"/>
				<br>
			Quantity:         <input type="text" name="quan" value="" placeholder="Enter quantity"/>
                <br>
				 Date: <input type="date" name="to-date"/>
				<br>
				<br>
				<input type="submit" name="senddata" class="btn btn-add" value="Submit">
        </form>
       </div>
</body>
</html>
