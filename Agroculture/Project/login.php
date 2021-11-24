<?php
    include "Signin.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Login</title>
        <style>
            body{
                font-family: sans-serif;  
                background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(vfg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 97.5vh; 
            }
            .container{
                top:53%;
                left:50%;
                position:absolute;
                transform: translate(-50%,-50%);
            }
            .card{
                width: 400px;
                padding:10px 10px 20px 10px;
                background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), position:absolute ,url(vfg.jpg);
                box-sizing: border-box;
                box-shadow: 8px 8px 50px #000;
                border-radius: 20px;
            }
            .h1{
                text-align: center;
	            color: wheat;
	            font-size: 18px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 1px;
            }
            #name{
                width:200px;
                border:none;
                outline: none;
                font-size: 24px;
                background:transparent;
                border-bottom:1px solid rgb(185, 169, 136);
                padding:6px;
                margin-left: 85px;
                margin-bottom: 30px;
                color:wheat;
            }
            #password{
                width:200px;
                border:none;
                font-size: 24px;
                background:transparent;
                border-bottom:1px solid rgb(182, 165, 133);
                padding:6px;
                margin-left: 85px;
                margin-bottom: 20px;
                color:wheat;
            }
            .category{
                font-size: 16px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 550;
                letter-spacing: 2px;
                margin-top: 30px;
                margin-left: 32px;
                margin-right: 1px;
                color:wheat;
                bottom 20px;
            }
            .radio{
                font-size: 18px;
                font-weight: 500;
                text-transform: capitalize;
                display: inline-block;
                vertical-align: center;
                color:wheat;
                position: relative;
                padding-left: 30px;
                cursor:pointer;
            }
            .radio + .radio{
                margin-left: 20px;
            }
            .radio input[type="radio"]{
                display:none;
            }
            .radio span{
                height: 12px;
                width: 12px;
                border-radius: 50%;
                border:2px solid #ef6000;
                display:block;
                position: absolute;
                left: 10%;
                top: 1px;
            }
            .radio span:after{
                content:"";
                height:9px;
                width:9px;
                background:#bb3601;
                display: block;
                position: absolute;
                left: 48.74%;
                top: 48.874%;
                transform: translate(-50%,-50%) scale(0);
                border-radius: 50%;
                transition: 300ms ease-in-out 0s;
            }
            .radio input[type="radio"]:checked ~ span:after{
                transform: translate(-50%,-50%) scale(1);
            }
            #button{
                font-size: 16px;
                position: relative;
                border-radius:30px;
                padding:10px 15px 8px 17px;
                background:rgb(63, 35, 16);
                color:wheat;
                margin-top: 30px;
                margin-bottom: 30px;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 60px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            #button:hover{
                background: #813111;
	            color: wheat;
	            box-shadow:  0 0 5px #813111,
	                         0 0 25px   #813111,
	                         0 0 50px    #813111,
	                         0 0 200px   #813111;
            }
            a{
                letter-spacing: 2px;
                font-family: 'Times New Roman';
                position: relative;
	            display: inline-block;
                margin: 10px;
                margin-left: 80px;
	            color: wheat;
	            font-size: 18px;
	            text-decoration: none;
                overflow: hidden;
                cursor:pointer;
            }
            a:hover{
                color: rgb(205, 143, 50);
            }
            #home{
                font-size: 18px;
                position: relative;
                border-radius:50px;
                padding:8px 20px 7px 24px;
                background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), transparent;
                color:wheat;
                border-color: wheat;
                border-width: 2px;
                margin-top: 30px;
                outline: none;
                letter-spacing: 3px;
                margin-left: 30px;
                cursor:pointer;
            }
            #home:hover{
                background: rgb(63, 35, 16);
                color:wheat;
                border-color:wheat;
                border-width: 2px;
            }
            ::placeholder{
                color:rgb(161, 146, 117);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="h1">
                    <h1>Login Here</h1></div><br>
                    <form action="" method="POST">
                        <input type="text" name="uname" value="" placeholder="Username" id="name" required/><br>
                        <input type="password" name="pass" value="" placeholder="Password" id="password" required/><br><br>
                        <div class="radio-group">
                            <lable class="category">CATEGORY : </lable>
                        <label class="radio">
                        <input type="radio" name="category" value="1">
                        Farmer
                        <span></span>
                        </label>
                        <label class="radio">
                        <input type="radio" name="category" value="0">
                        Buyer
                        <span></span>
                        </label><br>
                        </div>
                        <input type="reset" value="RESET" id="button">
                        <input type="submit" value="LOGIN" name="submit" id="button">
                        <br>
                        <a href="Register.php">CREATE AN ACCOUNT</a><br>
                        </form>
            </div>
                    <form action="Index.php">
        <input type="submit" value="CLICK HERE TO GO HOME" id="home">
        </form>
        </div>
    </body>
</html>