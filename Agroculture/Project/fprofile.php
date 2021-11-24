<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?> </title>
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
                color: black;
                font-size: 14px;
                border-radius: 6px;
            }
            .backg{
                width: 100%;
                height: 170vh;
                background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('lk2.jpg');
                background-size: cover;
            }
            .h1{
                text-align: center;
	            color: rgb(218, 255, 83);
                font-size: 30px;
                padding-top:100px;
                padding-bottom:30px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                -webkit-text-stroke-width: 1.5px;
                -webkit-text-stroke-color: rgb(185, 169, 97);
                letter-spacing: 3px;
            }
            .h2{
                text-align: center;
	            color: rgb(255, 83, 23);
                font-size: 28px;
                margin-bottom:80px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 0.5px;
                -webkit-text-stroke-color: rgb(229, 255, 83);
                letter-spacing: 1px;
            }
            a.logout{
                color: rgb(211, 211, 211);
                margin-left: 604px;
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
            .buttonrow{
                display: flex;
            }
            a.but1{
                color: rgba(0, 0, 0, 0.8);
                margin-left: 320px;
                padding: 8px 18px;
                text-decoration: none;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 16px;
                font-weight:600;
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
                margin-left: 270px;
                padding: 8px 18px;
                text-decoration: none;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 16px;
                font-weight:600;
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
                <div class="logo"><a href="fmenu.php">AGROCULTURE</a></div>
                <ul>
                    <li><a href="fmenu.php">Home</a></li>
                    <li><a  class="active" href="fprofile.php">Profile</a></li>
                    <li><a href="uploadproduct.php">Add Products</a></li>
                    <li><a href="fproductMenu.php?n=1">Market</a></li>
                    <li><a href="fmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
                <div class="h1">
                    <h1>YOUR PROFILE</h1>
                </div>
                <div class="h2">
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Name : </font></b><?php echo $_SESSION['Name'] ?></h2>
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Username : </font></b><?php echo $_SESSION['Uname'] ?></h2>
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Mobile : </font></b><?php echo $_SESSION['Mobile'] ?></h2>
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Account Number : </font></b><?php echo $_SESSION['Accno'] ?></h2>
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Email : </font></b><?php echo $_SESSION['Email'] ?></h2>
                    <h2><b><font size="+3" color="rgb(218, 255, 83)">Address : </font></b><?php echo $_SESSION['Addr'] ?></h2>
                </div>
                <div class="buttonrow">
                    <a class="but1" href="fdeleterecord.php">DELETE ACCOUNT</a>
                    <a class="but2" href="uploadproduct.php">ADD PRODUCTS</a>
                </div><br><br><br><br>
                <a class="logout" href="logout.php">Logout</a>
            </section>
        </div>
        
    </body>
</html>