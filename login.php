<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food fun";


session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$email= $_POST['uname'];
$pass= $_POST['psw'];


$sql = ("SELECT * FROM `sign up`");
$result = $conn->query($sql);

$n= $result->num_rows;


if ($n > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$eid=$row["email"];
		$p=$row["password"];
        
        if($email == $eid && $pass == $p){
			
            header("Location:index1.php");
			$_SESSION["name"] = $email;
			$_SESSION["id"]=$row["id"];
            break;
        }else{
			
			header("Location:index.html");
			;
		}			
        
    }
} else {
    echo "0 results";
}
?>

















