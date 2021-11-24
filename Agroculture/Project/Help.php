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
                margin-left: 400px;
	            color: rgb(136, 79, 41);
                font-size: 20px;
                padding-top:120px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: rgb(136, 35, 4);
                letter-spacing: 2px;
            }
            .p{
                margin-left: 460px;
                margin-top: 30px;
	            color: rgb(153, 0, 71);
                font-size: 18px;
                text-align: justify;
                width: 500px;
                font-family: sans-serif;
                -webkit-text-stroke-width: 0.2px;
                -webkit-text-stroke-color:  rgb(216, 0, 0);
                letter-spacing: 1px;
            }
            .p ul{
                list-style: square;
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
                background:  rgb(182, 170, 0);
                color:wheat;
                margin-top: 3px;
                border-color:  rgb(182, 170, 0);
                border-width: 2px;
                outline: none;
                letter-spacing: 3px;
                margin-right: 460px;
                cursor:pointer;
            }
            #button:hover{
                background: #c9cc13;
	            color: wheat;
	            box-shadow:  0 0 5px   #c9cc13,
	                         0 0 10px    #c9cc13,
	                         0 0 15px     #c9cc13,
	                         0 0 20px    #c9cc13;
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
                    <li><a href="About.php">About</a></li>
                    <li><a class="active" href="Help.php">Help</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Feedback.php">Feedback</a></li>
                </ul>
            </div>
            <section>
                <div class="h1">
                    <h1>Help :</h1>
                </div>
                <div class="p">
                    <ul>
                        <li>If you are a new user click the Register button.</li><br>
                        <li>Enter your details and give Submit.</li><br>
                        <li>If you are an Existing user click the Login button.</li><br>
                        <li>Enter your username and password and click login button.</li><br>
                        <li>If you have any issue in login contact the Admin.</li><br>
                        <li>Details of Admin is given in Contact Tab.</li>
                    </ul>
                </div>
                <div class="bottom_nav">
                    <ul>
                    <li><form action="About.php">
                        <input type="submit" value="Go Back" id="button">
                    </form></li>
                    <li><form action="Contact.php">
                        <input type="submit" value="Next Page" id="button2">
                    </form></li>
                    </ul>
                </div>
            </section>
        </div>
    </body>
</html>