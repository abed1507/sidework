<?php
include("ConnectDB.php");


if(isset($_POST["register"]))
{
	$firstName = $_POST["fname"];
	$lastName = $_POST["lname"];
	$gender = $_POST["gender"];
	$department = $_POST["department"];
	$contactNr = $_POST["contact"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$passCript = md5($_POST["password"]);
	
	$sql = "SELECT * FROM `users`
			WHERE `username`='$username'";
$sql2 = "SELECT * FROM `users`
WHERE `email`='$email'";
$result2 = mysqli_query($conn,$sql2);
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)!= 0)
{  echo ' <h3>The Username has already been taken, please choose a different name <br/> 
    </h3>';
	exit();
}
if(mysqli_num_rows($result2)!= 0)
{  echo ' <h3>The Email has already been taken.
    </h3>';
	exit();
}
$sql3 = "INSERT INTO `users` (`d_id`, `username`, `password`, `contact`, `department`, `email`, `firstName`, `lastName`, `gender`)
VALUES (NULL, '$username', '$passCript', '$contactNr', '$department' ,'$email', '$firstName', '$lastName', '$gender')";

mysqli_query($conn, $sql3);
header("Location: welcome.html");}

// $salt = createSalt();
// function createSalt()
// {
//     $text = md5(uniqid(rand(), TRUE));
//     return substr($text, 0, 3);
// }


// $hash1 = hash('sha256', $salt . $hash);

// $result = mysqli_query($conn,"SELECT net_id from user_login where net_id = '$username'");

// if (mysqli_num_rows($result) == 0) {
	
// 	$result1 = mysqli_query($conn,"SELECT phone from users where email = '$email'");
// 	echo $email;
// 	if (mysqli_num_rows($result1) == 0) {
// 			echo "About to insert";
// 		$sql="INSERT INTO users (net_id, firstname, lastname,email,d_id,u_role,phone,gender) VALUES
// 			('$username', '$fname', '$lname', '$email','$deptid', 'student','$phone', '$gender')";

// 			$sql1="INSERT INTO user_login (net_id, password,salt_value) VALUES
// 			('$username', '$hash1', '$salt')";

// 			if(!mysqli_query($mysqli,$sql) || !mysqli_query($mysqli,$sql1)){
// 				header('Location: index.html');
// 			} else {
// 				session_regenerate_id();
// 				$_SESSION['sess_username'] = $username;
// 				session_write_close();
// 				header('Location: user/welcome.html');
// 			}
// 	} else {
// 			header('Location: index.html');
// 	}
// } else {
// 	header('Location: index.html');
// }

 

// mysqli_close($mysqli);		



?>
