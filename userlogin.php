<?php
session_start();
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
    $username=$_POST["username"];
    $ypassword=$_POST["ypassword"];
    $query="SELECT * FROM userlogin WHERE username='$username' AND ypassword = '$ypassword'";
    if (!$conn) {
        echo "Connection failed!";
    }else{
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('Applied Successfully')</script>";
            header("Location:connect.php");
        }
    }
    ?>
?>
