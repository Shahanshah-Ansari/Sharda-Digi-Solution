<?php 
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
$plan=$_POST["plan"];
$owner=$_POST["owner"];
$number=$_POST["number"];
$email=$_POST["email"];
$pincode=$_POST["pincode"];
$qualification=$_POST["qualification"];
$address=$_POST["address"];
$state=$_POST["state"];
$city=$_POST["city"];
$query="INSERT INTO `franchiserequest`(`plan`, `owner`, `number`, `email`, `pincode`, `qualification`, `address`, `state`, `city`) VALUES ('$plan','$owner','$number','$email','$pincode','$qualification','$address','$state','$city')";
if (!$conn) {

    echo "Connection failed!";

}else{
    mysqli_query($conn,$query);
    echo "<script>alert('Applied Successfully')</script>";
    header("Location:Proceed.php");
}
?>