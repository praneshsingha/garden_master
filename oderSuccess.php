<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Successful</title>
</head>
<body>
	<div id="bill">
		<?php 
		$conn = new mysqli("localhost","root","","gardenmaster");
		if($conn->connect_error)
		{
			die("Connection failed".$conn->connect_error);
		}
		$user = $_SESSION["username"];
		$qry_slt_reg = "SELECT * FROM registration WHERE EMAIL = '$user' ";
		$row1 = mysqli_fetch_array($conn->query($qry_slt_reg));
		$cid = $row1["CID"];
		$cart = "cart";
		$cartname = $cart.$cid;	
		$res = mysqli_query($conn,"SELECT * FROM $cartname");		
		echo "<table width='100%' id='carttbl'>";		
		echo "<p id='billcaption'>Garden Master Bill</p>";
		echo "<tr>";		
		echo "<td> Name</td>";
		echo "<td> Quentity</td>";
		echo "<td> Price</td>";		
		echo "</tr>";		
		$sum = 0;
			while ($row = mysqli_fetch_array($res))
			{
				echo "<tr>";
				echo "<td>'".$row["INAME"]."'></td>";
				echo "<td>'".$row["QTY"]."</td>";
				echo "<td>".$row["IPRICE"]."</td>";							
				echo "</tr>";			
			}			
			echo "</table>";				
			mysqli_free_result($res);
			$res = mysqli_query($conn,"SELECT * FROM $cartname");
			while($row = mysqli_fetch_array($res))
			{				
				$s = $row["IPRICE"];
				$sum=$sum+$s;
			}
			echo "Total Amount is : ".$sum;
		 ?>		 
	</div>
	<br>
</body>
</html>
<style>
body{
	padding: auto;
	margin: auto;
}
	#bill{				
		margin-top: 100px;
		margin-left: 400px;
		margin-right: 400px;
		background-color:white;		
		max-height: auto;
		max-width: auto;
	}
	#billtbl{
		margin-top: 30px;

		background-color: green;
	}
	td{
		height:60px;
	}
	table,td{
		border:1px dashed black;		
		padding: 0px;
		font-size: 20px;		
	}
	td{
		padding: 5px;
	}
#billcaption{
	text-align: center;

}
</style>