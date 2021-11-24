<?php
session_start();
?>
<!DOCTYPE html>
    <html >
     <head>
        <title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
        <style>
             body{
                margin:0;
                padding:0;
                font-family: Arial;
            }
            section{
                width: 100%;
                height: 100vh;
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('cg.jpg');
                background-size: cover;
                background-position: bottom: 1px;
            }
            p{
                color: rgba(245, 245, 245, 0.753);
                font-size: 30px;
                -webkit-text-stroke-width: 0.5px;
                -webkit-text-stroke-color: white;
            }
        .container{
                font-family: sans-serif; 
                text-align: center;
                padding-bottom: 30px;
            }
        .h1{
	            color: rgb(211, 211, 211);
	            font-size: 30px;
                padding-top:110px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 4px;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: wheat;
            }
        a{
                color:black;
                padding: 10px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 2px;
                background: rgba(176, 252, 0, 0.7);
                border-radius: 6px;
                cursor:pointer;
            }
            a:hover{
                background: rgb(166, 255, 0);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(166, 255, 0),
                            0 0 10px rgb(166, 255, 0),
                            0 0 15px rgb(166, 255, 0),
                            0 0 20px rgb(166, 255, 0);
            }
        </style>
    </head>

    <body>

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <div class="h1">
                    <h1>SUCCESS</h1></div>
                </header>
                <p>
                [ Your Order ID : <?php echo $_SESSION["tid"]; ?> ] <br><br> Order Succesfully placed! <br><br> Thanks for shopping with us!!!
                </p><br><br>
                <a href = "bmenu.php" class="button special">Home</a>
    </body>
</html>
