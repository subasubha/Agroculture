<?php
    include "Signup.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Register</title>
        <style>
            body{
                font-family: sans-serif;  
                background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(naturee.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height:97.5vh;
            }
            .container{
                top:51%;
                left:50%;
                position:absolute;
                transform: translate(-50%,-50%);
            }
            .card{
                width: 805px;
                padding:10px 10px 30px 10px;
                box-sizing: border-box;
                background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), position:absolute ,url(naturee.jpg);
                box-sizing: border-box;
                box-shadow: 8px 8px 50px #000;
                border-radius: 10px;
            }
            .h1{
                text-align: center;
	            color:  rgb(160, 209, 141);
	            font-size: 18px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 4px;
            }
            #name{
                width:180px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                color: rgb(179, 252, 179);
            }
            #uname{
                width:180px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                color: rgb(179, 252, 179);
            }
            #mobile{
                width:180px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                color: rgb(179, 252, 179);
            }
            #email{
                width:190px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 30px;
                margin-top: 30px;
                color: rgb(179, 252, 179);
            }
            #password{
                width:160px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(179, 252, 179);
            }
            #pass{
                width:160px;
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 30px;
                margin-top: 30px;
                color: rgb(179, 252, 179);
            }
            #accno{
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(179, 252, 179);
            }
            #addr{
                border:none;
                font-size: 22px;
                background:transparent;
                border-bottom:1px solid rgb(140, 192, 140);
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                margin-bottom: 30px;
                color: rgb(179, 252, 179);
            }
            .category{
                font-size: 20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 550;
                letter-spacing: 2px;
                margin-top: 30px;
                margin-left: 190px;
                margin-right: 20px;
                color:#9ad6a8;
                bottom 20px;
            }
            .radio{
                font-size: 20px;
                font-weight: 500;
                text-transform: capitalize;
                display: inline-block;
                vertical-align: center;
                color:#9ad6a8;
                position: relative;
                padding-left: 50px;
                cursor:pointer;
            }
            .radio + .radio{
                margin-left: 30px;
            }
            .radio input[type="radio"]{
                display:none;
            }
            .radio span{
                height: 16px;
                width: 16px;
                border-radius: 50%;
                border:2px solid #0da752;
                display:block;
                position: absolute;
                left: 10%;
                top: 1px;
            }
            .radio span:after{
                content:"";
                height:12px;
                width:12px;
                background: rgb(0, 196, 10);
                display: block;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%) scale(0);
                border-radius: 50%;
                transition: 300ms ease-in-out 0s;
            }
            .radio input[type="radio"]:checked ~ span:after{
                transform: translate(-50%,-50%) scale(1);
            }
            #button{
                font-size: 14px;
                position: relative;
                border-radius:30px;
                padding:10px 15px 10px 17px;
                background: rgb(30, 136, 53);
                color:wheat;
                margin-top: 30px;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 30px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            
            #button:hover{
                background: #2fbd13;
	            color: wheat;
	            box-shadow:  0 0 5px #2fbd13,
	                         0 0 25px   #2fbd13,
	                         0 0 50px    #2fbd13,
	                         0 0 200px   #2fbd13;
            }
            #button1{
                font-size: 14px;
                position: relative;
                border-radius:30px;
                padding:10px 15px 10px 17px;
                background: rgb(30, 136, 53);
                color:wheat;
                margin-top: 30px;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 70px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            
            #button1:hover{
                background: #2fbd13;
	            color: wheat;
	            box-shadow:  0 0 5px #2fbd13,
	                         0 0 25px   #2fbd13,
	                         0 0 50px    #2fbd13,
	                         0 0 200px   #2fbd13;
            }
            a{
                letter-spacing: 2px;
                font-family: 'Times New Roman';
                position: relative;
	            display: inline-block;
	            top:5px;
                margin-left: 80px;
	            color: #9ad6a8;
	            font-size: 18px;
	            text-decoration: none;
                overflow: hidden;
                cursor:pointer;
            }
            a:hover{
                color: yellowgreen;
            }
            #home{
                font-size: 18px;
                position: relative;
                border-radius:50px;
                padding:8px 20px 8px 24px;
                background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), transparent;
                color:rgb(188, 255, 194);
                border-color:rgb(188, 255, 194);
                border-width: 2px;
                margin-top: 30px;
                outline: none;
                letter-spacing: 3px;
                margin-left:230px;
                cursor:pointer;
            }
            #home:hover{
                background:rgb(15, 99, 34);
                color:rgb(188, 255, 194);
                border-color:rgb(188, 255, 194);
                border-width: 2px;
            }
            ::placeholder{
                color:rgb(115, 141, 115);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="h1"><h1>Register Here</h1></div>
                <form action="" method="POST">
                    <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                    <input type="text" name="uname" id="uname" value="" placeholder="Username" required/>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                    <input type="text" name="accno" id="accno" value="" placeholder="Bank Account Number" style="width:40%" required/>
                    <input type="email" name="email" id="email" value="" placeholder="Email" style="width:40%" required/>
                    <input type="password" name="password" id="password" value="" placeholder="Password" style="width:40%" required/>
                    <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" style="width:40%" required/>
                    <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:85%" required/><br>
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
                    <a href="login.php">Already have an Account, LOGIN?</a>
                    <input type="reset" value="RESET" id="button">
                    <input type="submit" value="SIGN UP" name="submit" id="button1">
                    <br>
                </form>
            </div>
            <form action="Index.php">
                <input type="submit" value="CLICK HERE TO GO HOME" id="home">
                </form>
        </div>
    </body>
</html>