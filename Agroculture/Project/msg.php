<?php

$fb = $_POST["fb"];

if(!empty($fb))
{
    $host = "localhost";
    $dbuserame = "root";
    $dbpassword = "";
    $dbname = "agroculture";

    $conn = mysqli_connect($host, $dbuserame, $dbpassword, $dbname) or die("Connection failed");

    $sql = "INSERT INTO feedback (message)
                VALUES ('$fb')";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("Location:Feedback.php");
    }
}
else{
    echo "Please type Something!";
}
?>