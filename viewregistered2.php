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
  padding: 0px;
}
#anchor{
text-decoration:none;
color:white;
}
#ancho{
text-decoration:none;
color:white;
}
#anch{
text-decoration:none;
color:white;
}
#butto
{
	background-color:blue;
	font-size:16px;
	font-family:bold;
}
#butt
{
	background-color:blue;
	font-size:16px;
	font-family:bold;
}
#but
{
	background-color:blue;
	font-size:16px;
	font-family:bold;
}
table,td{
	border:1px solid black;
	border-collapse:collapse;
	background-color:white;
	font-size:17px;
}
th{
	padding:10px;
	background-color:black;
	color:white;
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <h1 align="center" style="color:white"><u>DASHBOARD</u></h1><br>
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
<br><br>
<h1 align="center" style="font-size:30px","color:white"><u>Registration Details</u></h1><br>
<body>
<table border="3px" bgcolor="yellow" align="center" width="100%">
<tr >
<th>id</th>
<th>Exam</th>
<th>Year</th>
<th>mcode</th>
<th>year</th>
<th>sem</th>
<th>cname</th>
<th>ccode</th>
<th>subject</th>
<th>theory</th>
<th>date</th>
<th>time</th>
<th>AM/PM</th>
<th>totalS</th>
<th>Snum</th>
<th>totalE</th>
<th>Sabs</th>
<th>Tabs</th>
<th>Tpre</th>
<th>Edit</th>
<th>Delete</th>
<th>Print</th>
</head>
</tr>
<?php
 include "configuration.php";
$inser="SELECT `id`, `exam`,`eyear`,`mcode`, `year`, `sem`, `cname`, `ccode`, `subject`, `theory`, `date`, `time`, `pma`, `totalS`, `Snum`, `totalE`, `Sabs`, `Tabs`, `Tpre` FROM `slip`";
$res=mysqli_query($ans,$inser);
while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['exam'];?></td>
<td><?php echo $row['eyear']; ?></td>
<td><?php echo $row['mcode']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['sem']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['ccode']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['theory']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['time']; ?></td>
<td><?php echo $row['pma'];?></td>
<td><?php echo $row['totalS']; ?></td>
<td><?php echo $row['Snum']; ?></td>
<td><?php echo $row['totalE']; ?></td>
<td><?php echo $row['Sabs']; ?></td>
<td><?php echo $row['Tabs']; ?></td>
<td><?php echo $row['Tpre']; ?></td>
<td ><button id="butto"><a href='update2.php?id2=<?php echo $row['id']?>' id="anchor">Update</a></button></td>
<td ><button id="butt"><a href='delete2.php?id2=<?php echo $row['id'];?>' id="ancho">Delete</a></button></td>
<td ><button id="but"><a href='slip.php?id2=<?php echo $row['id'];?>' id="anch">Print</a></button></td>
<?php } ?>
</table>
</body>
</html>
