<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

        $pid = $_GET['pid'];
        $bid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
        <style>
            body{
                font-family: sans-serif;  
                background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(op.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom;
                height: 97.5vh;
            }
            .container{
                top:52%;
                left:50%;
                width:60%;
                position:absolute;
                transform: translate(-50%,-50%);
            }
            .card{
                padding:10px 10px 30px 10px;
                box-sizing: border-box;
                background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), position:absolute ,url(op.jpg);
                box-sizing: border-box;
                box-shadow: 8px 8px 50px #000;
                border-radius: 10px;
            }
            .h1{
                text-align: center;
	            color:  rgb(202, 202, 202);
	            font-size: 16px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 2px;
            }
            #button{
                font-size: 20px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                text-decoration: none;
                font-weight:bold;
                position: relative;
                border-radius:10px;
                padding:6px 15px 8px 17px;
                background:rgb(202, 202, 202);
                color:black;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 350px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            
            #button:hover{
                background: rgb(99, 99, 99); 
	            color:black;
            }
            .buttonrow{
                display: flex;
                align:center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="h1"><h1>PAYMENT SUCCESSFUL</h1></div>
                <?php
                        $sql = "SELECT * FROM bmycart WHERE bid = '$bid'";
                        $result = mysqli_query($conn, $sql);
                        $total = 0;
                        $gtotal = 0;
						while($row = $result->fetch_array()):
                            $pid = $row['pid'];
                            $sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
                            $result1 = mysqli_query($conn, $sql);
                            $row1 = $result1->fetch_array();
                            $deli = 40;
                            $total = $total + $row1['price'];
                            $gtotal = $total + $deli;
						?>
                        <?php endwhile;	?><br>
                    <label style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(202, 202, 202); font-weight:bold;"><center>Your payment of Rs.&#8377;<?php echo number_format($gtotal, 2); ?>  was successfully completed<br><br>Click 'NEXT' button to enter your Delivery Details.</center></label><br>
            <div class="buttonrow">
                <a href="bonlinepay.php?pid=<?= $pid; ?>" id="button">NEXT</a>
            </div><br>
            </div>
        </div>
    </body>
</html>