<?php
session_start();
error_reporting(0);
if (isset($_POST['submit'])) 
{
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['eid'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$dob = $_POST['dob'];
	$phoneno = $_POST['phoneno'];
	$pin = $_POST['pin'];
	$address = $_POST['address'];

	$localconnect = new mysqli("localhost", "root", "", "gardenmaster");
	if($localconnect->connect_error)
	{
		die("connection failed". $localconnect->connect_error);		
	}

	if(empty($fname) and empty($lname) and empty($email) and empty($password) and empty($repassword) and empty($dob) and empty($phoneno) and 
		empty($pin) and empty($address))
	{
		echo "Please fillup all the fields";
		die();
	}

	if($password !== $repassword)
	{
		echo "Please check your both password";		
		header("location:signup.html");
		die();
	}

	$sqlqry = " INSERT INTO registration (FIRST, LAST, EMAIL, PASS, DOB, MOB, PIN, ADDRESS) 
				VALUES ('$fname', '$lname', '$email', '$password', '$dob', '$phoneno', '$pin', '$address') ";	
	
	$sqlqry2 =  "SELECT * FROM registration WHERE EMAIL = '$email' AND PASS = '$password'";

	

	$sqlqry4 = "SELECT * FROM registration";
	

	if($localconnect->query($sqlqry)===TRUE)
	{
		$localconnect->query($sqlqry3);

		$row = mysqli_fetch_array($localconnect->query($sqlqry2));

	$temp = $row["CID"];

	// $cid = $temp+1;

	$c_name = "cart";

	$cartname = $c_name.$temp;

	$sqlqry3 = "CREATE TABLE $cartname (CRTID int PRIMARY KEY AUTO_INCREMENT, IID char(20), INAME varchar(100), QTY int DEFAULT '1', IPRICE int)";

		$localconnect->query($sqlqry3);

		if(($row['EMAIL'] == $email) and ($row['PASS'] == $password))
		{
			$first = $row['FIRST'];			
			$_SESSION["username"]=$first;
			header("location:index.php");
		}	
		
	}
	 else
	 {	 	
		echo "failed to upload<br>" . $localconnect->error;
		echo "<script>";
		echo "alert('Dublicate entry');";
		echo "</script>";
		header("location:dublicate.html");
	 }
	$localconnect->close();
}
 ?>