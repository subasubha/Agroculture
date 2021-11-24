<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$id=$_REQUEST['fid'];
$query= " DELETE FROM farmer WHERE fid=$id ";
$queryy= " DELETE FROM fproduct WHERE fid=$id ";
$result=mysqli_query($con,$query);
$result1=mysqli_query($con,$queryy);
if($result&&$result1)
{
header("Location:view.php");
}
else{
echo "ERROR deleting record:" . $con->error;
}
$con->close();
?>