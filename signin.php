<?php

if(isset($_POST["s"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food fun";

session_start();

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$pass=$_POST['psw1'];
$email=$_POST['email'];
$contact=$_POST['contact'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $sql = "INSERT INTO `sign up`(`fname`, `lname`, `email`, `password`, `contact`)
    VALUES ('".$first_name."','".$last_name."','".$email."','".$pass."',".$contact.")";

if (mysqli_query($conn, $sql)) {
  header("Location:index1.php");
$_SESSION["name"] = $email;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

}else{
	header("Location:login.html");
}
?>