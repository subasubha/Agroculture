<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");
    $pid = $_GET['pid'];
    $fid = $_SESSION['id'];
    ?>
<!DOCTYPE html>
<html>
    <head>
	<title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
        <style>
            body{
                margin:0;
                padding:0;
                font-family: Arial;
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
                padding-right: 410px ;
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
            .backg{
                width: 100%;
                height: 100vh;
                background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('cg.jpg');
                background-size: cover;
                background-position: bottom: 1px;
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
	            color: rgb(201, 201, 201);
                font-size: 30px;
                padding-top:120px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1.5px;
                -webkit-text-stroke-color: whitesmoke;
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
                margin-left: 50px;
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
                <div class="logo"><a href="fmenu.php">AGROCULTURE</a></div>
                <ul>
                    <li><a href="fmenu.php">Home</a></li>
                    <li><a href="fprofile.php">Profile</a></li>
					<li><a href="uploadproduct.php">Add Products</a></li>
                    <li><a href="fproductMenu.php?n=1">Market</a></li>
                    <li><a href="fmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
				<div class="h1">
					<h1>CHOOSE YOUR PAYMENT OPTION</h1>
		</div>
        <?php
                        $sql = "SELECT * FROM fmycart WHERE fid = '$fid'";
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
						?>
                        <?php endwhile;	?>
        <div style="text-align:center; color:White;"><h2 style="font-size:40px;">Total Amount : &#8377; <?php echo number_format($gtotal, 2); ?> /-</h2><h2>INCLUDING DELIVERY CHARGE : 40 /-</h2>
        <h2>
  <a href="fmycart.php?pid=<?= $pid;?>" class="but1">Go Back</a>
  <a href="fcarddetails.php?pid=<?= $pid; ?>" class="but2">Pay Online</a>
  <a href="fbuyNow.php?pid=<?= $pid; ?>" class="but2">Cash On Delivery</a>
</h2></div>
        </section>
</div>
    </body>
</html>