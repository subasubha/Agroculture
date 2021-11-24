<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from borders ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['oid'];
$query= " DELETE FROM borders WHERE oid=$id ";
$result=mysqli_query($con,$query);
header("Location:borders_view.php");
?>
