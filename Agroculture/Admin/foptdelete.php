<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from foptransaction ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['tid'];
$query= " DELETE FROM foptransaction WHERE tid=$id ";
$result=mysqli_query($con,$query);
header("Location:foptransaction_view.php");
?>
