<?php?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com</title>
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
                height: 60px;
                padding: 10px 90px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.5);
            }
            .logo{
                padding: 5px 10px;
                height: 50px;
                float: left;
                font-size: 25px;
                font-weight: bold;
                letter-spacing: 5px;
                text-transform: uppercase;
                color: rgb(97, 221, 86);
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: #00ef6c;
                cursor:pointer;
            }
            .top_nav ul{
                list-style: none;
                float: right;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .top_nav ul li a{
                line-height: 40px;
                color:#fff;
                padding: 8px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 13px;
                letter-spacing: 3px;
                font-weight: bold;
                cursor:pointer;
            }
            .top_nav ul li a:hover{
                background: rgba(0,0,0,0.7);
                border-radius: 6px;
            }
            .top_nav ul li a.active{
                background: #e2472f;
                color:#fff;
                border-radius: 6px;
            }
            section{
                width: 100%;
                height: 100vh;
                background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('gk.jpg');
                background-size: cover;
                background-position: bottom: 1px;
            }
            .h1{
                margin-left: 200px;
	            color: rgb(136, 79, 41);
                font-size: 20px;
                padding-top:100px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: rgb(136, 35, 4);
                letter-spacing: 1px;
            }
            .p{
                padding-left: 350px;
                margin-top: 60px;
	            color: rgb(2, 0, 104);
                font-size: 16px;
                font-weight:bold;
                text-align: justify;
                width: 700px;
                font-family: sans-serif;
                -webkit-text-stroke-width: 0.2px;
                -webkit-text-stroke-color:  rgb(3, 18, 233);
                letter-spacing: 1px;
            }
            .bottom_nav{
                position: fixed;
                bottom: 0;
                left: 0;
                width:100%;
                height: 60px;
                padding: 10px 90px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.5);
            }
            .bottom_nav ul{
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            #button{
                font-size: 14px;
                position: relative;
                border-radius:30px;
                padding:8px 20px;
                background:  rgb(157, 2, 177);
                color:wheat;
                margin-top: 3px;
                border-color:  rgb(110, 4, 136);
                border-width: 2px;
                outline: none;
                letter-spacing: 3px;
                margin-right: 460px;
                cursor:pointer;
            }
            #button:hover{
                background: #cc1379;
	            color: wheat;
	            box-shadow:  0 0 5px  #cc1379,
	                         0 0 10px   #cc1379,
	                         0 0 15px    #cc1379,
	                         0 0 20px   #cc1379;
            }
            #button2{
                font-size: 14px;
                position: relative;
                border-radius:30px;
                padding:8px 20px;
                background:  rgb(182, 170, 0);
                color:wheat;
                margin-top: 3px;
                border-color:  rgb(165, 136, 42);
                border-width: 2px;
                outline: none;
                letter-spacing: 3px;
                margin-left: 470px;
                cursor:pointer;
            }
            #button2:hover{
                background: #c9cc13;
	            color: wheat;
	            box-shadow:  0 0 5px   #c9cc13,
	                         0 0 10px    #c9cc13,
	                         0 0 15px     #c9cc13,
	                         0 0 20px    #c9cc13;
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="top_nav">
                <div class="logo">AGROCULTURE</div>
                <ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a class="active" href="About.php">About</a></li>
                    <li><a href="Help.php">Help</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Feedback.php">Feedback</a></li>
                </ul>
            </div>
            <section>
                <div class="h1">
                    <h1>About Agroculture :</h1>
                </div>
                <div class="p">
                    <p>Agroculture is a new way of trading Agricultural products. It will help farmers to commertialize their product on a online digital platform to increase the radius of their market. The main moto is to cut loose all the commission consumed by the third party people involved in journey of the product to the consumer. It is a farm management website where farmer and the buyer can create their own accounts for trading farm products. The website displays with the slogan "Your product our Market". You must register if you are a new user. Signing up with the detail of Name, Username, Mobile Number, Email, Address, Category and creating password. As a farmer you can upload products and their details. You can also buy products, add them to carts and view it. As a Buyer you can also view your carts and you can buy products by searching them according to your needs. Farm management is developed using HTML, PHP, CSS, and MYSQL. The project contains an admin side where he/she can manage all the agricultural and farming records.The admin plays an important role in the management of this system. In this project the admin has full acess to the system. Design of this project is pretty simple so that the user won't find any difficulties while working on it.</p>
                </div>
                <div class="bottom_nav">
                    <ul>
                    <li><form action="Index.php">
                        <input type="submit" value="Go Back" id="button">
                    </form></li>
                    <li><form action="Help.php">
                        <input type="submit" value="Next Page" id="button2">
                    </form></li>
                    </ul>
                </div>
            </section>
        </div>
    </body>
</html>