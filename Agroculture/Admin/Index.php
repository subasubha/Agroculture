<?php
    include "adminlogin.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Admin Login</title>
        <style>
            body{
                font-family: sans-serif;  
                background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(bbg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom;
                height: 97.5vh; 
            }
            .container{
                top:40%;
                left:50%;
                position:absolute;
                transform: translate(-50%,-50%);
            }
            .card{
                width: 400px;
                padding:20px 10px 10px 10px;
                box-sizing: border-box;
                background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), position:absolute ,url(bbg.jpg);
                box-shadow: 8px 8px 50px #000;
                border-radius: 20px;
            }
            .h1{
                text-align: center;
	            color: rgb(179, 237, 245);
	            font-size: 20px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 1px;
            }
            .h2{
                text-align: center;
	            color: rgb(179, 237, 245);
	            font-size: 20px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 1px;
            }
            #name{
                width:200px;
                border:none;
                outline: none;
                font-size: 24px;
                background:transparent;
                border-bottom:1px solid rgb(132, 169, 173);
                padding:6px;
                margin-left: 85px;
                margin-bottom: 30px;
                color:rgb(179, 237, 245);
            }
            #password{
                width:200px;
                border:none;
                outline: none;
                font-size: 24px;
                background:transparent;
                border-bottom:1px solid rgb(132, 169, 173);
                padding:6px;
                margin-left: 85px;
                margin-bottom: 20px;
                color:rgb(179, 237, 245);
            }
            #button{
                font-size: 16px;
                position: relative;
                border-radius:30px;
                padding:10px 15px 8px 17px;
                background: rgb(2, 125, 226);
                color:rgb(179, 237, 245);
                margin-top: 10px;
                margin-bottom: 40px;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 60px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            #button:hover{
                background: rgb(0, 179, 250);
	            color: rgb(188, 247, 255);
	            box-shadow:  0 0 5px rgb(0, 179, 250),
	                         0 0 25px   rgb(0, 179, 250),
	                         0 0 50px    rgb(0, 179, 250),
	                         0 0 200px   rgb(0, 179, 250);
            }
            #home{
                font-size: 18px;
                position: relative;
                border-radius:50px;
                padding:8px 20px 7px 24px;
                background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), transparent;
                color:rgb(179, 237, 245);
                border-color: rgb(179, 237, 245);
                border-width: 2px;
                margin-top: 30px;
                outline: none;
                letter-spacing: 1px;
                margin-left: 50px;
                cursor:pointer;
            }
            #home:hover{
                background: rgb(0, 87, 158);
                color:rgb(179, 237, 245);
                border-color: rgb(179, 237, 245);
                border-width: 2px;
            }
            ::placeholder{
                color:rgb(126, 156, 160);
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="h1"><h1>AGROCULTURE</h1></div><br>
            <div class="card">
                <div class="h2">
                    <h2>Admin Login Here</h2></div><br>
                    <form action="" method="POST">
                        <input type="text" name="uname" value="" placeholder="Username" id="name" required/><br>
                        <input type="password" name="pass" value="" placeholder="Password" id="password" required/><br><br>
                        <input type="reset" value="RESET" id="button">
                        <input type="submit" value="LOGIN" name="submit" id="button">
                        <br>
                        </form>
            </div>
        </div>
    </body>
</html>