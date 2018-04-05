<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Garden Master | Service</title>
</head>
<body>
	<div id="admin">
<p ><a href="index.php">GARDEN MASTER SERVICE</a></p> 
</div>
<div id="section1">
<?php 
if(isset($_SESSION["username"]))
{
 ?>
<table id="servicetable">
	<form action="servicedatabase.php" method="POST">
	<tr>
		<td>NAME</td>
		<td><input type="text" size="40%" name="name" id="name" required="TRUE"></td>
	</tr>	
	<tr>
		<td>PH.NO</td>
		<td><input type="text" size="40%" name="phone" id="phone" required="TRUE" minlength="10" maxlength="10"></td>
	</tr>
	<tr>
		<td>SERVICE</td>
		<td>
			<!-- <input type="text" size="40%"  name="servic" id="address"> -->
			<select name="servic" required="TRUE">
			  <option value="" size = "40%"></option>
			  <?php
			  	 $conn = new mysqli("localhost","root","","gardenmaster");
			  	 $qry_slt_slist = "SELECT * FROM SLIST";
			  	 $result = mysqli_query($conn,$qry_slt_slist);
			  	 while($row3 = mysqli_fetch_array($result))
			  	 {
			  		echo "<option value='".$row3['SNAME']."' >'".$row3["SNAME"]."'</option>";
			  	 }
			   ?>
			  
			  <!-- <option value="Lawn Moving" >Lawn Moving</option>
			  <option value="Rubbish Removal" >Rubbish Removal</option>
			  <option value="Landscape Design" >Landscape Design</option>
			  <option value="Watering Garden" >Watering Garden</option> -->
			</select>
		</td>
	</tr>
	<tr>
		<td>DATE</td>
		<td><input type="date" size="40%" name="date" id="date" required="TRUE"></td>
	</tr>
	<tr>
		<td>ADDRESS</td>
		<td><input type="textarea" size="30%" style="height: 60px;" name="address" id="address" required="TRUE"></td>
	</tr>	
	<tr>
		<td colspan="2" style="color: red;"><u>Terms and Condition:</u>
			<br>1.You must request before 3 day ago.
			<br>2.If you want to cancel your request please cancel before one day.
			<br>3.You are not allow to cancel the request before 24 hour.
		    <br>4.After register a request you can not change any details on the request.
			<br>5.If you wish to change your request please remove <br>&nbsp;&nbsp;&nbsp;previous and add new request.
			</td>
		
	</tr>	
	<tr>
		<td><input type="submit" name="submit"  id="btn2" value="I Agree "></td>		
		<td><input type="reset"  id="btn2"></td>		
	</tr>
	</form>	

</table>

<?php 
}
else
{
?>
<p style="padding: 250px 200px; font-size: 20px;">Please login, <a href="index.php" style="color:blue;">Home >></a></p>

<?php
}
?>





<?php 	
	if(isset($_POST["submit"]))
	{		
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];		
		$service = $_POST["servic"];
		echo "You have selected ".$service;
		$sdate = $_POST["date"];
		$conn = new mysqli("localhost","root","","gardenmaster");
		if($conn->connect_error)
		{
			die("connection failed".$conn->connect_error);
		}		
		if(isset($_SESSION["username"]))
		{
			$temp = $_SESSION["username"];
			$qryselect = "SELECT * FROM registration WHERE EMAIL = '$temp'";
			$row = mysqli_fetch_array($conn->query($qryselect));
			$uid = $row["CID"];
	$qryinsert = "INSERT INTO service (CID,NAME,PHONE,ADDRESS,SERVICE,SDATE) VALUES ( '$uid','$name','$phone','$address','$service','$sdate')";
		}
		else
		{
			echo mysqli_error();
			echo "Insert error";
		}				
		if($conn->query($qryinsert)===TRUE)
	 	{
	 		// echo "Data successfully inserted";
	 		header("location:successful.php");
	 					 		
	 	}
	 	else
	 	{
	 		echo mysql_error();
	 		die($conn->error);
	 		echo "Upload error";
	 		// header("location:problem.php");
	 	} 	
	}


 	// $qryselect2 = "SELECT * FROM SERVICE WHERE  UID = '$uid'";
 	// $res = mysqli_query($conn,$qryselect2);
 	// while($row2 = mysqli_fetch_array($res))
 	// {

 	// }
 	

 ?>
<table>
	<tr>
		<td><img src="image/service.jpg" alt="" id="imgser"></td>
	</tr>
</table>

<button id="btn1"><a href="index.php" style="cursor: pointer;">Home</a></button><br>
<button id="btn1"><a href="service.php" style="cursor: pointer;" size="30%">Back</a></button><br>
<button id="btn1"><a href="logout.php" style="cursor: pointer;">Logout</a></button><br>
</div>
</body>
</html>
<style>
	body
	{
		margin:auto;		
		background-image: url("image/backg.jpg");
	}
	#admin
	{	
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
#btn1{
	border: none;
	background-color: blue;
	padding:8px 20px;
	color:white;
	cursor: pointer;
	display: block;
	width: 80px;
	height: 40px;
}
#btn1:hover{
	background-color: red;
	cursor: pointer;	
	width: 120px;

	 -webkit-transition: background-color 0.3s;
  -moz-transition: background-color 0.3s;
  -o-transition: background-color 0.3s;
  transition: background-color 0.5s;
}
#btn2{
	border: none;
	background-color: blue;
	padding:8px 20px;
	color:white;
	cursor: pointer;
	display: block;
	width: 80px;
}
td:nth-child(even) {
 /*   background-color: #dddddd;*/
}
#btn2:hover{
	background-color: red;
	cursor: pointer;	
}
#servicetable{
	padding: 60px 100px;		
}
a{
	text-decoration: none;
	color:white;
}
#imgser{
	width: 600px;
	height: 500px;
	position: Absolute;
	top: 112px;
	right:20px;
	box-shadow: 5px 16px 15px black;
}
</style>