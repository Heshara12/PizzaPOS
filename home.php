<?php

include("header.php");
session_start();

$user = $_SESSION['user'];
$role = $_SESSION['role'];

if(!$user==null){
	echo "Welcome ".$user;
	if($role ==1){
		echo "<br>You have logged in as admin";	
	}
	else{
		echo "<br>You have logged in as user";	
	}
	echo "<br>";
	echo "<a href='logout.php'>Log Out </a>";
}

else {
header("Location:index.php?error=Please login to continue");
}

?>