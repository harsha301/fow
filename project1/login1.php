<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<title>Login</title>
<body>
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
      <form action="login.php" name="check" method="POST" onsubmit="return validateForm()">
  <div id="div1" id="div2"  class="container">
  <?php
      if(isset($_GET['msg'])) echo $_GET['msg']
      ?>
      <h1>Login</h1>
    <p>Please fill in this form to Login.</p>
    <br>
    <label for="username"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter username" id="username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>
    <label>
      <input type="checkbox" onclick="myFunction()">Show password<br> <br>
    </label>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    
    <p>New User Create a Account  <a href="signuppage.php" style="color:blue"> Sign-up?</a></p><br>
    

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit" onclick="phonenumber(document.check.username)">Login</button>

      <a href="home.html">
        <button type="button" class="cancelbtn">Cancel</button>
        </a>
        <div class="psw"><a href="forget_pwd.html" style="color: blue;">Forgot password?</a></div>
    
    </div>
  </div>

</div>
 <!--1.To show password-->
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
 <!--2.To validate mobileno-->
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
</form>
</body>
</html>