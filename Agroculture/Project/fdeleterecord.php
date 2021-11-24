<!DOCTYPE html>
    <html >
     <head>
        <title>ACCOUNT DELETED</title>
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
        .h1{
	            color: rgb(211, 211, 211);
	            font-size: 18px;
                padding-top:250px;
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
                font-size: 16px;
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
                <header class="h1">
                    <h1>
                    <?php session_start();        
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

    $sql = "DELETE FROM farmer WHERE fid='".$_SESSION["id"]."'";

    $query = "DELETE FROM fproduct WHERE fid='".$_SESSION["id"]."'";

    $result=mysqli_query($conn,$sql);

    $result1=mysqli_query($conn,$query);

    if ($result&&$result1)
    {
        echo "RECORD DELETED SUCCESSFULLY";
    }
    else{
        echo "ERROR deleting record:" . $conn->error;
    }

    $conn->close();
    ?>
    </h1>
                </header><br><br>
                <a href ="Index.php">Exit</a>
                    </div>
    </body>
</html>