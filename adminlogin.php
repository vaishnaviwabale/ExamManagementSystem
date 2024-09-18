<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<style>
html{
    height: 100%;
}
body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#09d5e0, #f707ff);
  }
  .wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: #fff;
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
  }
  .single-div {
    position: relative;
  }
  
  .single-div input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #262626;
	margin-bottom: 30px;
	border: none;
	border-bottom: 2px solid #262626;
	outline: none;
	background: transparent;
}
  .single-div label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #262626;
    pointer-events: none;
    transition: .5s;
  }
  
  .single-div input:focus ~ label,
  .single-div input:valid ~ label {
    top: -20px;
    left: 0;
    color: red;
    font-size: 12px;
  }
  #btn {
	background: #262626;
	text-decoration: none;
	color: #fff;
	padding: 15px 0;
	display: block;
	width:320px;
	font-size:18px;
	text-align: center;
	margin-top: 10%;
}
#anchor{
text-decoration:none;
font-size:19px;
font-family:bold;
}

</style>
<html>
<head>
    <title>LoginPage</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST">
			<center><label style="font-size:20px"><b>Admin Login</b></label></center><br><br>
            <div class="single-div">
			 
              <input type="text" name="uname" id="type" required>
              <label>Your Username</label>
            </div>
            <div class="single-div">
              <input type="password" name="pas" id="type1" required>
              <label>Your Password</label>
            </div>
            <input type="submit" id="btn" value="Login Now" name="Login"><br>
			<center><a href="changepas.php" id="anchor" style="color:blue">change password?</a></center>
        </form>    
    </div>
</body>
</html>
<?php
 include"configuration.php";
 if(isset($_POST['Login']))
{
$a=$_POST['uname'];
$b=$_POST['pas'];
$insert="select * from adminlogin where username='".$a."' AND password='".$b."'";
$res=mysqli_query($ans,$insert);
echo mysqli_num_rows($res);
if(mysqli_num_rows($res)==1)
  {
	$_SESSION['u_name']=$a;
	echo "<script>alert('Login Sucessfully!!');window.location.href='homepage.php';</script>";
  }
else
{	
	echo"<script>alert('Login Failed!!');</script>";
}
}
?>

