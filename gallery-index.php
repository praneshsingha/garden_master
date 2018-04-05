<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Gallery</title>
  <link rel="stylesheet" type="text/css" href="gallery.css">
</head>
<body>
	<div class="header">
            <img id="plant" src="gallery/plant.png">
              
                <h3 style="margin-top: 10px;font-family:fantasy; margin-top:-204px;font-family: fantasy;padding: 15px;margin-left: 69px;color: #83bb22;line-height:7;margin: -227;font-size: 40px;">Garden Master</h3>
              <div >
                <?php
              if(!isset($_SESSION["username"])){
              ?>
                 <div class="login-container">
               <form id="login-menu" action="login.php" onsubmit="return logsubmit()" method="POST" >
                  <table>
                    <tbody>
                      <tr>
                        <td style="font-size:13px;font-family: fantasy;">Email Id</td><td style="font-size: 13px;font-family: fantasy;">Password</td>
                      </tr>
                      <tr>
                        <td><input type="text" name="loguname" style="height:20px;margin-right:5px;"></td>
                        <td><input type="Password" name="logupass" style="height:20px;" placholder="Password"></td>
                        <td  ><input id="btn123" type="submit" name="lsubmit" value="Login" ></td>
                      </tr>
                      <tr>
                        <td><a style="text-decoration: none;color:black;" href="signup.php"><h4 style="font-family: 'Titillium Web', sans-serif; font-size:14px;">Register</h4> </a></td>
                        <td><h4 style="font-family: 'Titillium Web', sans-serif;font-size:14px;">Forgetten Password?</h4></td>
                      </tr>
      
                    </tbody>
          </table>
                </form>
            </div>
            <?php
            }else{
              echo "<h1 style='margin:-200px 0px;float:right; font-size:20px; margin-right:4px;'><a href = 'profile.php' style='text-decoration:none; color:black;border:1px black solid; border-radius: 2px;'> Hi ".$_SESSION["username"]."</a></h1>";
            }
              ?>
      </div>
              
              </div>
  
             <div class="nav">
              <div class="nav-style">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="service.php">services</a></li>                  
                  <li><a href="StoreIndex.php">My store</a></li>
                  <li><a href="gallery-index.php">Gallary</a></li>
                  <li><a href="#contactus">About Us</a></li>
                  <li><a href="#contactus">Contact Us</a></li>
                  <?php
                    if(isset($_SESSION["username"]))
                    {
                      echo "<li><a href='cart.php'>cart</a></li>";
                      echo "<li><a href='logout.php'>Logout</a></li>";

                    }
                  ?>

               </ul>
              </div>
            </div>
      </div>
      
      <div class="gallery"> 
      <div id="humb">

        <a  href="#lightbox1"><img  src="gallery/service1.png"></a>
        
        </div>
      </div>

     <div class="lightbox" id="lightbox1">
        <div class="outer">
          <p id="title">title of image<a href="" id="cross">X</a></p>
            <div class="inner">
              <img  src="gallery/service1.png">
                <p id="matter">hello garden master</p>
              </div>

              <p> <a href="" id="next">Next</a>
              <a href="" id="previous">Previous</a></p>
       </div>

  </div>
  <div class="gallery1">
  <table >
    <table>
      <tr>
        <td><a  href=""><img  src="gallery/service2.jpg"></a></td>
       </tr>
       <tr>
        <td><a  href=""><img  src="gallery/service3.jpg"></a></td>
       </tr>
       
    </table>
  </div>

<div class="gallery2">
  <table >
    <table>
      <tr>
        <td><a  href=""><img  src="gallery/Garden.jpg"></a></td>
        <td><a  href=""><img  src="gallery/Garden1.jpg"></a></td>
        <td><a  href=""><img  src="gallery/Garden2.jpg"></a></td>
        <td><a  href=""><img  src="gallery/service4.jpg"></a></td>

      </tr>
      
        
      

  </table>
</div>
<div class="gallery3">
  <table >
    <table>
      <tr>
        <td><a  href=""><img  src="gallery/Garden3.jpg"></a></td>
        <td><a  href=""><img  src="gallery/Garden4.jpg"></a></td>
        <td><a  href=""><img  src="gallery/Garden5.jpg"></a></td>
        <td><a  href=""><img  src="gallery/Garden6.jpg"></a></td>

      </tr>
      
        
      

  </table>
</div>

 <footer style="margin-top: 0px;">
                 <div class="first-section">
                  <div style="margin-left:45px;">
                    <table>
                      <tr> 
                        <td><img src="images/location1.png" style="margin-left: 43px;margin-top:15px;" onmouseover="src='images/location.png'" onmouseout="src='images/location1.png'"> </td>
                        <td><p style="color:white;margin-top: 15px;margin-left: 15px;
                        font-size:16px; color: white;font-family: 'PT Sans Narrow', sans-serif;">E-city Bangalore India</p></td>
                      </tr>
                        <tr>
                        <td><img src="images/phone.png" style="margin-left: 43px;margin-top:14px;" onmouseover="src='images/phone1.png'" onmouseout="src='images/phone.png'"> </td> 
                       <td><p style="color:white;margin-top: 15px;margin-left: 15px;font-size:16px; color: white;font-family: 'PT Sans Narrow', sans-serif;">+917204266841</p></td>                   
                        </tr>
                        <td><img src="images/email.png" style="margin-left: 43px;margin-top:14px;" onmouseover="src='images/email1.png'" onmouseout="src='images/email.png'"> </td> 
                       <td><p style="color:white;margin-top: 15px;margin-left: 15px;font-size:16px; color: white;font-family: 'PT Sans Narrow', sans-serif;">Gardenmaster@gmail.com</p></td>                   
                        </tr>
                      </table>
                      </div>
                      <div class="about-us">
                        <h1 style="font-size: 30px; font-family: 'Oswald', sans-serif;color:white;">About My Company</h1>
                        <p style="margin-top: 10px; font-size:12px; color: white;font-family: 'PT Sans Narrow', sans-serif;">My company is based on making garden<br>
                         beautiful.Our company provides services<br>
                         as well as online purchase of garden stuffs</p>
                         <tr>
                        <td><img src="images/facebook1.png" style="margin-left:0px;margin-top:31px;" onmouseover="src='images/facebook.png'" onmouseout="src='images/facebook1.png'"> </td> 
                         <td><img src="images/instagram1.png" style="margin-left: 43px;margin-top:31px;" onmouseover="src='images/instagram.png'" onmouseout="src='images/instagram1.png'"> </td> 
                          <td><img src="images/twitter1.png" style="margin-left: 43px;margin-top:31px;" onmouseover="src='images/twitter.png'" onmouseout="src='images/twitter1.png'"> </td> 
                          <td><img src="images/share.png" style="margin-left: 43px;margin-top:31px;" onmouseover="src='images/share1.png'" onmouseout="src='images/share.png'"> </td> 
                                  
                        </tr>
                        

                      </div>
                   


                 </div>
                 <div class="second-section">
                   

                 </div>


               </footer>

  

</body>
</html>
<script>
  function logsubmit()
{
  var logun = document.getElementById("loguname");
  var logup = document.getElementById("logupass");
  if(logun.value == "")
  {
    alert("Please enter your username");
    return false;
  }
  else if(logup.value == "")
  {
    alert("Please enter your password");
    return false;
  }
  else
  {
    return true;
  }
}
</script>