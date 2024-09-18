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
$insert="SELECT * FROM `slip` WHERE id='$id'";
$res=mysqli_query($ans,$insert);
$resul=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<style>
table{
	
	height:100%;
	width:100%;
	
}
#sabs
{
	height:45px;
	width:0px;
}
#sabsr{
	height:45px;
	width:0px;
}
#sabss{
	height:45px;
	width:0px;
}
fieldset {
    display: block;
    margin-inline-start:200px;
    margin-inline-start:10px;
    margin-inline-end: 0px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.25em;
    padding-inline-end: 0.45em;
    padding-block-end: 0.300em;
    min-inline-size: min-content;
    border-width: 5px!important;
    border-style: groove;
    border-color: rgb(192, 192, 192);
    border-image: initial;
}

</style>
<fieldset id="fs">
<head>

	<title>FORMAT NO. 10</title>
	<h2><u>FORMAT NO. 10</u></h2>
	<label style="font-size:20px">Format of Attendance Report "A"</label>
	<center>
	<h2 >Maharashtra State Board of Technical Education, Mumbai</h2>
	<h3>Exam :&nbsp<?php echo $resul['exam'] ?>&nbsp<?php echo $resul['eyear'] ?></h3>
	<h2>ATTENDANCE   REPORT  "A"</h2>
</center>
	<form>
		<h4>&nbsp&nbsp&nbsp&nbspName of Institute : GOVT.POLY.AHMEDNAGAR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Institute Code : 0130</h4> 
	<label>&nbsp&nbsp&nbsp&nbsp<b>Master Code &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp          :</b>&nbsp<?php echo $resul['mcode']?></label><br>
		<label>&nbsp&nbsp&nbsp&nbsp<b>Sem./Year &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</b>&nbsp<?php echo $resul['sem'] ?>/<?php echo $resul['year'] ?></label><br>
			
		<label>&nbsp&nbsp&nbsp&nbsp<b>Course Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp<?php echo $resul['cname']?></label>
			<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Course Code :</b>&nbsp<?php echo $resul['ccode'] ?></label><br>
			
		<label>&nbsp&nbsp&nbsp&nbsp<b>Subject &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp<?php echo $resul['subject'] ?></label><br>
		<label>&nbsp&nbsp&nbsp&nbsp<b>Theory &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp<?php echo $resul['theory'] ?></label><br>
		<label>&nbsp&nbsp&nbsp&nbsp<b>Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp<?php echo date('d-m-Y',strtotime($resul['date'])); ?></label>
		<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Time :</b>&nbsp<?php echo $resul['time'] ?>&nbsp<?php echo $resul['pma'] ?></label><br>
	</form>	
<br>

	<table border="4px ">
		<tr><th rowspan="2">Total Seat numbers<br> on Computerized</br> mark sheet/s <br>1</th>
			<th colspan="2">Additional examinees by<br> the Institute </th>
			<th colspan="2">Examinees absent (as per <br>computerized seat numbers<br>& addtional seat numbers) </th>
			<th rowspan="2">Total numbers of<br> examinees present <br>6</th></tr>
		<tr>
			<th>Seat<br> numbers <br>2</th>
      		<th>Total number <br>of examinees <br>3</th>
      		<th>Seat Numbers of absent examinees<br>4</th>
      		<th >Total number<br> of examinees <br>absent<br>5</th></tr>
      		<tr><td><?php echo $resul['totalS'] ?></td>
      			<td><?php echo $resul['Snum'] ?></td>
      			<td><?php echo $resul['totalE'] ?></td>
      			<td id="sabs"><?php echo $resul['Sabs'] ?></td>
      			<td><?php echo $resul['Tabs'] ?></td>
      			<td><?php echo $resul['Tpre'] ?></td></tr>
      		<tr><td></td>
      			<td></td>
      			<td></td>
      			<td id="sabsr"></td>
      			<td></td>
      			<td></td></tr>
      		<tr><td></td>
      			<td></td>
      			<td></td>
      			<td id="sabss"></td>
      			<td></td>
				<td></td></tr>

	</table>
</head>
<body>
 <p >
 	Examination supervisor <br>
 	&nbsp&nbsp&nbsp&nbspNotes : <br>
 	&nbsp&nbsp&nbsp&nbsp1. Report to be prepared in duplicate.  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOfficer-in-Charge(Examination) <br>
 	&nbsp&nbsp&nbsp&nbsp2.One copy should be attached answer books bundle.<br>
 	&nbsp&nbsp&nbsp&nbsp3.One copy should be retained at the Institute.<br>
 	&nbsp&nbsp&nbsp&nbsp4.Total of columns 1 & 3 should be equal to total of columns 5 & 6.<br>
 	&nbsp&nbsp&nbsp&nbsp5. Figure in columns 6 must tally with the total number of answer books in the bundle.<br>
 	&nbsp&nbsp&nbsp&nbsp6. Strike off whichever is not applicable.
 </p>
 <input type="button" name="btn" id="btn" value="print" onclick="printpage()"/ >
 </fieldset>
 <script>
   function printpage()
   {
	  var printbutton=document.getElementById("btn");
	  
	  printbutton.style.visibility='hidden';
	  
	  window.print();
	  printbutton.style.visibility='visible';
   }
   
</script>
</body>
</html>