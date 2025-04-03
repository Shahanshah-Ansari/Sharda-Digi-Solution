<?php
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
$owner=$_POST["owner"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$aadhar=$_POST["aadhar"];
$pan=$_POST["pan"];
$state=$_POST["State"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$address=$_POST["address"];
$query="INSERT INTO `user-regs`(`owner`, `contact`, `email`, `aadhar`, `pan`, `state`, `city`, `pincode`, `address`) VALUES ('$owner','$contact','$email','$aadhar','$pan','$state','$city','$pincode','$address')";
if (!$conn) {

    echo "Connection failed!";

}else{
    mysqli_query($conn,$query);
    header("Location:index.html");
}
?>