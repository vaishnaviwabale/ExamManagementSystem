<?php 
include "configuration.php";
$id=$_GET['id1'];
$insert="SELECT * FROM `slip` WHERE id='$id'";
$res=mysqli_query($ans,$insert);
$result=mysqli_fetch_assoc($res);
?>
<?php
session_start();
error_reporting(0);
if (count($_SESSION)!== 1)
{
	echo"<script>window.location.href='adminlogin.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#d1{
	width:1360px;height:800px;
	overflow-x:hidden;
  }
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
  padding: 10px;
}
#divc{
	border-radius:0px;
	background-color:skyblue;
}
#mybtn{
	background-color:red;
	font-size:18px;
	font-family:bold;
	color:white;
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
		 <li><a href="adminlogin.php">Log out</a><li>
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
<html>
<head>
<body>
<div id="d1" style="
    margin-top: -173px;
">
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="css/all.css">
<title>updation Form</title>
<div class="container" id="divc"><br>
<h1 align="center"><u>Updation Form</u></h1>
<div class="header">
<form method="POST">
<p align="left">
&nbsp&nbsp&nbsp&nbspDate         :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php 
   echo date('d-m-y');
   ?><br><br>
&nbsp&nbsp&nbsp&nbspSession      : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Session" value="Morning" 
  <?php
           if($result['session']=='Morning' )
		 {
			 echo"checked";
		 }
  ?>>Morning
<input type="radio" name="Session" value="Afternoon"
<?php
        if($result['session']=='Afternoon' )
		 {
			 echo"checked";
		 }
?>>AfterNoon<br><br>
&nbsp&nbsp&nbsp&nbspCourse       : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="course" id="course1" value="<?php echo $result['cname']?>"><br><br>
&nbsp&nbsp&nbsp&nbspMaster Code  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="mastercode">
	  <option value="A"
	    <?php 
  if($result['mcode']=='A' )
  {
	  echo "selected";
  }
  ?>>
  A</option>
	   <option value="B"
	    <?php 
  if($result['mcode']=='B' )
  {
	  echo "selected";
  }
  ?>>
  B</option>
	   <option value="C"
	    <?php 
  if($result['mcode']=='C' )
  {
	  echo "selected";
  }
  ?>>
  C</option>
   <option value="E"
	    <?php 
  if($result['mcode']=='E' )
  {
	  echo "selected";
  }
  ?>>
  E</option>
   <option value="G"
	    <?php 
  if($result['mcode']=='G' )
  {
	  echo "selected";
  }
  ?>>
  G</option>
   <option value="I"
	    <?php 
  if($result['mcode']=='I' )
  {
	  echo "selected";
  }
  ?>>
  I</option>
	  </select><br><br>
&nbsp&nbsp&nbsp&nbspSubject Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="subject" id="sname" value="<?php echo $result['subject']?>"><br><br>
&nbsp&nbsp&nbsp&nbspYear/Sem     :
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspyear: 
      <select name="year">
	  <option value="First Year"
	    <?php 
  if($result['year']=='First Year' )
  {
	  echo "selected";
  }
  ?>>
  First Year</option>
	   <option value="Second Year"
	    <?php 
  if($result['year']=='Second Year' )
  {
	  echo "selected";
  }
  ?>>
  Second Year</option>
	   <option value="Third Year"
	    <?php 
  if($result['year']=='Third Year' )
  {
	  echo "selected";
  }
  ?>>
  Third Year</option>
	  </select>
	  &nbspSem :
	  <select name="sem">
	  <option value="1"
	    <?php 
  if($result['sem']=='1' )
  {
	  echo "selected";
  }
  ?>>
  1</option>
  <option value="2"
	    <?php 
  if($result['sem']=='2' )
  {
	  echo "selected";
  }
  ?>>
  2</option>
  <option value="3"
	    <?php 
  if($result['sem']=='3' )
  {
	  echo "selected";
  }
  ?>>
  3</option>
  <option value="4"
	    <?php 
  if($result['sem']=='4' )
  {
	  echo "selected";
  }
  ?>>
  4</option>
  <option value="5"
	    <?php 
  if($result['sem']=='5' )
  {
	  echo "selected";
  }
  ?>>
  5</option>
  <option value="6"
	    <?php 
  if($result['sem']=='6' )
  {
	  echo "selected";
  }
  ?>>
  6</option>
	  </select><br><br>		 
&nbsp&nbspSubject Code : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="subjectc" id="scode" value="<?php echo $result['subjectcode']?>"><br><br>
&nbsp&nbspMark Sheet Number : <input type="text" name="marksheetno" id="mno" value="<?php echo $result['marksheetno']?>"><br><br>
&nbsp&nbspDate and Time of<br>
&nbsp&nbspsealing :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate :<input type="date" name="Date1" value="<?php echo $result['date2']?>">  &nbsp&nbspTime :<input type="time" name="time1" value="<?php echo  $result['time2'] ?>" required>
      <select name="ampm">
	  <option value="AM"
	    <?php 
  if($result['amp']=='AM' )
  {
	  echo "selected";
  }
  ?>>
  AM</option>
	   <option value="PM"
	    <?php 
  if($result['amp']=='PM' )
  {
	  echo "selected";
  }
  ?>>
  PM</option></select><br><br><br>
  <center><br><input type="submit" name="submit" value="update" align="center" id="mybtn"/><br><br>
</center></p>
</div>
</body>
</head>
</html>
<?php
include "configuration.php";
//$ans=mysqli_connect("localhost","root","","mydatabase1");
if(isset($_POST['submit']))
{
$d=$_POST['Session'];
$e=$_POST['course'];
$f=$_POST['mastercode'];
$g=$_POST['subject'];
$h=$_POST['year'];
$i=$_POST['sem'];
$j=$_POST['subjectc'];
$k=$_POST['marksheetno'];
$m=$_POST['Date1'];
$n=$_POST['time1'];
$o=$_POST['ampm'];
$insert="UPDATE `slip` SET `session`='$d',`mcode`='$f',`year`='$h',`sem`='$i',`cname`='$e',`subject`='$g',`subjectcode`='$j',`marksheetno`='$k',`date2`='$m',`time2`='$n',`amp`='$o' WHERE id='$id'";
$res=mysqli_query($ans,$insert);
echo $res;
if($res==true)
  {
    echo"<script>alert('Update Sucessfully!!');window.location.href='viewregistered.php';</script>";

  }
  else
  {
	echo"<script>alert('Not Updated!!');window.location.href='viewregistered.php';</script>";

  }
}
?>
