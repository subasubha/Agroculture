<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");
	$pid = $_GET['pid'];
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
            .backg{
                width: 100%;
                height: 240vh;
                background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('nk.jpg');
                background-size: cover;
                background-position: bottom: 1px;
            }
			.col-sm-4{
				margin-top: 100px;
				margin-left: 360px;
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
			.buttonrow{
                display: flex;
            }
            a.but1{
                color: rgba(0, 0, 0, 0.8);
                margin-left: 630px;
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
                margin-left: 400px;
                padding: 6px 20px;
                text-decoration: none;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 2px;
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
                    <li><a href="bmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
				<div class="h1">
					<h1>Product Details :</h1>
		</div>
		<?php

					$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$fid = $row['fid'];
					$sql = "SELECT * FROM farmer WHERE fid = '$fid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$row['pimage'];

					?>
				<section id="main" class="wrapper style1 align-center">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<img class="image fit" src="<?php echo $picDestination.'';?>" alt="" width="600px;" height="400px;"/>
								</div>
								<div class="col-12 col-sm-6">
									<div class="h1">
									<h1><?= $row['product']; ?></h1></div><br>
									<p style="color:white; margin-left: 450px; font: 30px Times new roman;">Product Owner : <?= $frow['fname']; ?></p>
									<p style="color:white; margin-left: 450px; font: 30px Times new roman;">Owner Contact No: <?= $frow['fmobile']; ?></p>
									<p style="color:white; margin-left: 450px; font: 30px Times new roman;">Owner Email: <?= $frow['femail']; ?></p>
                                    <p style="color:white; margin-left: 450px; font: 30px Times new roman;">Product Information : <?= $row['pinfo']; ?></p>
									<p style="color:white; margin-left: 450px; font: 30px Times new roman;">Product Price : <?= $row['price'].' /-'; ?></p>
								</div><br><br><br><br>
								<div class="buttonrow">
									<a href="bmyCart.php?flag=1&pid=<?= $pid; ?>" class="but1"><span class="glyphicon glyphicon-shopping-cart"> Add To Cart</a>
              					</div>
							</div>
							</div>
						</div>
			</div>
    </body>
</html>