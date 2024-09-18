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

#mybtn{
	background-color:red;
	font-size:18px;
	font-family:bold;
	color:white;
}
#divc{
	border-radius:0px;
	background-color:skyblue;
}
#cname{
	border:2px solid black;
	
}
#ex{
	border:2px solid black;
	
}
#mc{
	border:2px solid black;
	
}
#ye{
	border:2px solid black;
	
}
#se{
	border:2px solid black;
	
}
#ccode{
	border:2px solid black;
}
#sname{
	border:2px solid black;
}
#tname{
	border:2px solid black;
}
#dname{
	border:2px solid black;
}
#tnam{
	border:2px solid black;
}
#sel{
	border:2px solid black;
}
#tcm{
	border:2px solid black;
}
#tsn{
	border:2px solid black;

}
#tne{
	border:2px solid black;
}
#txta{
	border:2px solid black;
}
#tnab{
	border:2px solid black;
}
#tnpre{
	border:2px solid black;
}
#rad{
	border:2px solid black;
	
}
#radi{
	border:2px solid black;
}
#scode{
	border:2px solid black;
}
#mno{
	border:2px solid black;
}
#da{
	border:2px solid black;
}
#ti{
	border:2px solid black;
}
#sele{
	border:2px solid black;
}
#exyear{
	border:2px solid black;
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
<html>

<head>
<body>

<div id="d1" style="
    margin-top: -170px;
">

<link rel="stylesheet" href="style3.css">
<title>Registration Form2</title>
<div ><br>
<div class="container" id="divc">
<div class="header">
<form method="POST">
<h2 align="center"><u>Registration Form</u></h2><br>
<p align="left">
<center><h2>Format-10</h2></center>
&nbsp&nbsp&nbsp&nbspExam   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <select name="examform" id="ex" required>
	  <option> </option>
	  <option>Winter</option>
	  <option>Summer</option>
	  </select>
&nbsp&nbsp&nbsp Year  &nbsp <input type="text" name="examy" id="exyear" placeholder="eg.2022" required><br><br>
&nbsp&nbsp&nbsp&nbspMaster Code  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <select name="mastercode" id="mc" required>
	  <option> </option>
	  <option>A</option>
	  <option>B</option>
	  <option>C</option>
	  <option>E</option>
	  <option>G</option>
	  <option>I</option>
	  </select><br><br>
&nbsp&nbsp&nbsp&nbspYear/Sem     :
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbspYear: 
      <select name="years" id="ye" required>
	  <option> </option>
	  <option>First Year</option>
	  <option>Second Year</option>
	  <option>Third Year</option>
	  </select>
	  &nbspSem :
	  <select name="semester" id="se" required>
	  <option> </option>
	  <option>1</option>   
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	  <option>6</option>
       </select><br><br>	   
&nbsp&nbsp&nbsp&nbspCourse Name  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="text" name="course" id="cname" required><br><br>
&nbsp&nbsp&nbsp&nbspCourse Code  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="Ccode" id="ccode" required><br><br>
&nbsp&nbsp&nbsp&nbspSubject      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="subject" id="sname" required><br><br> 
&nbsp&nbsp&nbsp&nbspTheory       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="theory" id="tname" required><br><br> 
&nbsp&nbsp&nbsp&nbspDate         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="dt" id="dname" required><br><br> 
&nbsp&nbsp&nbsp&nbspTime         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="time" name="te" id="tnam" required>&nbsp <select name="format" id="sel"><option>AM</option><option>PM</option></select><br><br> 
&nbsp&nbsp&nbsp&nbspTotal Seat numbers<br>
&nbsp&nbsp&nbsp&nbspon Computerized&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="ttm" id="tcm" required><br>
&nbsp&nbsp&nbsp&nbspmark sheet/s<br><br>
&nbsp&nbsp&nbsp&nbspSeat numbers         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="tseat" id="tsn" ><br><br> 
&nbsp&nbsp&nbsp&nbspTotal number of   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="texamine" id="tne" ><br> 
&nbsp&nbsp&nbsp&nbspexaminees<br><br>
&nbsp&nbsp&nbsp&nbspseat numbers of          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="tarea" id="txta" required><br>
&nbsp&nbsp&nbsp&nbspabsent examinees<br><br>
&nbsp&nbsp&nbsp&nbspTotal number of         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="tna" id="tnab"  required><br>
&nbsp&nbsp&nbsp&nbspexaminees absent<br><br>  
&nbsp&nbsp&nbsp&nbspTotal number of          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="tep" id="tnpre" required><br>
&nbsp&nbsp&nbsp&nbspexaminees present<br><br>
<center><h2>Format-06</h2></center>
&nbsp&nbsp&nbsp&nbspSession       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="rad" name="Session" value="Morning" required>Morning
<input type="radio" name="Session" value="Afternoon" id="radi" required>AfterNoon<br><br>
&nbsp&nbsp&nbsp&nbspSubject Code &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="subjectc" id="scode" required><br><br>
&nbsp&nbsp&nbsp&nbspMark Sheet Number&nbsp&nbsp&nbsp&nbsp<input type="text" name="marksheetno" id="mno" required><br><br>
&nbsp&nbsp&nbsp&nbspDate and Time of<br>
&nbsp&nbsp&nbsp&nbspsealing &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate <input type="date" name="Date2" id="da" required>  &nbsp&nbspTime  <input type="time" name="time2" id="ti" required>&nbsp <select name="sel" id="sele"><option>AM</option><option>PM</option></select><br><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<center><input type="submit" name="submit" align="center" id="mybtn"/></center><br><br>

</p>
</div>
</body>
</head>
</form>
</html>
<?php
include "configuration.php";
//$ans=mysqli_connect("localhost","root","","mydatabase1");
if(isset($_POST['submit']))
{
$p=$_POST['examform'];
$x=$_POST['examy'];
$a=$_POST['mastercode'];
$b=$_POST['years'];
$c=$_POST['semester'];
$d=$_POST['course'];
$e=$_POST['Ccode'];
$f=$_POST['subject'];
$g=$_POST['theory'];;
$h=$_POST['dt'];
$i=$_POST['te'];
$q=$_POST['format'];
$j=$_POST['ttm'];
$k=$_POST['tseat'];
$l=$_POST['texamine'];;
$m=$_POST['tarea'];
$n=$_POST['tna'];
$o=$_POST['tep'];
$r=$_POST['Session'];
$s=$_POST['subjectc'];
$t=$_POST['marksheetno'];
$u=$_POST['Date2'];
$v=$_POST['time2'];
$w=$_POST['sel'];
$inser="INSERT INTO `slip`(`exam`,`eyear`,`mcode`, `year`, `sem`, `cname`, `ccode`, `subject`, `theory`, `date`, `time`, `pma`, `totalS`, `Snum`, `totalE`, `Sabs`, `Tabs`, `Tpre`, `session`, `subjectcode`, `marksheetno`, `date2`, `time2`, `amp`) VALUES ('$p','$x','$a','$b','$c','$d','$e','$f','$g','$h','$i','$q','$j','".$k."','$l','".$m."','$n','$o','$r','$s','$t','$u','$v','$w')";
$res=mysqli_query($ans,$inser);
if($res==true)
  {
	echo "<script>alert('Registration Sucessfully!!');</script>";
  
  }
  else
  {
	echo"<script>alert('Registration Unsucessfull!!');</script>";

  }
}
?>
