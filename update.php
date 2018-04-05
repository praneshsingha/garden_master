<?php 
session_start();
 ?>
<?php 
						$conn = new mysqli("localhost","root","","gardenmaster");
						

						$user = $_SESSION["username"];				
			            $qry_slt_reg = "SELECT * FROM registration WHERE EMAIL = '$user' ";
			            $row1 = mysqli_fetch_array($conn->query($qry_slt_reg));
			            $cid = $row1["CID"];				
						
						$cart = "cart";
			            $cartname = $cart.$cid;	 
	                    $crtid = $_POST['crtid'];
				
						if(isset($_POST['update']))
						{
						
					  	$qty2 = $_POST['qty2'];
					  	// $iid = $_POST['iid'];
					  	// $iname = $_POST['iname'];
					  	$iprice = $_POST['iprice']*$qty2;

					  	$user = $_SESSION["username"];				
			            $qry_slt_reg = "SELECT * FROM registration WHERE EMAIL = '$user' ";
			            $row1 = mysqli_fetch_array($conn->query($qry_slt_reg));
			            $cid = $row1["CID"];
					  	$cart = "cart";
	            		$cartname = $cart.$cid;  	
					  	$qry_update_cart = " UPDATE $cartname SET QTY = '$qty2', IPRICE = '$iprice' WHERE CRTID='$crtid' ";					  	
					  	if($conn->query($qry_update_cart))
					  	{
					  		echo "<script>window.location.href='cart.php'</script>";					  							  		
					  	}					  	
					  	else
					  	{
					  		die($conn->error);
					  		echo mysql_error();
					  	}
					  	echo "<script>alert('submit button executed');</script>";								
						}
 ?>