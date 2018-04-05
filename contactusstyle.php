<?php 
   session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact-Us</title>
	<link rel="stylesheet" type="text/css" href="contactusstyle.css">
</head>
<body>
	<div class="header">
		<img style="height:305px;width: 100%;-webkit-filter: blur(5px);
  filter: blur(0px);" src="image/pexels-photo-678751.jpeg">
			<h2 style="margin-top: -250px;margin-left: 76px;font-size: 50px;font-family: 'Oswald', sans-serif;color:white;position:relative;">Contact-Us</h2>
			<li><a style="top:-121px;text-decoration: none; margin-left:95%;font-size:20px;font-family: 'Oswald', sans-serif;color:white; font-weight:bolder; background:tomato;position:relative;" href="index.php">Home</a></li>
			
	</div>
	
	<div class="form">
		<h3 style="margin-left:65px;margin-bottom: 35px; font-size:22px;font-family: 'Indie Flower', cursive;color:black;"><u>Contact form</u></h3>
		<form action="" method="POST">
		<table align="centre" style="margin-left: 12px;">
			<tr>
				<td><label><b>Your Name</b></label>
		    <input id="name" style="margin-left: 10px;" type="text" placeholder="Name" name="name" required></td>
			</tr>
			<tr>
				<td><label><b>Country</b></label>
		    <input id="country" style="margin-left:27px;" type="text" placeholder="Country" name="country" required></td>
			</tr>
			<tr>
				<td><label><b>Email</b></label>
		    <input id="email" style="margin-left: 42px;" type="text" placeholder="Enter Email" name="email" required></td>
			</tr>
			<tr>
				<td><label><b>Phone-No</b></label>
		    <input id="phone" style="margin-left: 12px;" type="number" placeholder="Phone-No" maxlength="10" minlength="10" name="phone" required></td>
			</tr>
			
			<tr>
				<td><label><b>Message</b></label>
		     
			</tr>
			<TR>
				<td><textarea id="textarea" rows="4" cols="40" name="area">
		    	
		    </textarea></td>
			</TR>
		</table>

		<div class="clearfix">
        <input type="submit" class="submit" value="submit" name="submit"></input>
       </form>
      </div>
		
	</div>
	<div class="Contacts">
		<table>
			<tr>
				<td><h3 style="font-size:20px;font-family: 'Oswald', sans-serif;color:#564d0e;">Contact </h3></td>
			</tr>
			<tr>
				<td><label>Telephone:+917204277851</label></td>
			</tr>
			<tr>
				<td><label>Email:gardenmaster@gmail.com</label></td>
			</tr>
		</table>
		
	</div>
	
</body>
</html>
<?php 
$conn = new mysqli("localhost","root","","gardenmaster");

if(isset($_POST["submit"]))
{
$name = $_POST["name"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone  = $_POST["phone"];
$message = $_POST["area"];
 
$userid = $_SESSION["username"];
	$sqlqry = "INSERT INTO contactus (username,country,email,phoneno,message) 
				VALUES ('$userid','$country','$email','$phone','$message')";
	if($conn->query($sqlqry))
	{
		echo "<script>alert('Your review has been submitted')</script>";
		echo "<script>window.location.href='index.php'</script>";		
	}
	else
	{
		echo mysql_error();
		die($conn->error);
	}


}



 ?>