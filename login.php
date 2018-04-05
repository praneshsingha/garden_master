<?php
	if(isset($_POST["lsubmit"])){
	session_start(); 
	$username = $_POST['loguname'];
	$password = $_POST['logupass'];


	$localconnect = new mysqli("localhost", "root", "", "gardenmaster");
	if($localconnect->connect_error)
	{
		die("connection failed". $localconnect->connect_error);
	}
	else
	{
		echo "connection successful";
	}


	if(empty($username) || empty($password))
	{
		die("Fields are empty");
	}


	$sqlqry =  "SELECT * FROM registration WHERE EMAIL = '$username' AND PASS = '$password'";
	 
	$user = "admin@gmail.com";
	$pass = "123456";

	if ($localconnect->query($sqlqry))
	{
		$row = mysqli_fetch_array($localconnect->query($sqlqry));
		if($row['EMAIL'] == $user and $row['PASS'] == $pass)
		{
			$first = $row['FIRST'];			
			$_SESSION["logusername"]=$user;
			header("location:admin.php");
		}
		// else
		// {
		// 	echo "Error";
		// }	
		// else if($localconnect->query($sqlqry))	
		// $row = mysqli_fetch_array($localconnect->query($sqlqry));

		else if(($row['EMAIL'] == $username) and ($row['PASS'] == $password))
		{
			$first = $row['EMAIL'];	
			$cart = "cart";
			$num = $row["CID"];
			$cid = $cart.$num;
			$_SESSION["username"]=$first;
			header("location:index.php");
		}
		else
		{
			echo "Wrong username and password";
			header("location:wrongdata.html");
		}
	}
	else
	{
		die($localconnect->error);
	}

	
	
	$localconnect->close();
}
 ?>