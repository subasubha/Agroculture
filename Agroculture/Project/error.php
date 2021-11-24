<?php session_start();?>
<!DOCTYPE html>
    <html >
     <head>
        <title>Error</title>
        <style>
             body{
                margin:0;
                padding:0;
                font-family: Arial;
            }
            section{
                width: 100%;
                height: 100vh;
                background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('mg.jpg');
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
        .h2{
	            color: rgb(211, 211, 211);
	            font-size: 30px;
                padding-top:180px;
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
                background: rgba(252, 0, 0, 0.7);
                border-radius: 6px;
            }
            a:hover{
                background: rgb(255, 0, 0);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(228, 0, 0),
                            0 0 10px rgb(228, 0, 0),
                            0 0 15px rgb(228, 0, 0),
                            0 0 20px rgb(228, 0, 0);
            }
        </style>
    </head>

    <body>

        <section>
            <div class="container">
                <header class="h2">
                    <h2>ERROR</h2>
                </header>
                <p>
                    <?php
                        if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ./index.php");
                        }
                    ?>
                </p><br><br>
                <a href ="index.php">Retry</a>


        <?php $_SESSION['message'] = ""; ?>
                    </div>

    </body>
</html>
