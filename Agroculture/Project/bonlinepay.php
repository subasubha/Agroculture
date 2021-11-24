<?php
	session_start();
	$hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

        $pid = $_GET['pid'];
        $bid = $_SESSION['id'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $date = date('Y-m-d H:i:s');
        $cost = $_POST['cost'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];

        
        $sql = "INSERT INTO boptransaction (bid, dod, cost, name, city, mobile, email, pincode, addr)
                VALUES ('$bid', '$date', '$cost', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        
        $result = mysqli_query($conn, $sql);
        
        if($result)
                {
                    //header('Location: ./bsuccess.php');
                }
                else {
                    echo $result->mysqli_error();
                }
                
                
        
        
        
        $resu =mysqli_query($conn, "SELECT  MAX(tid) as max , MIN(tid) as min FROM boptransaction");

        while($res = mysqli_fetch_array($resu)) 
        { 
    
                $max = $res['max']; 
    
                //echo 'Highest Number :'.$max.'<br>'; 
    
        }


        $sqli = "INSERT INTO boporders (bid, pid, dod, tid)
                     SELECT bid, pid, datee, $max FROM bmycart WHERE bid = '$bid'";
        $sqlii = "DELETE FROM bmycart WHERE bid = '$bid'";

        
        $result1 = mysqli_query($conn, $sqli);
        $result2 = mysqli_query($conn, $sqlii);

        if($result1&&$result2)
        {
            $_SESSION['tid'] = "$max";
            header('Location: ./bsuccess.php');
        }
        else {
            echo $result->mysqli_error();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
        <style>
            body{
                font-family: sans-serif;  
                background-image:linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)), url(future.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom;
                height: 97.5vh;
            }
            .container{
                top:50%;
                left:50%;
                width:44%;
                position:absolute;
                transform: translate(-50%,-50%);
            }
            .card{
                padding:10px 10px 30px 10px;
                box-sizing: border-box;
                background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), position:absolute ,url(future.jpg);
                box-sizing: border-box;
                box-shadow: 8px 8px 50px #000;
                border-radius: 10px;
            }
            .h1{
                text-align: center;
	            color:  rgb(244, 245, 179);
	            font-size: 16px;
                font-family: 'Times New Roman', Times, serif;
                letter-spacing: 2px;
            }
            #name{
                width:200px;
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                color: rgb(254, 255, 254);
            }
            #cvv{
                width:200px;
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(254, 255, 254);
            }
            #city{
                width:200px;
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(254, 255, 254);
            }
            #mobile{
                width:200px;
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(254, 255, 254);
            }
            #email{
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(254, 255, 254);
            }
            #pincode{
                width:200px;
                border:none;
                font-size: 20px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                color: rgb(234, 240, 234);
            }
            #addr{
                border:none;
                font-size: 18px;
                background:transparent;
                border-bottom:1px solid white;
                padding:6px;
                margin-left: 50px;
                margin-top: 30px;
                margin-bottom: 30px;
                color: rgb(254, 255, 254);
            }
            #button{
                font-size: 16px;
                position: relative;
                border-radius:30px;
                padding:10px 15px 10px 17px;
                background: rgb(165, 157, 42);
                color:wheat;
                margin-top: 30px;
                border: none;
                outline: none;
                letter-spacing: 3px;
                margin-left: 85px;
                box-shadow:  8px 8px 50px #000;
                cursor:pointer;
            }
            
            #button:hover{
                background: #babd13;
	            color: wheat;
	            box-shadow:  0 0 5px #babd13,
	                         0 0 10px   #babd13,
	                         0 0 15px    #babd13,
	                         0 0 20px   #babd13;
            }
            .buttonrow{
                display: flex;
            }
            a.but1{
                color: rgba(0, 0, 0, 0.8);
                margin-left: 270px;
                padding: 6px 10px;
                text-decoration: none;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 1px;
                text-transform: uppercase;
                background:  rgba(248, 252, 0, 0.7);
                border-radius: 6px;
            }
            a.but1:hover{
                background: rgb(217, 255, 0);
                border-radius: 6px;
                box-shadow: 0 0 5px rgb(217, 255, 0),
                            0 0 10px rgb(217, 255, 0),
                            0 0 15px rgb(217, 255, 0),
                            0 0 20px rgb(217, 255, 0);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="h1"><h1>DELIVERY DETAILS</h1></div>
                <form method="post" action="bonlinepay.php?pid=<?= $pid; ?>">
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
                        <?php endwhile;	?>
					<input type="hidden" name="cost" value="<?php echo number_format($gtotal, 2); ?>" required/>
                    <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                    <input type="text" name="city" id="city" value="" placeholder="City" required/>
                    <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                    <input type="text" name="pincode" id="pincode" value="" placeholder="Pincode" required/>
                    <input type="email" name="email" id="email" value="" placeholder="Email" style="width:80%" required/>
                    <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/><br>
                    <input type="reset" value="RESET" id="button">
                    <input type="submit" value="CONFIRM ORDER" name="submit" id="button">
                </form>
            </div><br>
            <div class="buttonrow">
                <a href="bcarddetailsok.php?pid=<?= $pid; ?>" class="but1"><span class="glyphicon glyphicon-shopping-cart">Back</a>
            </div>
        </div>
    </body>
</html>