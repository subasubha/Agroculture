<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from fproduct ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['pid'];
$query= " DELETE FROM fproduct WHERE pid=$id ";
$result=mysqli_query($con,$query);
header("Location:fproduct_view.php");
?>