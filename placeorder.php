<?php
    require 'porder.php';

 $sql = "INSERT INTO `billing_details`(`first_name`, `last_name`, `state/country`, `street_addr`, `town`, `postcode`, `phone`, `email`) 
    VALUES ('".$first_name."','".$last_name."','".$state."','".$street."','".$town."','".$zip."',".$contact.",'".$email."')";

if (mysqli_query($conn, $sql)) {
  header("Location:checkout_kastu.php");

}else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}

mysqli_close($conn);

?>