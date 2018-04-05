<?php 
// require_once("login.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
<div id="admin">
<p> <a href="index.php">GARDEN MASTER ADMIN</a>	</p>
</div>
<?php
if (isset($_SESSION["logusername"])) 
{

$con = new mysqli("localhost","root","","gardenmaster");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * from registration";
$result=mysqli_query($con,$sql);
?>
<div id="section1">
	<div id="menu">
		<a href='#registration'><button id='mnubtn' >REGISTRATION</button></a>
		<a href='#service'><button id='mnubtn' >SERVICE</button></a>	
		<a href='#store'><button id='mnubtn' >STORE</button></a>			
	</div>	

		<?php 
		// Numeric array
		echo "<table width='100%' >";
		echo "<br>";
		echo "<h1 style='font-size:20px; text-align:center;'>REGISTRATION TABLE</h1>";
		echo "<tr>";
		echo "<th id='tdl'>CID</th>";
		echo "<th id='tdl'>FNAME</th>";
		echo "<th id='tdl'>LNAME</th>";
		echo "<th id='tdl'>EMAIL</th>";
		echo "<th id='tdl'>PASSWORD</th>";
		echo "<th id='tdl'>DOB</th>";
		echo "<th id='tdl'>PHONE</th>";
		echo "<th id='tdl'>PIN</th>";
		echo "<th id='tdl'>ADDRESS</th>";
		echo "<th colspan='2'>ALTER &nbsp;OPTION</th>";
		// echo "<th></th>";
		echo "</tr>";
		while($row=mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td >".$row['CID']."</td>";
		echo "<td >".$row['FIRST']."</td>";
		echo "<td >".$row['LAST']."</td>";
		echo "<td > ".$row['EMAIL']."</td>";
		echo "<td >".$row['PASS']."</td>";
		echo "<td >".$row['DOB']."</td>";
		echo "<td >".$row['MOB']."</td>";
		echo "<td >".$row['PIN']."</td>";
		echo "<td >".$row['ADDRESS']."</td>";
		$id=$row['CID'];
		echo "<td ><a href='admin.php?id=$id' id='link'>EDIT</a></td>";
		echo "<td ><a href='admin.php?idd=$id' id='link2'>DELETE</a></td>";
		echo "</tr>";
		}
		echo "</table>";
		// Associative array

		// Free result set

		mysqli_free_result($result);
		if(isset($_GET["id"]))
		{
			$id=$_GET["id"];

		$sql="SELECT * from registration where CID=$id";
		$result=mysqli_query($con,$sql);

		// Numeric array
		echo "<br>";
		echo "<form action='admin.php' method='post'>";
		echo "<table width='100%'>";
		echo "<tr>";
		echo "<td>CID</td>";
		echo "<td>FNAME</td>";
		echo "<td>LNAME</td>";
		echo "<td>EMAIL</td>";
		echo "<td>PASSWORD</td>";
		echo "<td>DOB</td>";
		echo "<td>PHONE</td>";
		echo "<td>PIN</td>";
		echo "<td>ADDRESS</td>";
		echo "<td></td>";
		echo "</tr>";
		$row=mysqli_fetch_array($result);
		echo "<tr>";
		echo "<td><input type='text' name='id' value='".$row['CID']."' readonly/></td>";
		echo "<h1 style='font-size:20px; text-align:center;'>EDITING TABLE</h1>";
		echo "<td><input type='text' size = '10%' name='name' value='".$row['FIRST']."'/></td>";
		echo "<td><input type='text' size = '10%' name='lname' value='".$row['LAST']."'/></td>";
		echo "<td>".$row['EMAIL']."</td>";
		echo "<td><input type='text' name='pass' size = '15%' value='".$row['PASS']."'/></td>";
		echo "<td><input type='date' name='dob' size = '15%' value='".$row['DOB']."'/></td>";
		echo "<td>".$row['MOB']."</td>";
		echo "<td><input type='text' name='pin' value='".$row['PIN']."'/></td>";
		echo "<td><input type='text' name='address' value='".$row['ADDRESS']."'/></td>";
		echo "<td><input type='submit' value='Update' name='submit'></td>";
		echo "</tr>";
		echo "</table>";
		echo "</form>";
		}
		echo "<br>";
		if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$lname = $_POST["lname"];
			$pass = $_POST["pass"];
			$dob = $_POST["dob"];
			$pin = $_POST["pin"];
			$address = $_POST["address"];
			$id=$_POST["id"];
			$query1 ="update registration set FIRST='".$name."', LAST = '".$lname."' , PASS = '".$pass."', PIN = '".$pin."', ADDRESS = '".$address."' where CID=$id";
			if(!$con->query($query1))
			{
				echo mysql_error();
				header("location:admin.php");
			}
			else
			{
				header("location:admin.php");
			}
		}
		}
		else
		{
			header("location:index.php");
		}



		if(isset($_GET["idd"]))
			{		
				$idd = $_GET['idd'];		
				$qrydel = "DELETE FROM registration WHERE CID = '$idd'";	
				if($con->query($qrydel))
				{
					header("location:admin.php");
				}
				else
				{
					die($localconnect->error);
				}
			}			





				// ---------------service table--------------------




		$qryselect = "SELECT * FROM service ";

		$res = mysqli_query($con,$qryselect);		

		echo "<table>";
		echo "<h1 style='font-size:20px; text-align:center;'>SERVICE TABLE</h1>";
		echo "<tr>";
			echo "<td>TID</td>";
			echo "<td>CID</td>";
			echo "<td>NAME</td>";
			echo "<td>PHONE</td>";
			echo "<td>ADDRESS</td>";
			echo "<td>SERVICE</td>";
			echo "<td>DATE</td>";
			echo "<td>STATUS</td>";
			echo "<td colspan='2'>ALTER</td>";
		echo "</tr>";
		while($row2=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>".$row2['TID']."</td>";
			echo "<td>".$row2['CID']."</td>";
			echo "<td>".$row2['NAME']."</td>";
			echo "<td>".$row2['PHONE']."</td>";
			echo "<td>".$row2['ADDRESS']."</td>";
			echo "<td>".$row2['SERVICE']."</td>";
			echo "<td>".$row2['SDATE']."</td>";
			echo "<td>".$row2['STATUS']."</td>";
			$tid = $row2["TID"];
			echo "<td ><a href='admin.php?tde=$tid' id='link'>EDIT</a></td>";
		echo "<td ><a href='admin.php?tdd=$tid' id='link2'>DELETE</td>";
		echo "</tr>";
		}
		echo "</table>";
		if (isset($_GET["tdd"])) 
		{
			$tdd = $_GET["tdd"];
			$qrydelstor = "DELETE FROM SERVICE WHERE TID = '$tdd'";
			if($con->query($qrydelstor))
			{
				header("location:admin.php");
			}
		}
		if(isset($_GET["tde"]))
		{

			$tde = $_GET["tde"];
			$qrysltservice = "SELECT * FROM SERVICE WHERE TID = '$tde'";
			echo "<table width='100%'>";
			echo "<h1 style='font-size:20px; text-align:center;'>EDIT SERVICE TABLE</h1>";
			echo "<tr>";
			echo "<form action='admin.php' method='POST'>";
				echo "<td>TID</td>";
				echo "<td>CID</td>";
				echo "<td>NAME</td>";
				echo "<td>PHONE</td>";
				echo "<td>ADDRESS</td>";
				echo "<td>SERVICE</td>";
				echo "<td>DATE</td>";
				echo "<td>STATUS</td>";
				echo "<td colspan='2'>ALTER</td>";
			echo "</tr>";			
			$row4 = mysqli_fetch_array($con->query($qrysltservice));
			echo "<tr>";
				echo "<td><input type='text' name='tid' value='".$row4["TID"]."' readonly></td>";
				echo "<td><input type='text' name='cid' value='".$row4["CID"]."' readonly></td>";
				echo "<td><input type='text' name='name' value='".$row4["NAME"]."'></td>";
				echo "<td><input type='text' name='phone' value='".$row4["PHONE"]."'></td>";
				echo "<td><input type='text' name='address' value='".$row4["ADDRESS"]."'></td>";
				echo "<td>				
					<select name='servic' value='".$row4["SERVICE"]."'required='TRUE'>
					  <option value='---'>---</option>
					  <option value='Garden Care' >Garden Care</option>
					  <option value='Lawn Moving' >Lawn Moving</option>
					  <option value='Rubbish Removal' >Rubbish Removal</option>
					  <option value='Landscape Design' >Landscape Design</option>
					  <option value='Watering Garden' >Watering Garden</option>
					</select>
				</td>";
				echo "<td><input type='date' name='sdate' value='".$row4["SDATE"]."'></td>";
				echo "<td><input type='text' name='status' value='".$row4["STATUS"]."'></td>";
				echo "<td colspan='2'><input type='submit' name='ssubmit'></td>";
			echo "</tr>";			
			echo "</form>";
			echo "</table>";
		}
		if (isset($_POST["ssubmit"])) 
		{
			$tid = $_POST["tid"];
			$cid = $_POST["cid"];
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$service = $_POST["servic"];
			$sdate = $_POST["sdate"];
			$status = $_POST["status"];
			$qryupdtsrvic = "UPDATE SERVICE  SET NAME = '$name' , PHONE = '$phone' , ADDRESS = '$address' , SERVICE = '$service' , SDATE = '$sdate' , STATUS = '$status' WHERE TID = '$tid'";
			if($con->query($qryupdtsrvic))
			{
				echo "<script>window.location.href='admin.php'</script>";
			}
			else
			{
				echo mysql_error();
				die($con->error);
				echo "Entry Failed";
			}						

		}
		
			// -------------------------------------store table------------------------------------

		mysqli_free_result($res);
		$qrysltstore = "SELECT * FROM STORE";
		echo "<table>";
		echo "<h1 style='font-size:20px; text-align:center;'>STORE TABLE</h1>";
		echo "<tr>";
			echo "<td>IID</td>";
			echo "<td>INAME</td>";
			echo "<td>IMAGE</td>";
			echo "<td>DESCRIPTION</td>";	
			echo "<td>IQTY</td>";
			echo "<td>ITYPE</td>";
			echo "<td>IPRICE</td>";				
			echo "<td colspan='2'>ALTER</td>";
		echo "</tr>";
		$res = mysqli_query($con,$qrysltstore);
		while ($row3 = mysqli_fetch_array($res)) 
		{
			echo "<tr>";
				echo "<td>".$row3['IID']."</td>";
				echo "<td>".$row3['INAME']."</td>";
				echo "<td><img style='height:100px; width:100px;' src='store_images/".$row3['IMAGE']."' /></td>";
				echo "<td>".$row3['DESCRIPT']."</td>";
				echo "<td>".$row3['IQTY']."</td>";
				echo "<td>".$row3['ITYPE']."</td>";
				echo "<td>".$row3['IPRICE']."</td>";
				$sid = 	$row3['IID'];
				echo "<td ><a href='admin.php?iide=$sid' id='link'>EDIT</a></td>";
				echo "<td ><a href='admin.php?iidd=$sid' id='link2'>DELETE</td>";
			echo "</tr>";
		}

			echo "<tr>";
				echo "<form action='admin.php' method='POST' enctype='multipart/form-data'>";
				echo "<td><input type='text' name='iid' placeholder='IID'></td>";
				echo "<td><input type='text' name='iname' placeholder='INAME'></td>";
				echo "<td><input type='file' name='image'></td>";				
				echo "<td><input type='text' name='description' placeholder='DESCRIPTION'></td>";
				echo "<td><input type='text' name='iqty' placeholder='IQTY'></td>";
				echo "<td><input type='text' name='itype' placeholder='ITYPE'></td>";
				echo "<td><input type='text' name='iprice' placeholder='IPRICE'></td>";	
				echo "<td colspan='2'><input type='submit' name='isubmit' value='ADD NEW ITEM'></td>";
				echo "</form>";
			echo "</tr>";

		echo "</table>";
		if (isset($_GET["iidd"])) 
		{
			$iidd = $_GET["iidd"];
			$qrydelstor = "DELETE FROM STORE WHERE IID = '$iidd'";
			if($con->query($qrydelstor))
			{
				echo "<script>window.location.href='admin.php'</script>";
			}
		}
		if (isset($_GET["iide"])) 
		{
			$iide = $_GET["iide"];
			$qryseltstor = "SELECT * FROM STORE WHERE IID = '$iide'";			
			echo "<table width='100%'>";
			echo "<tr>";
			echo "<td>IID</td>";
			echo "<td>INAME</td>";
			echo "<td>IMAGE</td>";
			echo "<td>DECSRIPTION</td>";
			echo "<td>IQTY</td>";
			echo "<td>ITYPE</td>";
			echo "<td>IPRICE</td>";
			echo "<td></td>";
			echo "</tr>";
			$row4 = mysqli_fetch_array($con->query($qryseltstor));
			echo "<tr>";
			echo "<h1 style='font-size:20px; text-align:center;'>EDITING TABLE</h1>";
			echo "<form action='admin.php' method='POST' enctype='multipart/form-data'>";
				echo "<td><input type='text' name='iid' value='".$row4['IID']."' readonly></td>";
				echo "<td><input type='text' name='iname' value='".$row4['INAME']."'></td>";
				echo "<td><input type='file' name='image' value='".$row4['IMAGE']."'></td>";
				echo "<td><input type='text' name='description' value='".$row4['DESCRIPT']."'></td>";
				echo "<td><input type='text' name='iqty' value='".$row4['IQTY']."'></td>";
				echo "<td><input type='text' name='itype' value='".$row4['ITYPE']."'></td>";
				echo "<td><input type='text' name='iprice' value='".$row4['IPRICE']."'></td>";	
				echo "<td colspan='2'><input type='submit' name='isubmitstr' value='Update'></td>";
				echo "</form>";
			echo "</tr>";
			echo "</table>";
		}
		if (isset($_POST["isubmitstr"]))
		{
			echo "<script>alert('Executed i submit str');</script>";
			
			$iid = $_POST['iid'];
			$iname = $_POST['iname'];			
			$description = $_POST['description'];
			$iqty = $_POST['iqty'];
			$itype = $_POST['itype'];
			$iprice = $_POST['iprice'];


			$f_name = $_FILES['image']['name'];
			$f_temp = $_FILES['image']['tmp_name'];
			$f_size = $_FILES['image']['size'];
			$f_shaperate = explode('.',$f_name);
			$f_extension = strtolower(end($f_shaperate));
			$f_newfile = uniqid().'.'.$f_extension;
			$f_store = "store_images/".$f_newfile;

			if ($f_extension =='jpg' || $f_extension=='jpeg'||$f_extension=='png') 
			{
					if($f_size>=5000000)
					{
						echo "file size overload";					
					}
					else
					{
						move_uploaded_file($f_temp, $f_store);
					}
			}
						
							if(empty($iid))
							{
								echo "IID Empty";
							}
							else if(empty($f_name))
							{
								echo "Image empty";
							}
							else if (empty($iname)) 
							{
								echo "INAME Empty";
							}								
							else if(empty($description))
							{
								echo "Description empty";
							}
							else if(empty($iqty))
							{
								echo "IQTY Empty";
							}
							else if(empty($itype))
							{
								echo "ITYPE Empty";				
							}
							else if(empty($iprice))
							{
								echo "IPRICE Empty";
							}						
							else
							{
								echo "<script>alert('inserting query');</script>";
									$qryinsrtstor = "UPDATE STORE SET IID = '".$iid."' , INAME = '".$iname."' , IMAGE = '".$f_newfile."' , DESCRIPT = '".$description."' ,  IQTY = '".$iqty."', ITYPE = '".$itype."', IPRICE = '".$iprice."' where IID= '".$iid."'";
									if($con->query($qryinsrtstor))
									{
										echo "<script>alert('Executing  query')</script>";
										echo "<script>window.location.href='admin.php'</script>";
									}
									else
									{
										echo mysql_error();
										die($con->error);
										echo "Entry Failed";										
									}
							}				
						
					

			
		}
		if (isset($_POST["isubmit"])) 
		{			
			$iid = $_POST['iid'];
			$iname = $_POST['iname'];			
			$description = $_POST['description'];
			$iqty = $_POST['iqty'];
			$itype = $_POST['itype'];
			$iprice = $_POST['iprice'];


			$f_name = $_FILES['image']['name'];
			$f_temp = $_FILES['image']['tmp_name'];
			$f_size = $_FILES['image']['size'];
			$f_shaperate = explode('.',$f_name);
			$f_extension = strtolower(end($f_shaperate));
			$f_newfile = uniqid().'.'.$f_extension;
			$f_store = "store_images/".$f_newfile;

			if ($f_extension =='jpg' || $f_extension=='jpeg'||$f_extension=='png') 
			{
					if($f_size>=5000000)
					{
						echo "file size overload";					
					}
					else
					{
						if(move_uploaded_file($f_temp, $f_store))
						{
							if(empty($iid))
							{
								echo "IID Empty";
							}
							else if (empty($iname)) 
							{
								echo "INAME Empty";
							}
							else if(empty($f_newfile))
							{
								echo "IMAGE empty";
							}
							else if(empty($description))
							{
								echo "Description empty";
							}
							else if(empty($iqty))
							{
								echo "IQTY Empty";
							}
							else if(empty($itype))
							{
								echo "ITYPE Empty";				
							}
							else if(empty($iprice))
							{
								echo "IPRICE Empty";
							}
							else
							{
								$qryinsrtstor = "INSERT INTO STORE (IID,INAME,IMAGE,DESCRIPT,IQTY,ITYPE,IPRICE) VALUES ('$iid','$iname','$f_newfile','$description','$iqty','$itype','$iprice')";
								if($con->query($qryinsrtstor))
								{
									echo "<script>window.location.href='admin.php'</script>";
								}
								else
								{
									echo mysql_error();
									die($con->error);
									echo "Entry Failed";
								}
							}							
						}

			}
		}
		else
		{
			echo "<script>alert('You can upload jpeg, jpg or png image only')</script>";			
			// die($con->error);
			// echo mysql_error();			
			// echo "Entry Failed";
			echo "<script>window.location.href='admin.php'</script>";
		}			
	}

	echo "<br>";

	//--------------------------------------contact us table ---------------------------------------------------
	$qry_select_con = "SELECT * FROM contactus";
	
	$res2 = mysqli_query($con,$qry_select_con);
	echo "<h1 style='font-size:20px; text-align:center;'>Customer review</h1>";
	echo "<table>";
	echo "<tr>";
		echo "<td>USERNAME</td>";
		echo "<td>COUNTRY</td>";
		echo "<td>EMAIL</td>";
		echo "<td>PHONE</td>";
		echo "<td>MESSAGE</td>";
		echo "</tr>";	
	while($row2 = mysqli_fetch_array($res2))
	{
		echo "<tr>";		
		echo "<td>".$row2['username']."</td>";
		echo "<td>".$row2['country']."</td>";
		echo "<td>".$row2['email']."</td>";
		echo "<td>".$row2['phoneno']."</td>";
		echo "<td>".$row2['message']."</td>";		
		echo "</tr>";
	}
	echo "</table>";
	//--------------------------------------add service list table----------------------------------------------


	$qry_select_slist = "SELECT * FROM SLIST";
	
	$res1 = mysqli_query($con,$qry_select_slist);
	echo "<h1 style='font-size:20px; text-align:center;'>SERVICE LIST</h1>";
	echo "<table>";
	echo "<tr>";
		echo "<td>SID</td>";
		echo "<td>SNAME</td>";
		echo "<td>ALTER</td>";
		echo "</tr>";	
	while($row1 = mysqli_fetch_array($res1))
	{
		echo "<tr>";
		$srid = $row1['SID'];
		echo "<td>".$row1['SID']."</td>";
		echo "<td>".$row1['SNAME']."</td>";
		echo "<td><a href=admin?sid=$srid>REMOVE</a></td>";		
		echo "</tr>";
	}
	echo "<tr>";
	echo "<form action='' method='post'>";
	echo "<td><input type='text' disabled='true'></td>";
	echo "<td><input type='text' name='sname'></td>";
	echo "<td><input type='submit' name='submitslist'></td>";
	echo "</form>";
	echo "</tr>";
	echo "</table>";
	if(isset($_GET['sid']))
	{
		$srid = $_GET['sid'];
		$qry_remv_slist = "DELETE FROM SLIST WHERE SID = '$srid'";
		if($con->query($qry_remv_slist))
		{
			echo "<script>window.location.href='admin.php'</script>";
		}
	}
	if (isset($_POST['submitslist'])) 
	{
		$sname = $_POST['sname'];
		$qry_insert_slist = "INSERT INTO SLIST (SNAME) VALUES ('$sname')";
		if($con->query($qry_insert_slist))
		{
			echo "<script>window.location.href='admin.php'</script>";
		}
		else
		{
			die($con->error);
			echo mysql_error();
		}
	}


		mysqli_close($con);
 	
		?>
		<br>
		<a href='logout.php'><button id='log'>LOGOUT</button></a>	
		<br>
		<br>
