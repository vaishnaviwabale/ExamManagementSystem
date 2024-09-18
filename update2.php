<?php
session_start();
error_reporting(0);
if (count($_SESSION)!== 1)
{
	echo"<script>window.location.href='adminlogin.php';</script>";
}
?>
<?php 
include "configuration.php";
$id=$_GET['id2'];
$inser="SELECT * FROM `slip` WHERE id='$id'";
$res=mysqli_query($ans,$inser);
$result=mysqli_fetch_assoc($res);
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
&nbsp&nbsp&nbsp&nbspExam  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 <select name="examf" required>
	  <option> </option>
	  <option value="Winter" <?php if($result['exam']=='Winter') 
	  {
		  echo "selected";
	  }
	  ?>>Winter</option>
	  <option value="Summer" <?php if($result['exam']=='Summer') 
	  {
		  echo "selected";
	  }
	  ?>>Summer</option></select>
&nbsp&nbsp&nbsp&nbsp Year : <input type="text" name="exyear" id="examy" value="<?php echo  $result['eyear'] ?>" required><br><br>
&nbsp&nbsp&nbsp&nbspMaster Code  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 <select name="mastercode" required>
	  <option> </option>
	  <option value="A" <?php if($result['mcode']=='A') 
	  {
		  echo "selected";
	  }
	  ?>>A</option>
	  <option value="B" <?php if($result['mcode']=='B') 
	  {
		  echo "selected";
	  }
	  ?>>B</option>
	  <option value="C" <?php if($result['mcode']=='C') 
	  {
		  echo "selected";
	  }
	  ?>>C</option>
	  <option value="E" <?php if($result['mcode']=='E') 
	  {
		  echo "selected";
	  }
	  ?>>E</option>
	  <option value="G" <?php if($result['mcode']=='G') 
	  {
		  echo "selected";
	  }
	  ?>>G</option>
	  <option value="I" <?php if($result['mcode']=='I') 
	  {
		  echo "selected";
	  }
	  ?>>I</option>
	  </select><br><br>
&nbsp&nbsp&nbsp&nbspYear/Sem     :
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbspyear: 
      <select name="years" required>
	  <option> </option>
	  <option value="First Year"
	    <?php 
   if($result['year']=='First Year' )
    {
	  echo "selected";
    }
  ?>>First Year</option>
	   <option value="Second Year"
	    <?php 
  if($result['year']=='Second Year' )
  {
	  echo "selected";
  }
  ?>>Second Year</option>
	   <option value="Third Year"
	    <?php 
  if($result['year']=='Third Year' )
  {
	  echo "selected";
  }
  ?>>Third Year</option> </select>
	  &nbspSem :
	  <select name="semester" required>
	  <option> </option>
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
&nbsp&nbsp&nbsp&nbsp Course Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="course" id="cname" value="<?php echo  $result['cname'] ?>" required><br><br>
&nbsp&nbsp&nbsp&nbsp Course Code : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="Ccode" id="ccode" value="<?php echo  $result['ccode'] ?>" required><br><br>
&nbsp&nbsp&nbsp&nbsp Subject     : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="subject" id="sname" value="<?php echo  $result['subject'] ?>" required><br><br> 
&nbsp&nbsp&nbsp&nbsp Theory      : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="theory" id="tname" value="<?php echo  $result['theory'] ?>" required><br><br> 
&nbsp&nbsp&nbsp&nbsp Date        : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="dt" id="dname" value="<?php echo  $result['date'] ?>" required><br><br> 
&nbsp&nbsp&nbsp&nbsp Time        : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="time" name="te" id="tname" value="<?php echo  $result['time'] ?>" required><select name="ampm" required>
	  <option> </option>
	  <option value="AM" <?php if($result['pma']=='AM') 
	  {
		  echo "selected";
	  }
	  ?>>AM</option>
	  <option value="PM" <?php if($result['pma']=='PM') 
	  {
		  echo "selected";
	  }
	  ?>>PM</option></select><br> 
&nbsp&nbsp&nbsp&nbsp Total Seat numbers<br>
&nbsp&nbsp&nbsp&nbsp on Computerized:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="ttm" id="tcm" value="<?php echo  $result['totalS'] ?>" required><br>
&nbsp&nbsp&nbsp&nbsp mark sheet/s<br><br>
&nbsp&nbsp&nbsp&nbsp Seat numbers        : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="tseat" id="tsn" value="<?php echo  $result['Snum'] ?>"><br><br> 
&nbsp&nbsp&nbsp&nbsp Total number of  : &nbsp&nbsp&nbsp&nbsp <input type="text" name="texamine" id="tne" value="<?php echo  $result['totalE'] ?>"><br> 
&nbsp&nbsp&nbsp&nbsp examinees<br><br>
&nbsp&nbsp&nbsp&nbsp seat numbers of         : &nbsp&nbsp&nbsp <input type="text" name="tarea" id="txta" value="<?php echo  $result['Sabs'] ?>" required><br>
&nbsp&nbsp&nbsp&nbsp absent examinees<br><br>
&nbsp&nbsp&nbsp&nbsp Total number of        : &nbsp&nbsp&nbsp <input type="text" name="tna" id="tnab" value="<?php echo  $result['Tabs'] ?>" required><br>
&nbsp&nbsp&nbsp&nbsp examinees absent<br><br>  
&nbsp&nbsp&nbsp&nbsp Total number of         : &nbsp&nbsp&nbsp <input type="text" name="tep" id="tnpre" value="<?php echo  $result['Tpre'] ?>" required><br>
&nbsp&nbsp&nbsp&nbsp examinees present<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="update" name="submit" align="center" id="mybtn"/><br><br>
 
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
$p=$_POST['examf'];
$r=$_POST['exyear'];
$a=$_POST['mastercode'];
$b=$_POST['years'];
$c=$_POST['semester'];
$d=$_POST['course'];
$e=$_POST['Ccode'];
$f=$_POST['subject'];
$g=$_POST['theory'];;
$h=$_POST['dt'];
$i=$_POST['te'];
$q=$_POST['ampm'];
$j=$_POST['ttm'];
$k=$_POST['tseat'];
$l=$_POST['texamine'];;
$m=$_POST['tarea'];
$n=$_POST['tna'];
$o=$_POST['tep'];
$insert="UPDATE `slip` SET `exam`='$p',`eyear`='$r',`mcode`='$a',`year`='$b',`sem`='$c',`cname`='$d',`ccode`='$e',`subject`='$f',`theory`='$g',`date`='$h',`time`='$i',`pma`='$q',`totalS`='$j',`Snum`='$k',`totalE`='$l',`Sabs`='$m',`Tabs`='$n',`Tpre`='$o' WHERE id='$id'";
$res=mysqli_query($ans,$insert);
echo $res;
if($res==true)
  {
    echo"<script>alert('Update Sucessfully!!');window.location.href='viewregistered2.php';</script>";

  }
  else
  {
	echo"<script>alert('Not Updated!!');window.location.href='viewregistered2.php';</script>";

  }
}
?>
