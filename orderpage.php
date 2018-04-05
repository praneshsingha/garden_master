<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Garden Master | Cart</title>
	<link rel="stylesheet" href="backpage.css">
</head>
<body>
	<div id="admin">
<p >GARDEN MASTER Order page</p> 
</div>
<div id="section1">
	<div id="menu">
		<a href='Index.php'><button id='mnubtn' >Home</button></a>
		<a href='StoreIndex.php'><button id='mnubtn' >My Store</button></a>	
		<a href='logout.php'><button id='mnubtn' >Logout</button></a>			
	</div>
	<?php 
	if(isset($_SESSION["username"]))
	{
	
		echo "<table id='orderform'>";
		echo "<form action='orderpage.php' method='POST' >";
		echo "<tr>";	
		echo "<td>NAME</td>";
		echo "<td><input type='text' name='name' required  size='40%'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>PHONE</td>";	
		echo "<td><input type='text' name='phone' required maxlength='10' minlength='10'></td>";
		echo "</tr>";	
		echo "<tr>";
		echo "<td>EMAIL</td>";
		echo "<td><input type='text' name='email' required size='40%'></td>	";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ADDRESS</td>";
		echo "<td><input type='text' name='address' required  style='height: 50px;' size='40%'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='2'><input type='submit' value='Order Now' name='submit'></td>";
		echo "</tr>";
		echo "</form>";
		echo "</table>";				
			$conn = new mysqli("localhost","root","","gardenmaster");
			if($conn->connect_error)
			{
				die("connection failed".$conn->connect_error);
			}
			if (isset($_POST["submit"]))
			{			
				$user = $_SESSION["username"];
				$qry_slt_reg = "SELECT * FROM registration WHERE EMAIL = '$user' ";
				$row1 = mysqli_fetch_array($conn->query($qry_slt_reg));
				$cid = $row1["CID"];
				$cart = "cart";
				$cartname = $cart.$cid;
				$qry_slt_cart = "SELECT * FROM $cartname";
				$res = mysqli_query($conn,$qry_slt_cart);
				$itmnm;
				
				$name = $_POST["name"];
				$phone = $_POST["phone"];
				$email = $_POST["email"];
				$address = $_POST["address"];

				$qry_insrt_order = "INSERT INTO ordertable (CID,NAME,PHONE,EMAIL,ADDRESS) VALUES ('$cid','$name','$phone','$email','address')";
				$last_count = 0;
				if($conn->query($qry_insrt_order))
				{										
					while ($row=mysqli_fetch_array($res))
					{
						$crtid = $row["IID"];
						$iqty = $row['QTY'];
						$qry_slt_stor = "SELECT * FROM STORE WHERE IID = '$crtid'";
						$row2 = mysqli_fetch_array($conn->query($qry_slt_stor));
						$qntity = $row2['IQTY']-$iqty;
						$qry_update_store = "UPDATE STORE SET IQTY = '$qntity'  WHERE IID = '$crtid'";	
						if(!$conn->query($qry_update_store))
						{
							mysql_error();
							die($conn->error);
						}

					}
					echo "<script>window.open('odersuccess.php')</script>";
					echo "<script>window.location.href='index.php'</script>";
				}
			}
	}
	else
	{
		echo "<script>window.location.href='servicedatabase.php'</script>";
	}
	mysqli_close($conn)	;
?>
</div>	
</body>
</html>
<style>
	body
	{
		margin:auto;		
		padding:auto;
		background-image: url("image/backg.jpg");
	}
	#admin
	{	
		margin:auto;
		padding:auto; 
		font-size: 40px;
		text-align: left;
		min-width: auto;
		max-width: auto;
		margin-left: 25px;
		width: 1310px;
		height:110px;
		background-color: #83bb22;	
		background-image: url("image/header.jpg");
		color:white;
		box-shadow: 0px 0px 15px #888888;
	}
	#section1
	{
		margin:auto;
		padding:auto;
		min-height:570px;
		background-color: white;
		width: 1310px;
		height:100%;
		margin-left: 25px;
		background-image: url("image/sec2img.jpg");
		box-shadow: 0px 0px 15px #888888;	
	}
	p{
	display: inline-block;
	margin-top:30px;
}
#cart{
	margin-top: 20px;
	font-size: 20px;
	text-align: center;
}
td{
	border: 0px solid black;
	height: 40px;
}
#orderform{
	margin: 50px 50px;
}
#menu{
	display: inline;

}
#mnubtn{
	padding: 10px 25px;	
	display: inline;
	text-decoration: none;	
	border: none;
	margin-right: 10px;
	background-color:  #0066ff;
	box-shadow: 0px 10px 15px #888888;	
}
#mnubtn:hover{
	cursor: pointer;
	color:white;
	background-color: #0040ff;
	box-shadow: 5px 15px 15px #888888;	
	border:none;
}
a{
	text-decoration: none;
}
</style>