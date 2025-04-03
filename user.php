<?php
$servername= "localhost";
$username= "root";
$password = "";
$db_name = "sds database";
$conn = mysqli_connect($servername, $username, $password, $db_name);
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$message=$_POST['Message'];
$query="INSERT INTO `userinformation`(`firstname`, `lastname`, `email`, `mobile`, `message`) VALUES ('$firstname','$lastname','$email','$mobile','$message')";
if (!$conn) {

    echo "Connection failed!";

}else{
    mysqli_query($conn,$query);
    header("Location:contact-us.html");
}
?>