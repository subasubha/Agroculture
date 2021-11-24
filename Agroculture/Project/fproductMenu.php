<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");
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
                width: 100%;
                background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('nk.jpg');
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
			.col-md-4{
				margin-left: 15px;
				width:27.5%;
				display: grid;
				padding: 30px;
				float: left;
			}
            .buttonspecial{
                background-color: turquoise;
                padding: 5px 10px;
                font-weight: bold;
                font-size: 16px;
                border-width: 2px;
                border-color: turquoise;
                border-radius: 10px;
                cursor:pointer;
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
            .h3{
                text-align: center;
	            color: rgb(136, 226, 248);
                font-size: 20px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: rgb(177, 237, 255);
                letter-spacing: 1px;
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
                    <li><a class="active" href="fproductMenu.php?n=1">Market</a></li>
                    <li><a href="fmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
                <div class="h1">
                    <h1>Welcome to Digital Market</h1>
        </div><br>
		<?php
					if(isset($_GET['n']) AND $_GET['n'] == 1):
				?>
                <div class="h3"><h3>SELECT FILTER</h3></div>
					<form method="GET" action="fproductMenu.php?">
						<input type="text" value="1" name="n" style="display: none;"/>
						<center>
							<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<div class="select-wrapper" style="width: auto" >
									<select name="type" id="type" required style="cursor: pointer; font-size: 20px; font-weight: bold; padding: .2em .4em; border-radius: 5px; background-color:rgb(44, 120, 192); color: black;">
										<option value="all" style="color: black;">List All</option>
										<option value="fruit" style="color: black;">Fruit</option>
										<option value="vegetable" style="color: black;">Vegetable</option>
										<option value="grain" style="color: black;">Grains</option>
									</select>
							  	</div><br>
							</div>
							<div class="col-sm-2">
								<input class="buttonspecial" type="submit" value="Go!" />
							</div>
						</div><br><br>
						</center>
					</form>
				<?php endif; ?>

				<section id="two" class="wrapper style2 align-center">
				<div class="container">
				<?php
					if(!isset($_GET['type']) OR $_GET['type'] == "all")
					{
					 	$sql = "SELECT * FROM fproduct WHERE 1";
					}
				    if(isset($_GET['type']) AND $_GET['type'] == "fruit")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
					$result = mysqli_query($conn, $sql);

					?>
					<div class="row">
					<?php

						while($row = $result->fetch_array()):
							$picDestination = "images/productImages/".$row['pimage'];
						?>
							<div class="col-md-4">
							<section>
								<div class="h2">
							<strong><h2 class="title"><?php echo $row['product'].'';?></h2></strong>
							<a href="freview.php?pid=<?php echo $row['pid'] ;?>" > <img class="image fit" src="<?php echo $picDestination;?>" height="220px;" width="300px;"  /></a>

							<div style="align: left">
							<blockquote><?php echo "Type : ".$row['pcat'].'';?><br><?php echo "Price : ".$row['price'].' /-';?><br></blockquote>

						</section>
						</div>
						<?php endwhile;	?>
            </section>
        </div>
    </body>
</html>