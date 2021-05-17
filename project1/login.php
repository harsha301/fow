<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "account";
// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
if(isset($_POST["username"], $_POST["password"])) 
        {     
            
            $username = $_POST["username"]; 
            $password = $_POST["password"]; 

            $result = mysqli_query($conn,"SELECT username, password FROM signup WHERE username = '".$username."' AND  password = '".$password."'");
            if(mysqli_num_rows($result) > 0 ) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $username; 
                $msg = "Logged in successful!";
                header("Location: ../index.html?msg=".$msg);
            }
            else
            {
                $msg = "Username or Password is Incorrect!";
                header("Location: ../login1.php?msg=".$msg);
            }
    }
?>