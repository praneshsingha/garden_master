<?php
session_start();
?>
<!doctype html>
<html>
	<head>
    <meta charset="utf-8">
		<title >Garden master</title>
    <link rel="icon" href="images/logo.ico" type="image">
		<link rel="stylesheet" type="text/css" href="GMstyle.css">
      <link rel="stylesheet" type="text/css" href="login.css">
	</head>
      <body>
        <div id="slider-container">
          <img class="slides" src="slide-image/slide2.jpg">          
            <img class="slides" src="slide-image/slide3.jpg">
            <img class="slides" src="slide-image/slide4.jpg">
              <img class="slides" src="slide-image/slide5.jpg">
              <img class="slides" src="slide-image/slide6.jpg">
                  <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
                  <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>

      </div>
	     <div class="header">
            <img id="plant" src="images/plant.png">
              
                <h3 style="margin-top: 10px;font-family:fantasy; margin-top:-204px;font-family: fantasy;padding: 15px;margin-left: 69px;color: #83bb22;line-height:293px;margin: -227;font-size: 40px;">Garden Master</h3>
                <div >
<!-- login page code -->
              <?php
              if(!isset($_SESSION["username"])){
              ?>
                <div class="login-container">
                
                  <table>
                    <tbody>
                      <tr>
                        <td style="font-size:13px;font-family: fantasy;">Email Id</td><td style="font-size: 13px;font-family: fantasy;">Password</td>
                      </tr>
                      <tr>
                        <form  action="login.php" onsubmit="return logsubmit()" method="POST" name="login_form">
                        <td><input type="text" name="loguname" id="loguname" style="height:20px;margin-right:5px;" ></td>
                        <td><input type="Password" name="logupass" id="logupass" style="height:20px;" ></td>
                        <td  ><input id="btn123" type="submit" name="lsubmit" value="Login" ></td>
                        </form>
                      </tr>
                      <tr>
                        <td><a style="text-decoration: none;color:black;" href="signup.php"><h4 style="font-family: 'Titillium Web', sans-serif; font-size:14px;">Register</h4> </a></td>
                        <td><h4 style="font-family: 'Titillium Web', sans-serif;font-size:14px;">Forgetten Password?</h4></td>
                      </tr>
      
                    </tbody>
                  </table>
                
              </div>
            <?php
              }else{
              echo "<h1 style='margin:-200px 0px;float:right; font-size:20px; margin-right:4px;'> Hi ".$_SESSION["username"]."</h1>";
            }
              ?>
      </div>
              
              </div>
  
             <div class="nav">
              <div class="nav-style">
               <ul>
                  <li><a href="#parallax">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">My store</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <?php
                    if(isset($_SESSION["username"])){
                      echo "<li><a href='logout.php'>cart</a></li>";
                      echo "<li><a href='logout.php'>Logout</a></li>";

                    }
                  ?>
               </ul>
              </div>
            </div>
      </div>
  

  

	</body>

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









    var Index = 1;
    function plusIndex(n)
    {
    Index = Index + n ;
    showimage(Index);
    }
    showimage(1);
    function showimage(n)
    {
      var i;
      var x = document.getElementsByClassName("slides");
      if(n > x.length) {Index = 1};
      if(n < 1) {Index = x.length};
       for(i=0;i<x.length;i++)
          {
            x[i].style.display="none";
          }
           x[Index - 1].style.display="block";
       }

        autoslide();

        function autoslide()
        {
          var i;
          var x = document.getElementsByClassName("slides");
          for(i=0;i<x.length;i++)
          {
            x[i].style.display="none";
          }
          if(Index > x.length){Index=1}
           x[Index - 1].style.display="block";
          Index++;
          setTimeout(autoslide,2500);
         }
  </script>
  </div >
  <hr class="style1">
 
  <div id="block2">
 <div class ="most-top">

    <div id="block3">
  <span> <img  class="image" src=" images/services.png" onmouseover="src='images/services1.png'" onmouseout="src='images/services.png'"</span> 
  <dl>

      <dt  style="font:25px;font-family: fantasy;color:black;">Excellent Services:</dt>
      <dd>We provide excellent services such as online garden stuff  selling,fast delivery, book your appointment for gardening.</dd>
  </dl>
  
    </div>
    <div id="block3">
      <span><img class="image" src=" images/cuter.png" onmouseover="src='images/cuter1.png'" onmouseout="src='images/cuter.png'"</span>        
      <dl>
      <dt  style="font:25px;font-family: fantasy;color:black;">Insured Operators:</dt>
  <dd>All of our staffs are fully insured, and undergo regular training and refresher courses.Operators have proper ID proof.</dd>
  </dl>
    </div>
   </div>
   <div id="block2">
    <div class ="most-top">
    <div id="block3">
      <span> <img  class="image" src=" images/excellent.png" onmouseover="src='images/excellent1.png'" onmouseout="src='images/excellent.png'"</span> 
  <dl id="dl">
      <dt style="font:25px;font-family: fantasy;color:black;">Satisfied Customers:</dt>
  <dd>Customer satisfaction is at the core of human experience, reflecting our liking of a company’s business activities.</dd>
  </dl>
  
    </div>
    <div id="block3">
      <span> <img  class="image" src=" images/work.png" onmouseover="src='images/work1.png'" onmouseout="src='images/work.png'"</span> <img src="images/why.jpg" style="width:400px;height:200px;margin-top:-291px;margin-left:-985px";>
      <dl>
      <dt  style="font:25px;font-family: fantasy;color:black;">Guaranteed Work:</dt>
  <dd>We guarantee that the work done by our workers is  standard level and our product quality is also very fine</dd>
  </dl>

    </div>
  </div>
   </div>
 </div>
</div>

<div id="excellent-service">      
       <img src="images/excellent-service.jpg" alt="excellent-service">      
</div>
<div id="All-Quotes-Free">
  <img src="images/image-1.jpg" alt="AllQuoteFree." >
</div>
 
 <footer>
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

</html>