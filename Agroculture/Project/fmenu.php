<?php session_start();?>
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
                padding-right: 410px;
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
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('lk.jpg');
                background-size: cover;
                background-position: bottom: 1px;
            }
            .h1{
                text-align: center;
	            color: rgb(201, 201, 201);
                font-size: 40px;
                padding-top:160px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1.5px;
                -webkit-text-stroke-color: whitesmoke;
                letter-spacing: 1px;
            }
            .h2{
                text-align: center;
	            color: rgb(201, 201, 201);
                font-size: 30px;
                margin-bottom:60px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: whitesmoke;
                letter-spacing: 1px;
            }
            a.logout{
                color: rgb(211, 211, 211);
                margin-left: 640px;
                padding: 10px 20px;
                text-decoration: none;
                font-size: 15px;
                letter-spacing: 2px;
                text-transform: uppercase;
                background:  rgba(0, 109, 252, 0.7);
                border-radius: 6px;
            }
            a.logout:hover{
                background: rgb(0, 68, 255);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(0, 68, 255),
                            0 0 10px rgb(0, 68, 255),
                            0 0 15px rgb(0, 68, 255),
                            0 0 20px rgb(0, 68, 255);
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="top_nav">
                <div class="logo"><a href="fmenu.php">AGROCULTURE</a></div>
                <ul>
                    <li><a class="active" href="fmenu.php">Home</a></li>
                    <li><a href="fprofile.php">Profile</a></li>
                    <li><a href="uploadproduct.php">Add Products</a></li>
                    <li><a href="fproductMenu.php?n=1">Market</a></li>
                    <li><a href="fmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
                <div class="h1">
                    <h1>
                        <?php if($_SESSION['logged_in']): ?>
                            <span>Hi! <?php echo $_SESSION['Name']; ?> ,</span>
                            <?php endif;?>
                    </h1>
        </div>
                <div class="h2">
                <h2>
                <?php
                if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                }
                else
                {
                    header("Location: ./fmenu.php");
                }
                ?>
                </h2>
        </div>
        <a class="logout" href="logout.php">Logout</a>
            </section>
        </div>
        
    </body>
</html>