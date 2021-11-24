<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from boporders ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['oid'];
$query= " DELETE FROM boporders WHERE oid=$id ";
$result=mysqli_query($con,$query);
header("Location:boporders_view.php");
?>
