<?php
error_reporting(0);
session_start();
if (count($_SESSION)!== 1)
{
	echo"<script>window.location.href='adminlogin.php';</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}
body
{
	background-color:#d5e1df;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  transition: 0.3s;
  
}
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: white;
  color: black;
  padding: 10px 15px;
  border: none;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <h1 align="center" style="color:white">DASHBOARD</h1><br>
      <ul>
	     <li><a href="homepage.php">Home</i><li><br><br>
		 <li><a href="about.php">About us</a><li><br><br>
		 <li><a href="registrationform2.php">Registration form</a><li><br><br>
		 <li><a href="viewregistered2.php">View Format-10</a><li><br><br>
		 <li><a href="viewregistered.php">View Format-06</a><li><br><br>
		 <li><a href="contact.php">Contact us</a><li><br><br>
		 <li><a href="logout.php">Log out</a><li>
	 </ul>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
 </div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color:orange;
  
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: green;
  color: white;
}

.container {
  padding: 0 16px;
  align:center;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
#divc{
   padding-left:150px;
   margin-left:150px;
}
#divcl{
   padding-left:150px;
   width:-100px;
}
#ca{
margin: 8px;
}

</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <h1>!!Exam Management System!!</h1>
  <h2 align="left"  >● The exam management system includes </h2>
  <p align="left">The exam management system is created for purpose of developing the Format-06 and Format-10 Module.Format-06 module is nothing but the packing slip which is attached to the bunch of answersheet.It includes details of exam like institute code and name,date,session,course,master code,subject name and code,year,semester,marksheet number,number of ansersheet. 
  Next is format-10 module it includes the total number of student present in exam and also total number of absent student in exam and seat numbers of absent students and other content is similar to format-06 module. </p><br>
  <h2 align="left"  >● Purpose of this system </h2>
  <p align="left">The purpose of this system is to performing the the work on software instead of manually.We tried to done the work of exam department using software and reducing the effort which is required for manual work. And also aim to minimizes the time and mental stress of exam department teachers.In this generation progress is very important so that's why we also doing progress in exam department for adopting the new technique</p><br>
<h2 align="left"  >● How to handle this system ? </h2>
<p align="left">Steps:<br>1.Enter the correct username and password to login into the system.<br>2.In admin login page there is also option to change password click on that link and in that enter current username and new password.<br>3.After login successfully then homepage appear on the screen.<br>4.And also the dashboard is available on the screen and it has various options to move from one page to another.<br>5.In dashboard the registration tab is available then click on registration form and in that filled the entire form correctly.<br>6.In dashboard another tab is view format-10 and format-06 when we click on it we will display the all registered data.In both format-06 and format format-10 tab there is another option that is update,delete and print.<br>7.After click on update button we can update the data.<br>8.After click on delete button data willbe deleted.<br>9.After click on print button we will get the print of format-06 and format-10 module.<br>10.Log out from the system there is option of log out after clicking on log out button we are log out.  </p>  
</div>

<h2 style="text-align:center">**Our Team**</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <center><h3>Swamini Bhand</h3></center>
        <p class="title">Coder</p>
        <p>I performed all the coding part for developing this system.</p>
        <p>Email : swaminibhand@gmail.com</p>
        <p>Contact : 9975046232</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <center><h3>Khedkar Pallavi</h3></center>
        <p class="title">Coder</p>
        <p>I also performed all the coding part for developing this system.</p>
        <p>Email : khedkarpallavi2005@gmail.com</p>
        <p>Contact : 9309866819</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <center><h3>Kshirsagar Vaishnavi</h3></center>
        <p class="title">Designer</p>
        <p>All Designing which is required to developed this system was done by me.</p>
        <p>Email : vskshirsagar26@gmail.com</p>
        <p>Contact : 9284290433</p>
      </div>
    </div>
  </div>
  <div class="column" id="divc" >
    <div class="card" id="ca">
      <div class="container" >
        <center><h3>Bharati Pokale</h3></center>
        <p class="title">UI designer</p>
        <p>All the user interface of this system is done by me.</p>
        <p>Email : bharatipokale8@gmail.com</p>
        <p>Contact : 9615161444</p>
      </div>
    </div>
  </div>
  <div class="column" id="divcl">
    <div class="card" id="ca">
      <div class="container" >
        <center><h3>Vaishnavi Wabale</h3></center>
        <p class="title">UI designer</p>
        <p>I am also involving to make the system more interactive.</p>
        <p>Email : vaishnaviwabale68@gmail.com</p>
        <p>Contact : 9860075327</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>