<?php session_start();        
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

    if(isset($_POST['submit']))
    {
        $name = ($_POST['name']);
        $mobile = ($_POST['mobile']);
        $uname = ($_POST['uname']);
        $email = ($_POST['email']);
        $password =	($_POST['password']);
        $pass =	($_POST['pass']);
        $accno = ($_POST['accno']);
        $category = ($_POST['category']);
        $addr = ($_POST['addr']);

        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $name;
        $_SESSION['Password'] = $pass;
        $_SESSION['Uname'] = $uname;
        $_SESSION['Mobile'] = $mobile;
        $_SESSION['Accno'] = $accno;
        $_SESSION['Category'] = $category;
        $_SESSION['Addr'] = $addr;
        $_SESSION['logged_in'] = true;

        if($category == 1)
        {
            if($password == $pass)
            {
                $sql = "SELECT * FROM farmer WHERE funame='$uname'";

                        $result = mysqli_query($conn, $sql) or die($mysqli->error());
            
                        if ($result->num_rows > 0 )
                    {
                        $_SESSION['message'] = "User with this username already exists!";
                        header("location: error.php");
                    }
                    else
                    {
                $sql = "SELECT * FROM farmer WHERE femail='$email'";

                        $result = mysqli_query($conn, $sql) or die($mysqli->error());
            
                        if ($result->num_rows > 0 )
                    {
                        $_SESSION['message'] = "User with this email already exists!";
                        header("location: error.php");
                    }
                    else
                    {
                        $sql = "INSERT INTO farmer (fname, funame, fpassword, fpass, faccno, fmobile, femail, faddr)
                                VALUES ('$name','$uname','$password','$pass','$accno','$mobile','$email','$addr')";
                                if(mysqli_query($conn,$sql))
                                {
                                    $sql = "SELECT * FROM farmer WHERE funame='$uname'";
                                    $result = mysqli_query($conn, $sql);
                                    $Uname = $result->fetch_assoc();
                                    $_SESSION['id'] = $Uname['fid'];
            
                                    $_SESSION['message'] = "You have Registered Sucessfully !!...Now you can Buy and Sell your Products.";
                                    header("Location:fmenu.php");
                                }
                                else 
                                {
                                    header("Location:error.php");
                                }
                            }
                        }
                }else{
                    $_SESSION['message'] = "Mismatch Password";
                        header("location: error.php");
                }
                
            }else
            {
                if($password == $pass)
            {
                $sql = "SELECT * FROM buyer WHERE buname='$uname'";
        
                $result = mysqli_query($conn,$sql) or die($mysqli->error());
        
                if ($result->num_rows > 0 )
                {
        
                    $_SESSION['message'] = "User with this username already exists!";
                    header("location: error.php");
                }
                else
                {
                $sql = "SELECT * FROM buyer WHERE bemail='$email'";
        
                $result = mysqli_query($conn,$sql) or die($mysqli->error());
        
                if ($result->num_rows > 0 )
                {
        
                    $_SESSION['message'] = "User with this email already exists!";
                    header("location: error.php");
                }
                else
                {
                    $sql = "INSERT INTO buyer (bname, buname, bpassword, bpass, baccno, bmobile, bemail, baddr)
                        VALUES ('$name','$uname','$password','$pass','$accno','$mobile','$email','$addr')";
                        if(mysqli_query($conn,$sql))
                        {
                            $sql = "SELECT * FROM buyer WHERE buname='$uname'";
                                    $result = mysqli_query($conn, $sql);
                                    $Uname = $result->fetch_assoc();
                                    $_SESSION['id'] = $Uname['bid'];

                            $_SESSION['message'] = "You have Registered Sucessfully !!...
                                                        Now you can Buy your Products.";
                            header("Location:bmenu.php");
                        }
                        else 
                        {
                            header("Location:error.php");
                        }
                    }
                }
            }
        else{
            $_SESSION['message'] = "Mismatch Password";
                header("location: error.php");
        }
    }
    }
?>