<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
     $date = date('Y-m-d H:i:s');
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

    $bid = $_SESSION['id'];
    if(isset($_GET['flag']))
    {
        $pid = $_GET['pid'];

        $sql = "INSERT INTO bmycart (bid,pid,datee)
               VALUES ('$bid', '$pid','$date')";
        $result = mysqli_query($conn, $sql);
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
        <style>
            *{
box-sizing:border-box;
}
table{
position:absolute;
top:20%;
width:100%;
border-collapse:collapse;
background:transparent;
color:rgb(199, 113, 0);
}
table td,table th{
padding:12px 15px;
border:4px solid rgba(0, 0, 0, 0.030);
background-color:rgba(199, 96, 0, 0.041);
border-radius: 10px;
text-align:center;
font-size:16px;
}
table th{
border:4px solid rgba(0, 0, 0, 0.030);
border-radius: 10px;
background-color:rgba(199, 96, 0, 0.568);
color:rgb(255, 233, 192);
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
top:50%;
width:100%;
font-family:sans-serif;
font-weight:bold;
font-size:36px;
}
            body{
                margin:0;
                padding:0;
                font-family: Arial;
                width: 100%;
                background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('nkk.jpg');
                background-size:cover;
            }
            .top_nav{
                position: fixed;
                top: 0;
                left: 0;
                width:100%;
                height: 80px;
                padding: 20px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.6);
            }
            .logo{
                padding: 5px 30px;
                padding-right: 580px ;
                height: 50px;
                float: left;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: 5px;
                text-transform: uppercase;
            }
            .logo a{
                text-decoration: none;
                color:rgb(164, 124, 202)
            }
            .logo a:hover{
                color:rgb(66, 3, 124);
            }
            .top_nav ul{
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .top_nav ul li a{
                line-height: 40px;
                color:#fff;
                padding: 6px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: bold;
                letter-spacing: 1px;
            }
            .top_nav ul li a:hover{
                background: rgb(194, 192, 192);
                color: black;
                border-radius: 6px;
            }
            .top_nav ul li a.active{
                background: #2fe27a;
                color:black;
                font-size: 14px;
                border-radius: 6px;
            }
			.col-md-4{
				margin-left: 15px;
				width:25%;
				display: grid;
				padding: 30px;
				float: left;
			}
            .h1{
                text-align: center;
	            color: rgb(255, 233, 192);
                font-size: 30px;
                padding-top:100px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1.5px;
                -webkit-text-stroke-color: rgb(238, 182, 130);
                letter-spacing: 1px;
            }
			.h2{
                text-align: center;
	            color: rgb(201, 201, 201);
                font-size: 20px;
                margin-bottom:60px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: whitesmoke;
                letter-spacing: 1px;
            }
            .buttonrow{
                display: flex;
            }
            a.but1{
                color: rgba(0, 0, 0, 0.8);
                margin-left: 10px;
                padding: 6px 10px;
                text-decoration: none;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 1px;
                text-transform: uppercase;
                background:  rgba(0, 252, 147, 0.7);
                border-radius: 6px;
            }
            a.but1:hover{
                background: rgb(0, 255, 170);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(0, 255, 170),
                            0 0 10px rgb(0, 255, 170),
                            0 0 15px rgb(0, 255, 170),
                            0 0 20px rgb(0, 255, 170);
            }
            a.but2{
                color: rgba(0, 0, 0, 0.8);
                margin-top: 200px;
                padding: 6px 20px;
                text-decoration: none;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 1px;
                text-transform: uppercase;
                background:  rgba(0, 252, 147, 0.7);
                border-radius: 6px;
            }
            a.but2:hover{
                background: rgb(0, 255, 170);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(0, 255, 170),
                            0 0 10px rgb(0, 255, 170),
                            0 0 15px rgb(0, 255, 170),
                            0 0 20px rgb(0, 255, 170);
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="top_nav">
                <div class="logo"><a href="bmenu.php">AGROCULTURE</a></div>
                <ul>
                    <li><a href="bmenu.php">Home</a></li>
                    <li><a href="bprofile.php">Profile</a></li>
                    <li><a href="bproductMenu.php?n=1">Market</a></li>
                    <li><a class="active" href="bmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
				<div class="h1">
					<h1>MY CART</h1>
		</div>
        <div style="text-align:center; color:pink;"><h2>DELIVERY CHARGE : 40 /-</h2></div>
        <div class="form">
<table>
<thead>
<tr>
<th><strong>Product Name</strong></th>
<th><strong>Product Type</strong></th>
<th><strong>Product Info</strong></th>
<th><strong>Price</strong></th>
<th><strong>Product Image</strong></th>
<th><strong>Action</strong></th>
</tr>
</thead>
<?php
                        $sql = "SELECT * FROM bmycart WHERE bid = '$bid'";
                        $result = mysqli_query($conn, $sql);
                        $total = 0;
                        $gtotal = 0;
						while($row = $result->fetch_array()):
                            $pid = $row['pid'];
                            $sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
                            $result1 = mysqli_query($conn, $sql);
                            $row1 = $result1->fetch_array();
                            $deli = 40;
                            $total = $total + $row1['price'];
                            $gtotal = $total + $deli;
							$picDestination = "images/productImages/".$row1['pimage'];
						?>
<tr>
<td><?php echo $row1["product"]; ?></td>
<td><?php echo $row1["pcat"]; ?></td>
<td><?php echo $row1["pinfo"]; ?></td>
<td>&#8377; <?php echo $row1["price"]; ?></td>
<td><a href="breview.php?pid=<?php echo $row['pid'] ;?>"><img src="<?php echo $picDestination; ?>" alt="" width="200" height="150"></a></td>
<td><a href="bcbdelete.php?oid=<?php echo $row['oid']; ?>" class="but1"><span class="glyphicon glyphicon-shopping-cart">Remove</a></td>
</tr>
<?php endwhile;	?>
<tr>
<td colspan="6" align="right">Total : &#8377; <?php echo number_format($total, 2); ?></td></tr>
<tr>
<td colspan="6" align="right">Total with Delivery Charge : &#8377; <?php echo number_format($gtotal, 2); ?></td>
</tr>
<tr>
<td colspan="6" align="right"><a href="bpayment.php?pid=<?= $pid; ?>" class="but2">Buy Now</a></td>
                        </tr>
</table>
</div>
</section>
</div>
</div>
</body>
</html>