</div>
</body>
</html>

















<style>
	
table, td {
    /*border: 1px solid black;*/
    padding: 6px;
    text-align: left;
    font-weight: normal;
}
table, th{
	/*border: 1px solid black;*/
	/*text-align: center;	*/
}

th {
	background-color:  #0066ff;
    color: white;    
}
tr:nth-child(even) {
    background-color: #dddddd;
}
tr:nth-child(odd) {
    background-color: White;
}
table {
    border-collapse: collapse;
    width: 100%;
    max-width: auto;
    /*margin-left: 10px;*/
    font-family: arial, sans-serif;
    box-shadow: 0px 0px 15px #888888;
}

th {
    height: 50px;
}
body{	
	margin:auto;
	background-image: url("image/backg.jpg");
	max-width: auto;
}
#admin{	
	font-size: 40px;
	text-align: left;
	min-width: 1550px;
	max-width: auto;
	/*margin-left: 25px;*/	
	height:110px;
	background-color: #83bb22;	
	background-image: url("image/header.jpg");
	color:white;
	box-shadow: 0px 0px 15px #888888;
}
#link
{
	text-decoration: none;	
	color:#4CAF50;
	font-weight: bold;
}
#link:hover{
	box-shadow: 0px 0px 15px #888888;
}
#link2{
	color:red;
	font-weight: bold;	
}
#link2:hover{
	cursor: pointer;
	box-shadow: 0px 0px 15px #888888;
}
a{
	text-decoration: none;
}
#log{
	background-color:  #808080; 
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;        
}
/*#log*/
#log:hover{
	background-color: #ff3333;
	cursor: pointer;
	/*box-shadow: 2px 8px 15px #888888;*/	
}
#section1{
	max-height:auto;
	background-color: white;
	min-width: 1550px;
	max-width: auto;
	/*margin-left: 25px;*/
	background-image: url("image/sec2img.jpg");
	box-shadow: 0px 0px 15px #888888;	
}
/*#section2{
	min-height:auto;
	background-color: white;
	width: 1310px;
	max-width: auto;
	margin-left: 0px;
	margin-top: 100px;
	background-image: url("image/sec2img.jpg");
	box-shadow: 0px 0px 15px #888888;	
}*/
p{
	display: inline-block;
	margin-top:30px;
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
</style>