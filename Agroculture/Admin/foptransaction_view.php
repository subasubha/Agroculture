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
width:99%;
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
<title>Agroculture.com/Farmers Delivery Details(OP)</title>
</head>

<body>
<h2> Welcome To Manage The Delivery Details Of Farmers Section (Online Payment)</h2>
<a href="panel.php"><button class="btn2">Back</button></a>
<a href="logout.php"><button class="btn2">Logout</button></a>
<div class="form">
<table>
<thead>
<tr>
<th><strong>S.NO</strong></th>
<th><strong>ORDER ID</strong></th>
<th><strong>Farmer ID</strong></th>
<th><strong>Order Date</strong></th>
<th><strong>Cost</strong></th>
<th><strong>Farmer Name</strong></th>
<th><strong>City</strong></th>
<th><strong>Email</strong></th>
<th><strong>Mobile</strong></th>
<th><strong>Pincode</strong></th>
<th><strong>Address</strong></th>
<th><strong>Delete</strong></th>

</tr>
</thead>
<tbody>
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'agroculture');
$count=1;
$sel_query="Select * from foptransaction ";
$result= mysqli_query($con, $sel_query);
while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td data-label="S.NO" align="center"><?php echo $count; ?> </td>
<td data-label="ORDER ID" align="center"><?php echo $row["tid"]; ?> </td>
<td data-label="Farmer ID" align="center"><?php echo $row["fid"]; ?> </td>
<td data-label="Product ID" align="center"><?php echo $row["dod"]; ?> </td>
<td data-label="Cost" align="center"><?php echo $row["cost"]; ?> </td>
<td data-label="Farmer Name" align="center"><?php echo $row["name"]; ?> </td>
<td data-label="City" align="center"><?php echo $row["city"]; ?> </td>
<td data-label="Email" align="center"><?php echo $row["email"]; ?> </td>
<td data-label="Mobile" align="center"><?php echo $row["mobile"]; ?> </td>
<td data-label="Pincode" align="center"><?php echo $row["pincode"]; ?> </td>
<td data-label="Address" align="center"><?php echo $row["addr"]; ?> </td>
<td data-label="Delete" align="center"><a href="foptdelete.php?tid=<?php echo $row['tid']; ?> "><button class="btn2">Delete</button></a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>