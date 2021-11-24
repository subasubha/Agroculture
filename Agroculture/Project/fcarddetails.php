<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

        $pid = $_GET['pid'];
        $fid = $_SESSION['id'];
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
            #name{
                border:none;
                font-size: 20px;
                text-align: center;
                background:transparent;
                border:1.9px solid rgb(167, 167, 167);
                border-radius:5px;
                padding:6px;
                margin-left:20px;
                color:rgb(202, 202, 202);
            }
            #cvv{
                width:70px;
                border:none;
                font-size: 20px;
                text-align: center;
                background:transparent;
                border:1.9px solid rgb(167, 167, 167);
                border-radius:5px;
                padding:6px;
                margin-left:47px;
                letter-spacing:4px;
                color:rgb(202, 202, 202);
            }
            #mobile{
                width:90px;
                border:none;
                font-size: 20px;
                text-align: center;
                background:transparent;
                border:1.9px solid rgb(167, 167, 167);
                border-radius:5px;
                padding:6px;
                margin-left: 21px;
                letter-spacing:2px;
                color:rgb(202, 202, 202);
            }
            #pincode{
                width:130px;
                border:none;
                font-size: 20px;
                text-align: center;
                background:transparent;
                border:1.9px solid rgb(167, 167, 167);
                border-radius:5px;
                padding:6px;
                margin-left:47px;
                color:rgb(202, 202, 202);
            }
            #button{
                font-size: 20px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                text-decoration: none;
                position: relative;
                border-radius:30px;
                padding:6px 25px 9px 30px;
                background:rgb(202, 202, 202);
                color:black;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 150px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            
            #button:hover{
                background: rgb(99, 99, 99); 
	            color:black;
            }
            .buttonrow{
                display: flex;
            }
            a.but1{
                color:black;
                margin-left: 350px;
                padding: 6px 12px;
                text-decoration: none;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 1px;
                text-transform: uppercase;
                background:rgb(126, 126, 126);
                border-radius: 6px;
            }
            a.but1:hover{
                background:rgb(202, 202, 202);;
                border-radius: 6px;
                color:black;
                box-shadow: 0 0 5px rgb(202, 202, 202),
                            0 0 6px rgb(202, 202, 202),
                            0 0 7px rgb(202, 202, 202),
                            0 0 20px rgb(202, 202, 202);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="h1"><h1>CARD DETAILS</h1></div>
                <form method="post" action="fcarddetailsok.php?pid=<?= $pid; ?>">
                <?php
                        $sql = "SELECT * FROM fmycart WHERE fid = '$fid'";
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
					<label style="color:rgb(202, 202, 202); font-weight:bold; margin-left:610px; text-align:center; font-size:20px; ">COST : <?php echo number_format($gtotal, 2); ?></label><br><br>
                    <label style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(202, 202, 202); font-weight:bold; margin-left:50px;">Name on Card :</label>
                    <input type="text" name="name" id="name" value="" placeholder="Full name displayed on card" style="width:60%; margin-top:10px;" required/><br><br>
                    <label style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(202, 202, 202); font-weight:bold; margin-left:50px;">Card Number :</label>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="0000" required style="margin-left: 27px; margin-top:10px;"/>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="0000" required/>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="0000" required/>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="0000" required/><br><br><br>
                    <label style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(202, 202, 202); font-weight:bold; margin-left:50px;">Expiry Date :</label>
                    <input type="text" name="pincode" id="pincode" value="" placeholder="DD-MM-YYYY" required/>
                    <label style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(202, 202, 202); font-weight:bold; margin-left:155px;">CVC :</label>
                    <input type="text" name="pincode" id="cvv" value="" placeholder="000" required/><br><br><br>
                    <input type="reset" value="RESET" id="button">
                    <input type="submit" value="Proceed To Pay" name="submit" id="button">
                </form>
            </div><br><br>
            <div class="buttonrow">
                <a href="fpayment.php?pid=<?= $pid; ?>" class="but1"><span class="glyphicon glyphicon-shopping-cart">Back</a>
            </div>
        </div>
    </body>
</html>