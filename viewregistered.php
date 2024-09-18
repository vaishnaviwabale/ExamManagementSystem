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
	padding:6px;
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
<table  align="center" bgcolor="pink" width="100%">
<tr id="heading">
<th>id</th>
<th>Date</th>
<th>Session</th>
<th>Course</th>
<th>MasterCode</th>
<th>SubjectName</th>
<th>year</th>
<th>sem</th>
<th>SubjectCode</th>
<th>MarkSheetNumber</th>
<th>No.of Answersheet</th>
<th>Date1</th>
<th>Time</th>
<th>AM/PM</th>
<th>Edit</th>
<th>Delete</th>
<th>Print</th>
</head>
</tr>
<?php
 include "configuration.php";
$insert="SELECT `id`,`mcode`, `year`, `sem`, `cname`, `subject`,`Tpre`, `session`, `subjectcode`, `marksheetno`, `date2`, `time2`, `amp` FROM `slip`";
//echo $insert;
$res=mysqli_query($ans,$insert);
while($row=mysqli_fetch_assoc($res)){
?>
<tr >
<td><?php echo $row['id'];?></td>
<td><?php echo date('d-m-y');?></td>
<td><?php echo $row['session']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['mcode']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['sem']; ?></td>
<td><?php echo $row['subjectcode']; ?></td>
<td><?php echo $row['marksheetno']; ?></td>
<td><?php echo $row['Tpre']; ?></td>
<td><?php echo $row['date2']; ?></td>
<td><?php echo $row['time2']; ?></td>
<td><?php echo $row['amp']; ?></td>
<td ><button id="butto"><a href='update4.php?id1=<?php echo $row['id']?>' id="anchor">Update</a></button></td>
<td ><button id="butt"><a href='delete1.php?id1=<?php echo $row['id'];?>'id="ancho">Delete</a></button></td>
<td ><button id="but"><a href='packings.php?id1=<?php echo $row['id'];?>' id="anch">Print</a></button></td>
<?php } ?>
</table>
</body>
</html>
</html>
