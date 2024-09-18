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
$id=$_GET['id1'];
$insert="SELECT * FROM `slip` WHERE id='$id'";
$res=mysqli_query($ans,$insert);
$result=mysqli_fetch_assoc($res);
?>
<html>
<style>
fieldset {
    display: block;
    margin-inline-start:100px;
    margin-inline-start:10px;
    margin-inline-end: 0px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.45em;
    padding-inline-end: 0.25em;
    padding-block-end: 0.300em;
    min-inline-size: min-content;
    border-width: 5px!important;
    border-style: groove;
    border-color: rgb(192, 192, 192);
    border-image: initial;
}

</style>
<fieldset>
&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp <input id="printpage" type="button" value="Print" onclick="printpage()"/>
<script>
   function printpage()
   {
	  var printbutton=document.getElementById("printpage");
	  
	  printbutton.style.visibility='hidden';
	  
	  window.print();
	  printbutton.style.visibility='visible';
   }
   
</script>
<h2><u>FORMAT  NO.6</u></h2> 
<h1 &nbsp &nbsp &nbsp&nbsp    align="center"><b><u> P&nbspA&nbspC&nbspK&nbspI&nbspN&nbspG&nbsp&nbsp&nbsp&nbspS&nbspL&nbspI&nbspP </u></b></h1><br><br>
<h3>Institute (Examination Centre) Code No&nbsp.0130</h3>
<label style="font-size:18px"><b>Date&nbsp:</b>&nbsp<?php echo date('d-m-Y');?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label style="font-size:18px"><b>Session&nbsp:</b>&nbsp<?php echo $result['session'] ?></label><br><br>
<label style="font-size:18px"><b>Course&nbsp:</b>&nbsp<?php echo $result['cname'] ?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label style="font-size:18px"><b>Master Code&nbsp:</b>&nbsp<?php echo $result['mcode'] ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></label><br><br>
<label style="font-size:18px"><b>Subject Name&nbsp:</b>&nbsp<?php echo $result['subject'] ?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label style="font-size:18px"><b>Year/Sem&nbsp:</b>&nbsp<?php echo $result['year'] ?>/<?php echo $result['sem'] ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label><br><br>
<label style="font-size:18px"><b>Subject Code No&nbsp:</b>&nbsp<?php echo $result['subjectcode'] ?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label style="font-size:18px"><b>Mark Sheet Number/s&nbsp:</b>&nbsp<?php echo $result['marksheetno'] ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></label><br><br>
<label style="font-size:18px"><b>Number of answer books in this packet&nbsp:</b>&nbsp<?php echo $result['Tpre'] ?></label><br><br>
<label style="font-size:18px"><b>Date And Time of Sealing&nbsp:&nbspDate:</b>&nbsp<?php echo date('d-m-Y',strtotime($result['date2'])); ?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label style="font-size:18px"><b>Time&nbsp:</b>&nbsp<?php echo $result['time2'] ?>&nbsp<?php echo $result['amp']?></label><br><br><br><br>

<h3 style="
    line-height: 0.2;
">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp Signature of &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Signature of&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Signature of</h3>
<h3 style="
    line-height: 0.2;
">&nbsp &nbsp &nbsp &nbsp &nbsp &nbspSealing Supervisor &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Officer-In-Charge&nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Controller of Examination</h3>
<br>
</html> 
 