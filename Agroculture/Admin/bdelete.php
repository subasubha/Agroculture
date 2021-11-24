<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$sel_query="Select * from buyer ";
$result= mysqli_query($con, $sel_query);
$id=$_REQUEST['bid'];
$query= " DELETE FROM buyer WHERE bid=$id ";
$result=mysqli_query($con,$query);
header("Location:buyer_view.php");
?>
