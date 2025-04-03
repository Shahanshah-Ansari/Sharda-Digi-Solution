<?php
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
$tpassword=$_POST["tpassword"];
$query="INSERT INTO `user-pass`(`tpassword`) VALUES ('$tpassword')";
if (!$conn) {

    echo "Connection failed!";
}else{
    mysqli_query($conn,$query);
    echo "<script>alert('Applied Successfully')</script>";
    header("Location:index.html");
}
?>