<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from boptransaction ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['tid'];
$query= " DELETE FROM boptransaction WHERE tid=$id ";
$result=mysqli_query($con,$query);
header("Location:boptransaction_view.php");
?>
