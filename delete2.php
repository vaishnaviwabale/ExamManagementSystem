<?php
session_start();
error_reporting(0);
if (count($_SESSION)!== 1)
{
	echo"<script>window.location.href='adminlogin.php';</script>";
}
?>
<?php
include"configuration.php";
$id=$_GET['id2'];
$que="DELETE FROM `slip` WHERE id='$id'";
$data=mysqli_query($ans,$que);
if($data)
{
	echo"<script>alert('Data Deleted Sucessfully!!');window.location.href='viewregistered2.php';</script>";

}
else
	
	{
		echo"<script>alert('Data Not Deleted!!');window.location.href='viewregistered2.php';</script>";

	}
?>