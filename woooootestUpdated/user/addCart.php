<?php
include("auth.php");

include("ConnectDB.php");
// $servername = "localhost";
// $dbusername = "root";
// $dbpassword = "root";
$net_id= $_SESSION['user'];

// Create connection
// $conn = mysqli_connect($servername, $dbusername, $dbpassword,'dbtest1');

$c_id = $_POST["c_id"];

$result = mysqli_query($conn,"INSERT INTO user_cart(net_id, c_id) VALUES ('$net_id',$c_id)");

if($result)	{
	echo "success";
} else {
	echo "Error";
}

?>
