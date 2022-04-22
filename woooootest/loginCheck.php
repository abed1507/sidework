<?php
if(empty($_POST["uname"]) || empty($_POST["psw"])){
	header('Location: index.html');
}

include("ConnectDB.php");

$passCript = md5($_POST["psw"]); 
$usern = ($_POST["uname"]);

$sql = "SELECT * FROM `users` 
			WHERE `username`='$usern' AND `password`='$passCript'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)!=1)
{
	echo ' <h1>Username or password is wrong. </h1>
		 <br />"';
	exit();
}
	
	// if (mysqli_num_rows($result) > 0) {
    // // output data of each row
	// 	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
	// 		echo "password: " . $row["password"]. " - net_id: " . $row["net_id"] . "<br>";
	// 		echo $row['salt_value'];
			
	// 		$hash = hash('sha256', $row['salt_value'] . hash('sha256', $pass_word1)) ;
	// 		$hash1=substr($hash, 0, -14);
				
	// 			if($hash1 != $row['password']) // Incorrect password. So, redirect to login_form again.
    //             {
	// 			  header('Location: index.html');
    //    		    } 	
	// 		else 
	// 		{
				//echo " matched";
				
	// 			$sql1 = "select * from users where users.net_id='".$username."'";
	          
	//              $result1 = mysqli_query($conn, $sql1);
	// 			 $row1= mysqli_fetch_array($result1,MYSQLI_ASSOC);
				 
	// 			 if($row1['u_role']=='administrator') {
	// 				  echo "admin page";
	// 				  header('Location: admin/welcomeAdmin.html'); //redirects to Admin HomePage
	// 			 } else {
	// 			    echo "student";
	// 				session_regenerate_id();
	// 				$_SESSION['sess_username'] = $username;
	// 				$_SESSION['sess_name'] = $name;
	// 				session_write_close();
	// 				header('Location: user/welcome.html'); //redirects to Student HomePage
    //               }
	// 		}
	// } else {
	// 	//echo "not retrieved";
	// 	header('Location: index.html');
	// }
	
	// session_write_close();
	
	session_start();

	$_SESSION["user"] = $usern;
	$_SESSION["pass"] = $passCript;
	$_SESSION["uniqueId"] = session_id();
	$_SESSION["userid"] = $row["d_id"];
	$_SESSION["contact"] = $row["contact"];
	$_SESSION["department"] = $row["department"];
	$_SESSION["email"] = $row["email"];
	$_SESSION["lname"] = $row["lastName"];
	$_SESSION["fname"] = $row["firstName"];
	$_SESSION["gender"] = $row["gender"];
header("location: welcome.php");

?>
