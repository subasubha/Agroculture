<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from forders ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['oid'];
$query= " DELETE FROM forders WHERE oid=$id ";
$result=mysqli_query($con,$query);
header("Location:forders_view.php");
?>
