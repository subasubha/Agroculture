<?php
 	session_start();
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $dbName = "agroculture";
 
     $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");
 

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];

		$sql = "INSERT INTO fproduct (fid, product, pcat, pinfo, price)
			   VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: ./ferror.php");
		}
		else {
			
		}

		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		$picExt = explode('.', $picName);
		$picActualExt = strtolower(end($picExt));
		$allowed = array('jpg','jpeg','png');

		if(in_array($picActualExt, $allowed))
		{
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE fproduct SET picStatus=1, pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{

					header("Location: ./fproductMenu.php?n=1");
				}
				else
				{
					//die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: ./ferror.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: ./ferror.php");
			}
		}
		else
		{
			$_SESSION['message'] = "You cannot upload files with this extension!!!";
			header("Location: ./ferror.php");
		}
	}

	function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com/Farmer : <?php echo $_SESSION['Uname'] ?></title>
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
                height: 80px;
                padding: 20px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.6);
            }
            .logo{
                padding: 5px 30px;
                padding-right: 410px ;
                height: 50px;
                float: left;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: 5px;
                text-transform: uppercase;
            }
            .logo a{
                text-decoration: none;
                color:rgb(164, 124, 202)
            }
            .logo a:hover{
                color:rgb(66, 3, 124);
            }
            .top_nav ul{
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .top_nav ul li a{
                line-height: 40px;
                color:#fff;
                padding: 6px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: bold;
                letter-spacing: 1px;
            }
            .top_nav ul li a:hover{
                background: rgb(194, 192, 192);
                color: black;
                border-radius: 6px;
            }
            .top_nav ul li a.active{
                background: #2fe27a;
                color: black;
                font-size: 14px;
                border-radius: 6px;
            }
            .backg{
                width: 100%;
                height: 220vh;
                background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('lk2.jpg');
                background-size: cover;
            }
            .h1{
                text-align: center;
	            color:rgb(122, 51, 33);
                font-size: 40px;
                padding-top:100px;
                margin-bottom:100px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                -webkit-text-stroke-width: 1.5px;
                -webkit-text-stroke-color: rgb(185, 117, 97);
                letter-spacing: 3px;
            }
            .file{
                text-align: center;
                font-weight: bold;
	            color:rgb(122, 167, 0);
                font-size: 24px;
                margin-left: 200px;
                margin-bottom:100px;
                font-family:sans-serif;
                letter-spacing: 1px;
                cursor:pointer;
            }
            .file::-webkit-file-upload-button{
                background-color:rgb(157, 214, 0);
                color:rgb(82, 112, 0);
                border: 2px solid rgb(82, 112, 0);
                padding: .2em .8em;
                border-radius: .4em;
                cursor:pointer;
            }
            .file::-webkit-file-upload-button:hover{
                background-color:rgb(82, 112, 0);
                color:rgb(157, 214, 0);
                border: 2px solid rgb(157, 214, 0);
            }
            .option{
                background-color:rgb(65, 43, 90);
                color:rgb(156, 75, 223);
            }
            .textarea{
                outline:none;
                margin-left: 300px;
                margin-bottom: 30px;
            }
            .buttonfit{
                color:rgb(233, 163, 204);
                margin-left: 610px;
                padding: 6px 12px;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-decoration: none;
                font-size: 18px;
                font-weight: bold;
                letter-spacing: 4px;
                text-transform: uppercase;
                background:rgb(170, 30, 107);
                border-radius: 17px;
                border-width:2px;
                border-color:rgb(233, 163, 204);
                cursor:pointer;
            }
            .buttonfit:hover{
                background:rgb(83, 21, 55);
                border-color:rgb(233, 163, 204);
                color:rgb(233, 163, 204);
            }
            .buttonrow{
                display: flex;
            }
            
            #pname::placeholder{
                color:rgb(109, 53, 2);
            }
            #price::placeholder{
                color:rgb(150, 26, 26);
            }
            #pinfo::placeholder{
                color:rgb(50, 117, 53);
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="top_nav">
                <div class="logo"><a href="fmenu.php">AGROCULTURE</a></div>
                <ul>
                    <li><a href="fmenu.php">Home</a></li>
                    <li><a href="fprofile.php">Profile</a></li>
                    <li><a class="active" href="uploadproduct.php">Add Products</a></li>
                    <li><a href="fproductMenu.php?n=1">Market</a></li>
                    <li><a href="fmyCart.php">My Cart</a></li>
                </ul>
            </div>
            <section class="backg">
				<form method="POST" action="uploadProduct.php" enctype="multipart/form-data">
					<div class="h1"><h1>Upload Your Products Here</h1></div>
						<br>
				<center>
					<input type="file" name="productPic" class="file" required></input>
					<br><br>
				</center>
					  <div class="select-wrapper">
							  <select name="type" class="type" required style="cursor: pointer; margin-left: 290px; padding: .2em .4em; font-size: 30px; border-radius: 3px; background-color:rgb(156, 75, 223); color: rgb(65, 43, 90);">
								  <option value="" class="option">- Category -</option>
								  <option value="Fruit" class="option">Fruit</option>
								  <option value="Vegetable" class="option">Vegetable</option>
								  <option value="Grains" class="option">Grains</option>
							  </select>
                              <input type="text" name="pname" id="pname" value="" placeholder="Product Name" required style="outline:none; text-align: center; margin-left: 200px; border-width: 3px; padding: .3em .1em; font-size: 30px; border-radius: 7px; background-color:rgba(168, 91, 47, 0.884); border-color:rgb(182, 73, 0); color:rgb(141, 45, 0);" />
					</div>
				<br><br><br><br><br><br><br>
				<div class="textarea">
					<textarea  name="pinfo" id="pinfo" rows="10" placeholder="Say Something About Your Product..!!!" required style="outline:none; width: 70%; border-width: 3px; border-radius:7px; border-color:rgb(0, 136, 7); background-color: rgba(165, 248, 149, 0.801); font-size: 28px; color: rgb(27, 116, 0);"></textarea>
				</div>
			<br><br><br>
			<div class="row">
				<div class="col-sm-6">
					  <input type="text" name="price" id="price" value="" placeholder="Price" required style="outline:none; text-align: center; margin-left: 620px; border-width: 3px; border-radius:7px; border-color:rgb(223, 0, 0); font-size: 20px; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 10px; width:5%; background-color:rgb(214, 94, 94); color:rgb(172, 0, 0);" />
				</div><br><br><br><br><br>
				<div class="col-sm-6">
					<button class="buttonfit">Submit</button>
				</div>
			</div>
			</form>
		<script>
			 CKEDITOR.replace( 'pinfo' );
		</script>
            </section>
        </div>
        
    </body>
</html>