<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from feedback ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['mid'];
$query= " DELETE FROM feedback WHERE mid=$id ";
$result=mysqli_query($con,$query);
header("Location:fbview.php");
?>