<!DOCTYPE html>
<html>
<head>
<style type="text/css">
*{
box-sizing:border-box;
}
body{
    background-color:pink;
}
table{
position:absolute;
top:20%;
width:100%;
border-collapse:collapse;
background-color: rgb(255, 192, 245);
}
table td,table th{
padding:12px 15px;
border:1px solid rgb(216, 155, 165);
text-align:center;
font-size:16px;
}
table th{
background-color:rgb(255, 0, 140);
color:#FFFFFF;
}
table body tr:nth-child(even){
background-color:#f5f5f5;
}
@media(max-width=500px){
table thead{
display:none;
}
table,table tbody,table tr,table td{
display:block;
width:100%;
}
table tr{
margin-bottom:15px;
}
table td{
text-align:right;
padding-left:50%;
text-align:right;
position:relative;
}
table td::before{
content:attr(data-label);
position:absolute;
left:0;
width:50%;
padding-left:15px;
font-size:15px;
font-weight:bold;
}
}
.form{
position:absolute;
top:20%;
left:2%;
width:1310px;
font-family:sans-serif;
font-weight:bold;
font-size:36px;
}
a{
text-decoration:none;
}
.btn1{
font:"Roboto",sans-serif;
text-transform:uppercase;
height:40px;
width:70px;
padding:6.5px;
background-color:#39BF3D;
border:0;
text-decoration:none;
border-radius:18%;
text-align:center;
overflow:hidden;
color:#FFFFFF;
cursor:pointer;
}
.btn2{
font:"Roboto",sans-serif;
text-transform:uppercase;
height:40px;
width:70px;
cursor:pointer;
padding:6.5px;
background-color:#E23623;
border:0;
font-size:13px;
text-decoration:none;
border-radius:18%;
text-align:center;
overflow:hidden;
color:#FFFFFF;
}
h2{
text-align:center;
font-family:"Roboto",sans-serif;
}
</style>
<meta  charset="utf-8">
<title>Agroculture.com/Farmers Products</title>
</head>

<body>
<h2> Welcome To Manage The Details Of Products Section</h2>
<a href="panel.php"><button class="btn2">Back</button></a>
<a href="logout.php"><button class="btn2">Logout</button></a>
<div class="form">
<table>
<thead>
<tr>
<th><strong>S.NO</strong></th>
<th><strong>Product ID</strong></th>
<th><strong>Farmer ID</strong></th>
<th><strong>Product Name</strong></th>
<th><strong>Product Category</strong></th>
<th><strong>Product Information</strong></th>
<th><strong>Price</strong></th>
<th><strong>Product Image</strong></th>
<th><strong>Delete</strong></th>

</tr>
</thead>
<tbody>
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$count=1;
$sel_query="Select * from fproduct ";
$result= mysqli_query($con, $sel_query);

while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td data-label="S.NO" align="center"><?php echo $count; ?> </td>
<td data-label="Product ID" align="center"><?php echo $row["pid"]; ?> </td>
<td data-label="Farmer ID" align="center"><?php echo $row["fid"]; ?> </td>
<td data-label="Product Name" align="center"><?php echo $row["product"]; ?> </td>
<td data-label="Product Category" align="center"><?php echo $row["pcat"]; ?> </td>
<td data-label="Product Information" align="center"><?php echo $row["pinfo"]; ?> </td>
<td data-label="Price" align="center"><?php echo $row["price"]; ?> </td>
<td data-label="Product Image" align="center"><img src="<?php echo $picDestination = "productImages/".$row['pimage'];?>" alt="" width="200" height="150" > </td>
<td data-label="Delete" align="center"><a href="pdelete.php?pid=<?php echo $row['pid']; ?> "><button class="btn2">Delete</button></a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
