<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">

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

    function validateregister()
    {   
      var firstname = document.getElementById("first");
      var lastname = document.getElementById("last");
      var eid = document.getElementById("eid");
      var password = document.getElementById("password");
      var repassword = document.getElementById("repassword");
      var dob = document.getElementById("dob");
      var phoneno = document.getElementById("phone");
      var pin = document.getElementById("pin");
      var address = document.getElementById("addr");

      // var phlength = phoneno.value.length;
      // if((firstname == "") || (lastname == "") || (eid == "") || (password == "") || (repassword == "") || (dob == "") || (phoneno == "") || 
      //   (pin == "") || (address == "" ))
      // {
      //   alert( " please enter your data " );
      //   return false;
      // }
      // else
      // {
      //   return true;
      // }
      if(firstname.value == "")
      {
        alert("please enter your first name");
        return false;
      }
      else if( lastname.value == "")
      {      
          alert("last name");
          return false;
      }
      else if(eid.value =="")
      {
        alert("Email id");
        return false;
      }
      else if (password.value =="")
      {
        alert("password");
        return false;
      }
      else if(repassword.value == "")
      {
        alert("reenter password");
        return false;
      }
      else if (dob.value == "")
      {
        alert("dtae of bnorth");
        return false;
      }
      else if (phoneno.value == "")
      {
        alert("phone numner ");
        return false;
      }
      else if (pin.value == "")
      {
        alert("pin ");
        return false;
      }
      else if(address.value == "")
      {
        alert("address");
        return false;
      }
      else if(password.value != repassword.value)
      {
        alert("Password does not match");
        return false;
      }
      else if(phoneno.value.length != 10)
      {
        alert("Phone number should be 10 cheracter");
        return false;
      }
      else
      {                
        return true;
      }
    } 
    function key(input) 
    {
      var regex = /[^a-z]/gi;
      input.value = input.value.replace(regex, "");
    }
    function keynum(inputn)
    {
      var regex = /[^0-9]/g;
      inputn.value=inputn.value.replace(regex, "");
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
                if(!isset($_SESSION["username"])){
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
                  echo "<h1 style='margin:-200px 0px;float:right;'>".$_SESSION["username"]."</h1>";
                }
               ?>
      </div>
              




      			 <div class="registration-section">
      			   	<p style="font-family: 'Merriweather', serif; color:white;">Create a new account</p>
                <form onsubmit=" return validateregister()" action="registerDB.php" method="POST" >
                <table>
                     <tr >
                     <td><input class="input-field" type="text" name="firstname" placeholder="First Name" id="first" 
                      onkeyup="key(this)">
                     </td>
                     </tr>
                     <tr>
                      <td><input class="input-field" type="text" name="lastname" placeholder="Last Name" id="last" onkeyup="key(this)"></td>
                      </tr>
                      <tr >
                      <td ><input class="input-field" type="email" name="eid" placeholder="Email Id" id="eid"></td>                   
                      </tr>
                       <tr >
                      <td ><input class="input-field" type="Password" name="password" placeholder="Password" id="password"></td>                   
                      </tr>
                       <tr >
                      <td ><input class="input-field" type="Password" name="repassword" placeholder="Re-enter Password" id="repassword"></td>
                    </tr>
                    <tr >
                      <td ><input class="input-field" type="date" name="dob"   id="dob"></td>
                    </tr>
                      <tr >
                      <td ><input class="input-field" type="value" name="phoneno" placeholder="Phone number" maxlength="10" id="phone" minlength="10" onkeyup="keynum(this)"></td>
                    </tr>
                    <tr >
                    <tr >
                      <td ><input class="input-field" type="value" name="pin" placeholder="Pin-code" maxlength="6" id="pin" minlength="6" onkeyup="keynum(this)"></td>
                    </tr>
                    <tr >
                      <td ><input class="input-field" style="height:50px;" type="text" name="address" placeholder="Address" id="addr"></td>
                    </tr>
                    <tr>
                      <td  ><input  type="submit" value="signUp" name="submit" style="width: 384px; height:40px;" id="btn123"></td>
                    </tr>
                       
                     </table>
                    </div>              
              </form>
              



               <br>
               <br>
               <<footer >
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