<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from foporders ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['oid'];
$query= " DELETE FROM foporders WHERE oid=$id ";
$result=mysqli_query($con,$query);
header("Location:foporders_view.php");
?>
