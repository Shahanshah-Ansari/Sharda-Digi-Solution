<?php
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
$owner=$_POST["owner"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$number=$_POST["number"];
$pincode=$_POST["pincode"];
$address=$_POST["address"];
$state=$_POST["state"];
$city=$_POST["city"];
$qualification=$_POST["qualification"];
$exp=$_POST["exp"];
$query="INSERT INTO `user-job`(`owner`, `contact`, `email`, `number`, `pincode`, `address`, `state`, `city`, `qualification`, `exp`) VALUES ('$owner','$contact','$email','$number','$pincode','$address','$state','$city','$qualification','$exp')";
if (!$conn) {

    echo "Connection failed!";

}else{
    mysqli_query($conn,$query);
    echo "<script>alert('Applied Successfully')</script>";
    header("Location:index.html");
}
?>