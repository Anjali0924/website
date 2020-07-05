<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food fun";

$first_name=$_POST['fname'];
$email=$_POST['email'];
$subject=$_POST['subj'];
$message=$_POST['msg'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $sql = "INSERT INTO `contactus`(`fname`, `email`, `subject`, `message`) VALUES ('".$first_name."','".$email."','".$subject."','".$message."')";

if (mysqli_query($conn, $sql)) {
  header("Location:contact1.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
