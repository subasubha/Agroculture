<?php session_start();
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "agroculture";

        $conn = mysqli_connect($hostname, $username, $password, $dbName) or die("Connection failed !!!... ");

        if(isset($_POST['submit']))
        {
            $uname = ($_POST['uname']);
            $pass =	($_POST['pass']);

            $sql = "SELECT * FROM admin WHERE uname='$uname'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
    
            if($num_rows == 0)
            {
                $_SESSION['message'] = "Invalid Username!";
                header("location: error.php");
            }
            else
            {
                $Uname = $result->fetch_assoc();

                if ($_POST['pass'] == $Uname['pass'])
                {
                    $_SESSION['logged_in'] = true;  
                    
                    header("location: ./panel.php");
                }
                else
                {
                    //echo mysqli_error($conn);
                    $_SESSION['message'] = "Invalid Password!"; 
                    header("location: error.php");
                }
            }
        }
        ?>