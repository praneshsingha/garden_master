<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  	<link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="GMstyle.css">
    <link rel="icon" href="images/logo.ico" type="image">
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
</head>
<body>
  <div class="header1">
              <img id="plant1" src="images/plant.png">
             
              <h3 id="top-title1">
              <a  style="text-decoration: none; color:#83bb22;" href="index.php">                  
              Garden Master
              </a>
              </h3>
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
                echo "<h1 style='margin:-200px px;float:right; font-size:20px; margin-right:4px;'><a href = 'profile.php' style='text-decoration:none; color:black;border:1px black solid; border-radius: 2px;'> Hi ".$_SESSION["username"]."</a></h1>";
              }
              ?>
      </div> 
      <div class="nav">
             <div class="nav-style" style="position: absolute;">
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
          <div id="main">
            <!-- <p style="text-align: center;">SERVICE LIST</p> -->
            <table width="95%" id="servicetable">
              <tr>
                <td width="70%" >
                                                  <p id="servicetop">Garden Care</p> 
                  Garden Care, would like to introduce ourselves as one of the leading service 
                  providers of Gardening and Landscaping services. Stationed in Bangalore, 
                  we are well-known in the market for providing best Exotic Garden Care services to clients.
                  We also maintain a Nursery, which comprises finest plants that can be used for decoration of lawns and gardens. Our offered services are a perfect amalgamation of quality, reliability and timeliness. Possessing a strong belief in customer-oriented approach, we are offering our services at unbeatable prices. With our vast industry experience, we have gained a special place amongst our esteemed patrons. We have some of the experienced gardeners in our team who have complete knowledge about gardening, different flowers and their season of growth, fertilizers and more. A number of commercial and residential buildings are designed by the landscaping work done by us. Latest gardening equipment and tools are used that enhances the work efficiency
                  
                </td>
                <td><img src="service_image/garden care.jpg" alt=""  id="imgservice"></td>
              </tr>
              <tr>
                <td width="70%">
                                                    <p id="servicetop">Lawn Moving</p> 
                  <p id="servicep">
                    if you do not know how to mow a lawn, there is no need to be discouraged: it is never too late to learn. Lawn mowing does not take a lot of strength or expertise, and it is nice knowing you do not have to rely on someone else to do the job for you. You just need a good mower, some patience and a basic understanding of best practices.

                  At Inside Outside we understand the importance of providing professional lawn care services.
                  A healthy and well-cared for lawn provides an orderly appearance and raises property value.
                  Our lawn services include: lawn moving, edging, turfing, planting, weed control, fertilising, trimming and repair.
                  To ensure a professional presentation, regular maintenance of the lawn will provide even growth, stronger grass and a healthy, lush #83bb22 lawn over time.
                  Our experienced staff are fully equipped and will make your neighbours jealous.                  
                  </p>
                  </td>
                <td><img src="service_image/lawn_moving.jpg" alt="" id="imgservice"></td>
              </tr>
              <tr>
                <td width="70%">
                                                    <p id="servicetop">Rubbish Removal</p> 
                  If you are worried about the conditions in your garden, then it might well be that the services of London garden waste clearance professionals such as Handy Rubbish are right for you. Lawn care is often not just about the process of cutting and caring, but making sure that the right materials are treated in the right manner. As well as the most obvious areas in which this can be affected, the manner in which you dispose of the garden waste can mean that you are doing your utmost to make sure that the best treatment is available to you. Call us now on 020 3540 8282 for a free quote. But what are the benefits which are offered to you if you choose to hire in some garden waste removal experts?
                </td>
                <td><img src="service_image/Garden-Waste-Removal1.jpg" alt="" id="imgservice"></td>
              </tr>
              <tr>
                <td width="70%">
                                                      <p id="servicetop">Landscape Design</p> 
                  <p id="servicep">
                  With years of experience in the business, at Ahead Garden Design Services Ltd, we know what it takes to construct a garden.
                  With us, you get the best possible materials and construction methods.
                  Give us a call with your requirements and we can develop realistic designs. With our focus being meeting your requirements, we spend time to carefully design your garden with you.
                </p>
                  </td>
                <td><img src="service_image/landscape design.jpg" alt="" id="imgservice"></td>
              </tr>
              <tr>
                <td width="70%">
                                                        <p id="servicetop">Watering Garden</p> 
                  With years of experience in the business, at Ahead Garden Design Services Ltd, we know what it takes to construct a garden. 
                  With us, you get the best possible materials and construction methods.
                  Give us a call with your requirements and we can develop realistic designs. With our focus being meeting your requirements, we spend time to carefully design your garden with you.The cost of this precious resource is rising all the time. We can all tread a little lighter on the planet by taking a few moments to re-evaluate our garden design and watering habits to eliminate inefficient practices that waste water … and reap the benefits at the same time! 
                </td>
                <td><img src="service_image/water gardening.jpg" alt="" id="imgservice"></td>
              </tr>
            </table>
            <a href="servicedatabase.php" style="text-align: right"><button id="requestbtn">Request</button></a>
          </div>














<!-- -----------------------------------------------------------------html footer------------------------------------------------------ -->
              <br>
               <br>
               <footer >
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
<style>
body
  {
    margin:auto;    
    background-image: url("image/backg.jpg");
  }
#main{
  font-size: 20PX;
}
#servicetable{
  border: 0px solid black;
  margin-left: 30px;
  margin-top: 20px;
}
#requestbtn{
  border:none;
  padding: 10px 15px;
  background-color: blue;
  margin-left: 32px;
  color:white;
  cursor: pointer;  
}
#requestbtn:hover{
  background-color: red;
  width:120px;
}
#servicetable tr:nth-child(odd) {
    background-color: #83bb22;
}
#servicetable tr:nth-child(even) {
    background-color: white;
}
#imgservice{
  margin-left: 10px;
  width:380px;
  height:300px;
}
#servicep{
  /*color:#83bb22;*/
}
#servicetop{
  font-size: 30px; text-align: center;  
}
#servicetable td:hover{
  /*background-color: blue;*/
  box-shadow: 0px 0px 30px black;
  /*color:white;*/  
}

</style>
<!-- style="background-color: #83bb22;" -->