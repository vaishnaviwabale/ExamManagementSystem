 <?php
include"configuration.php";
error_reporting(0);
?>
 <html>
 <style>
body {
  background: #456;
  font-family: 'Open Sans', sans-serif;
}

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
#anchor{
text-decoration:none;
font-size:15px;
}
 </style>
 <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">!!Change Password!!</h2>

  <form class="login-container" method="POST">
    <p><input type="text" placeholder="Current Username" name="uname" required></p>
    <p><input type="password" placeholder="New Password" name="pas" required></p>
    <p><input type="submit" value="Change Password" name="submit"></p>
	<center><p><a href="adminlogin.php" style='color:blue' id="anchor">Back to login</a></p></center>
  </form>
</div>
</html>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['uname'];
$b=$_POST['pas'];
$query="UPDATE `adminlogin` SET `password`='$b' WHERE username='$a'";
$data=mysqli_query($ans,$query);
if($data)
    {
	
	echo "<script>alert('Password Changed Sucessfully!!');</script>";
    }
	   
else
{
		  echo "<script>alert('Fail to changed password!!');</script>"; 
}
}
?>