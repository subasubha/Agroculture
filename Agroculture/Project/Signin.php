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
        $category = ($_POST['category']);

        if($category == 1)
        {
            $sql = "SELECT * FROM farmer WHERE funame='$uname'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
    
            if($num_rows == 0)
            {
                $_SESSION['message'] = "Invalid User Credentialss!";
                header("location: error.php");
            }
            else
            {
                $Uname = $result->fetch_assoc();

                if ($_POST['pass'] == $Uname['fpassword'])
                {  
                    $_SESSION['id'] = $Uname['fid'];
                    $_SESSION['pass'] = $Uname['fpass'];
                    $_SESSION['Password'] = $Uname['fpassword'];
                    $_SESSION['Email'] = $Uname['femail'];
                    $_SESSION['Name'] = $Uname['fname'];
                    $_SESSION['Uname'] = $Uname['funame'];
                    $_SESSION['Mobile'] = $Uname['fmobile'];
                    $_SESSION['Accno'] = $Uname['faccno'];
                    $_SESSION['Addr'] = $Uname['faddr'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['Category'] = 1;

                    $_SESSION['message'] = "Welcome Back! , See whats new Today and Enjoy your Trade.";
                    header("location: fmenu.php");
                }
                else
                {
                    //echo mysqli_error($conn);
                    $_SESSION['message'] = "Invalid User Credentials!"; 
                    header("location: error.php");
                }
            }
        }
        else
        {
            $sql = "SELECT * FROM buyer WHERE buname='$uname'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
    
            if($num_rows == 0)
            {
                $_SESSION['message'] = "Invalid User Credentialss!";
                header("location: error.php");
            }
            else
            {
                $Uname = $result->fetch_assoc();

                if ($_POST['pass'] == $Uname['bpassword'])
                {
                    $_SESSION['id'] = $Uname['bid'];
                    $_SESSION['pass'] = $Uname['bpass'];
                    $_SESSION['Password'] = $Uname['bpassword'];
                    $_SESSION['Email'] = $Uname['bemail'];
                    $_SESSION['Name'] = $Uname['bname'];
                    $_SESSION['Uname'] = $Uname['buname'];
                    $_SESSION['Accno'] = $Uname['baccno'];
                    $_SESSION['Mobile'] = $Uname['bmobile'];
                    $_SESSION['Addr'] = $Uname['baddr'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['Category'] = 1;
                    $_SESSION['Rating'] = 0;

                    $_SESSION['message'] = "Welcome Back! , See whats new Today and Enjoy your Shoping.";
                    header("location: bmenu.php");
                }
                else
                {
                    //echo mysqli_error($conn);
                    $_SESSION['message'] = "Invalid User Credentials!";
                    header("location: error.php");
                }
            }
        }
    }
?>