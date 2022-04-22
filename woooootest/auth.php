<?php
session_start();

if($_SESSION["uniqueId"]!=session_id())
{
	echo ' Unautherized access! <br />
		<a href="index.php"> Please LogIn </a> ';
		exit();
}

include("ConnectDB.php");
$passCript = $_SESSION["pass_cript"];
$usern = $_SESSION["user"];

$sql = "SELECT * FROM users 
			WHERE username='$usern' AND password='$passCript'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	echo 'Unautherized access! 
		 <br /><a href="index.php"> Back to Login </a>"';
	exit();
}

?>