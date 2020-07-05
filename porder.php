<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food fun";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$state=$_POST['con'];
$street=$_POST['street'];
$town=$_POST['tow'];
$zip=$_POST['zip'];
$contact=$_POST['phone'];
$email=$_POST['email'];

}else{
    echo "Error";
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());  
}


?>