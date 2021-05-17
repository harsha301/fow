 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<title>signup</title>
<body onload='document.check.password.focus()'>
<style>
    .checked {
        color: orange;
    }
    <!--  css  -->
    .zoom
    {
    transition:transform 0.5s;
    }
    .zoom:hover
    {
    transform:scale(1.13);
    }
    
    .container {
    position: relative;
    width: 50%;
    }
    
    .image {
    display: block;
    width: 100%;
    height: auto;
    }
    
    .overlay {
    position: absolute;
    bottom: 100%;
    left: 0;
    right: 0;
    background-color: #008CBA;
    overflow: hidden;
    width:100%;
    height:0;
    transition: .5s ease;
    }
    
    .container:hover .overlay {
    bottom: 0;
    height: 100%;
    }
    
    .text {
    white-space: nowrap;
    colour: while;
    font-size: 20px;
    position: absolute;
    overflow: hidden;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}
    
    
    .links
    {
    border-radius:10px;
   
    }
    .links:hover
    {
    background-color:white;
    }
    
    .zoom
    {
    transition:transform 0.5s;
    }
    .zoom:hover
    {
    transform:
    translate(-50%, -50%);
    }
    a{
     text-decoration: none;
     color: #555;
}
    .links
    {
        border-radius:10px;
    }
    .links:hover
    {
    background-color:white;
    }
    
    .zoom
    {
    transition:transform 0.5s;
    }
    .zoom:hover
    {
    transform:scale(1.2);
    }
    </style>
    </head>
    
<body>
    <div class="nav">
<table border="0" width="100%" height="10%">
<tr>
<td width="12.5%" align="center" bgcolor="yellow" class="links"> <a href="index.html">HOME</a> 
<td width="12.5%" align="center" bgcolor="yellow" class="links">ABOUT US
<td width="12.5%" align="center" bgcolor="yellow" class="links">CONTACT US
<td width="12.5%" align="center" bgcolor="yellow" class="links">MENU
<td width="12.5%" align="center" bgcolor="yellow" class="links">VARIETIES
<td width="12.5%" align="center" bgcolor="yellow" class="links">FEEDBACK
<td width="12.5%" align="center" bgcolor="yellow" class="links"> <a href="signuppage.php">SIGNUP</a> 
<td width="12.5%" align="center" bgcolor="yellow" class="links"> <a href="login1.php">LOGIN</a>
</tr>
</table>
</div>
     <div class="header">
       <div class="container1">
    <div class="navbar">
<form action="signup.php" name="check" method="POST" onsubmit="return  validateForm()">
  <div id="div1" id="div2"  class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <label for="username"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter your 10 digit number" name="username" id="username" required>
    <label for="mail"><b>Email-id</b></label>
<input type="text" placeholder="Enter your Email-Id" name="mail" id="mail" required>
    <label for="password"><b>Password</b></label>
      <i class="fa fa-eye" id="eye"></i>
    <input type="password"  placeholder="Create a Password"  id="password" name="password" required>
    <label for="confirm_password"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password"  id="confirm_password" name="conf" required> 
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <p>By creating an account you agree to our <a href="#" id="myBtn" style="color:blue"> <label>
      <input type="checkbox"  required name="agree" id="agree" style="margin-bottom:15px">
    </label>Terms & Privacy</a>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Terms & Connditions</h2>
              </div>
              <div class="modal-body">
                <p>privacy policy</p>
                <p>We value the trust you place in us and recognize the importance of secure transactions and information privacy. This Privacy Policy describes how Flipkart Internet Private Limited and its affiliates (collectively “Flipkart, we, our, us”) collect, use, share or otherwise process your personal information through Flipkart website www.flipkart.com, its mobile application, and m-site (hereinafter referred to as the “Platform”).

                  By visiting the Platform, providing your information or availing our product/service, you expressly agree to be bound by the terms and conditions of this Privacy Policy, the Terms of Use and the applicable service/product terms and conditions. If you do not agree, please do not access or use our Platform.
                  </p>
                  <p>1. Collection of Your Information

                    When you use our Platform, we collect and store your information which is provided by you from time to time. In general, you can browse the Platform without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service, product or feature on the Platform.
                    
                  </p>
                    <p>2. Use of Demographic / Profile Data / Your Information

                      We use your personal information to provide the product and services you request. To the extent we use your personal information to market to you, we will provide you the ability to opt-out of such uses. We use your personal information to assist sellers and business partners in handling and fulfilling orders; enhancing customer experience; resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services; inform you about online and offline offers, products, services, and updates; customize and enhance your experience; detect and protect us against error, fraud and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection of information.
                      
                      With your consent, we will have access to your SMS, contacts in your directory, location and device information.</p>
                      <p>3. Cookies

                        We use data collection devices such as "cookies" on certain pages of the Platform to help analyse our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. Cookies do not contain any of your personal information. We offer certain features that are only available through the use of a "cookie". We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are "session cookies," meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline/delete our cookies if your browser permits, although in that case you may not be able to use certain features on the Platform and you may be required to re-enter your password more frequently during a session. Additionally, you may encounter "cookies" or other similar devices on certain pages of the Platform that are placed by third parties. We do not control the use of cookies by third parties. We use cookies from third-party partners such as Google Analytics for marketing and analytical purposes. Google Analytics help us understand how our customers use the site. You can read more about how Google uses your Personal Information here: https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics here: https://tools.google.com/dlpage/gaoptout.
                      </p>
                        </form>
              </div>
            </div>
          
          </div>
    </p>
    
    <p>Already have an account <a href="login1.php" style="color:blue">Login</a>.</p>

    <div class="clearfix">
      <button type="submit" name="submit" class="signupbtn" onclick="phonenumber(document.check.username);ValidateEmail(document.check.mail);allnumericplusminus(document.check.password)">Sign Up</button>
      <a href="index.html">
        <button type="button" class="cancelbtn">Cancel</button>
        </a>
    </div>
  </div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
  <!--1.To validate mobileno-->
  <script>
    function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
    username.setCustomValidity("");
      return true;
  }
  else
  {
    username.setCustomValidity("Not a valid Phone Number");
     return false;
  }
  }
  </script>
  <!--2.To validate Email-->
  <script>
  function ValidateEmail(inputtxt)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
if(inputtxt.value.match(mailformat))
{
mail.setCustomValidity("");
return true;
}
else
{
mail.setCustomValidity("You have entered an invalid email address!");
return false;
}
}
</script>
   <!--3.To validate Password-->
   <script>
    function allnumericplusminus(inp
    uttxt) 
 { 
 var decimal=  /^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
 if(inputtxt.value.match(decimal)) 
 { 
  password.setCustomValidity("");
 return true;
 }
 else
 { 
  password.setCustomValidity('It must contain password between 8 to 15 characters which contain at least one numeric digit, one uppercase and one lowercase letter and one special character like Abc1234@')
 return false;
 }
 }
   </script>
 <!--4.To check Passwords same-->
    <script>
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Passwords Don't Match");
} else {
  confirm_password.setCustomValidity('');
}
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<!--5.To show Password by clicking Eye symbol-->
<script>
  var pwd = document.getElementById('password');
  var eye=document.getElementById('eye');

  eye.addEventListener('click',togglePass);
  function togglePass()
  {
    eye.classList.toggle('active');
    (password.type=='password') ? pwd.type = 'text' :
    password.type='password';
  }
  </script>
  <!--6.To show registration done-->
  <script>
    function validateForm() {
            alert("You're Registered Successfully");
            return true;
        }
    </script>
   </form>
</div>
</div>
</body>
</html>
