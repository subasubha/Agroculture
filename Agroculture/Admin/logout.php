<?php session_start();

    unset($_SESSION["Name"]);
    unset($_SESSION["Uname"]);
    unset($_SESSION["Mobile"]);
    unset($_SESSION["Accno"]);
    unset($_SESSION["Addr"]);
    unset($_SESSION["Category"]);
    unset($_SESSION["Email"]);
    unset($_SESSION["Password"]);
    unset($_SESSION["Pass"]);

?>
<!DOCTYPE html>
    <html >
     <head>
        <title>Agroculture.com/Logged Out</title>
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
        .container{
                font-family: sans-serif; 
                text-align: center;
                padding-bottom: 30px;
            }
        .h2{
	            color: rgb(211, 211, 211);
	            font-size: 22px;
                padding-top:260px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 4px;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: wheat;
            }
        a{
                color:black;
                padding: 6px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 20px;
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
                    <h2>
                    <?php if($_SESSION['logged_in']): ?>
                            <span>"Thanks for Visiting !!!..,You have been logged out Succesfully !!!"</span>
                            <?php endif; ?>
                    </h2>
                </header><br><br>
                <a href ="Index.php">Exit</a>
                    </div>
    </body>
</html>
