<?php 
$conn = new mysqli("localhost", "root", "", "gardenmaster");
if($conn->connect_error)
{
	die("Connection Failed".$conn->error);
}

$sqlqry1 = "SELECT * FROM registration";

//mysqli_fetch_array($conn->query($sqlqry1));

$count_num = mysqli_num_rows($conn->query($sqlqry1));
echo "$count_num";	
$str = "abcd";
echo "<br>$str";
$add = $str.$count_num;

echo "<br>$add";
 ?>
