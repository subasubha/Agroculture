<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from ftransaction ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['tid'];
$query= " DELETE FROM ftransaction WHERE tid=$id ";
$result=mysqli_query($con,$query);
header("Location:ftransaction_view.php");
?>
