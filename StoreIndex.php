<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Store</title>
	<link rel="stylesheet" type="text/css" href="mystorestyle.css">
  <!-- <link rel="stylesheet" type = "text/css" href="mystoresty2.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="GMstyle.css">
  <link rel="icon" href="images/logo.ico" type="image"> -->
	
	<style>
		*{margin: 0;padding: 0;}
		body{
			max-width:100%;
			width:100%;

      
			margin: 0 auto;
			background-color:#f6f6f6;
		}
	</style>
<script>
  function myalert()
  {
    alert('Item currently unabelable');
  }
</script>
</head>



<body>
	
		  <div class="header">
          
            <img style="position: static;padding: 10px; margin-top:3px;" src="store/plant.png">
        
              
                <h3 style="margin-top: 10px;font-family:fantasy; margin-top:-241px;font-family: fantasy;padding: 15px;margin-left: 69px;color: #83bb22;line-height:346px;margin: -227;font-size: 40px;">Garden Master</h3>
              <!-- </div > -->
            <?php
                if(!isset($_SESSION["username"]))
                {
                ?>

              <div class="login-container1">
                  <table>
                    <tbody style="margin-top: 10px;">
                      <tr>
                        <td style="font-size: 15px;font-family: fantasy;">Email Id</td><td style="font-size: 15px;font-family: fantasy;">Password</td>
                      </tr>
                      <tr>
                        <form  action="login.php" onsubmit="return logsubmit()" method="POST" name="login_form">
                        <td><input type="text" name="loguname" id="loguname" style="height:20px;margin-right:5px;"></td>
                        <td><input type="Password" name="logupass" id="logupass" style="height:20px;" placholder="Password"></td>
                        <td  ><input id="btn123" type="submit" name="lsubmit" value="Login"></td>
                        </form>
                      </tr>
      
                    </tbody>
                  </table>
                
              </div>

              <?php                                            
              }
              else
              {
                echo "<h1 style='margin:-200px px;float:right; font-size:20px; margin-right:4px;margin-top: -201px;'><a href = 'profile.php' style='text-decoration:none; color:black;border:1px black solid; border-radius: 2px;'> Hi ".$_SESSION["username"]."</a></h1>";
              }              
              ?>
     </div>
     <div class="nav-style">
      <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="service.php">services</a></li>                  
                  <!-- <li><a href="StoreIndex.php">My store</a></li> -->
                  <li><a href="gallery-index.php">Gallary</a></li>                  
          <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">My store</a>
              <div class="dropdown-content">
                <a href="#water">water</a>
                <a href="#tool">Tool</a>
                <a href="#">Link 3</a>
              </div>
          </li>
        <li><a href="#home">About us</a></li>
        <li><a href="#home">Contact Us</a></li>
        <?php
                    if(isset($_SESSION["username"]))
                    {
                      echo "<li><a href='cart.php'>cart</a></li>";
                      echo "<li><a href='logout.php'>Logout</a></li>";

                    }
                  ?>
  </ul>
     </div>  
<!-- <div class="product-item"> -->
  <?php 

              $con  = new mysqli("localhost","root","","gardenmaster");
             
              $qrysltstore = "SELECT * FROM STORE";
              $res = mysqli_query($con,$qrysltstore);
              echo "<table id='storetable'>";
              while ($row3 = mysqli_fetch_array($res)) 
              {
                  echo "<tr>";                  
                  echo "<form action='' method='post'>";               
                  echo "<input type='hidden' value='".$row3['IID']."' name='cartid'>";
                  echo "<input type='hidden' value='".$row3['INAME']."' name='iname'>";
                  echo "<input type='hidden' value='".$row3['IPRICE']."' name='iprice'>";
                  echo "<td><p id='carttxt'>".$row3['INAME']."</p></td>";
                  if($row3['IQTY'] == 0)
                  {
                      echo "<td><input type='submit' id='cartbtn' value='Add to cart' onclick='myalert()'></td>";
                  }
                  else
                  {
                      echo "<td><input type='submit' name='add2cart' id='cartbtn' value='Add to cart'></td>";
                  }                  
                  echo "<td><p id='carttxt'>".$row3['DESCRIPT']."</p></td>";                  
                  echo "<td><p id='carttxt'>Item Left:".$row3['IQTY']."</p></td>";
                  echo "<td><img style='height:250px; width:400px;' src='store_images/".$row3['IMAGE']."' /></td>";
                  echo "</form>";
                  echo "</tr>";                 
              }        
              echo "</table>";              
            ?>

<!-- </div> -->
</body>
</html>
<?php 
$conn = new mysqli("localhost" , "root" , "" , "gardenmaster");
if($conn->connect_error)
{
  die("Connection Failed".$conn->connect_error);
}
// if(isset($_SESSION["username"]))
// {
    if(isset($_POST["add2cart"]))
    {
      // if (isset($_GET["id"])) 
      // {            
        if(isset($_SESSION["username"]))
        {
            $id = $_POST["cartid"];
            
                                echo $id."<br>";
            
            $user = $_SESSION["username"];
            $qry_slt_reg = "SELECT * FROM registration WHERE EMAIL = '$user' ";
            $row1 = mysqli_fetch_array($conn->query($qry_slt_reg));
            $cid = $row1["CID"];

                                echo $cid."<br>";

            // $iid = $id;
            $iname = $_POST["iname"];
            $qty = '1';
            
                                echo $iname."<br>";
            
            $iprice = $_POST["iprice"];

                                echo $iprice."<br>";
            
            $cart = "cart";
            $cartname = $cart.$cid;
            $qry_insrt_cart = "INSERT INTO $cartname (IID,INAME,IPRICE) VALUES ('$id','$iname','$iprice')";
                if($conn->query($qry_insrt_cart))
                {
                  echo "<script>alert('1 item added to your cart');</script>";
                  echo "<script>window.location.href='StoreIndex.php'</script>";
                }    
                else
                {
                  echo mysql_error();
                }
          }
          else
          {
            echo "<script>window.location.href='servicedatabase.php'</script>";
          }
      }
      else
      {
        echo mysql_error();
      }
 // {
 // else
 // {
 //    // echo "<script>window.location.href='servicedatabase.php'</script>";
 // }
 ?>

<style>
  .login-container1
{
  float: right;
  color: black;
  position: relative;
  right:100px;
  top:0px;
  text-decoration: none;
  margin-right:-80px;
  margin-top: -219px;
    margin-left: 929px;
}
#storetable{
  width: 90%;
  margin-top: 50px;
  margin-left: 40px;
 border-collapse: collapse; 
}
#storetable tr:nth-child(even) {
    background-color: #dddddd;    
}
#storetable tr:nth-child(odd) {
    background-color: White;
}
#storetable td{  
  text-align: center;
}
th {
  background-color:  #0066ff;
    color: white;    
}
#cartbtn{
  border: none;
  padding: 10px;
  box-shadow: 0px 0px 5px 1px;
  border-radius: 10px;
  background-color: #66ff33;
}
#cartbtn:hover{
  background-color: #cccc00;
  cursor: pointer;
}
#carttxt{
  font-size: 20px;
}
</style>