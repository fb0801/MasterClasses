<?php
	/*$sql="SELECT * FROM users WHERE user_first='Daniel';";*/
	include_once'dbh.php';
	
	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	
	
	
	$sql="INSERT into users(user_first,user_last,user_email, user_uid,user_pwd)
	values(?,?,?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){	
	
	echo "SQL error";
	} else{
		mysqli_stmt_bind_param($stmt, "sssss",$first,$last,$email,$uid,$pwd);
		mysqli_stmt_execute($stmt);
	}
//VALUES('$first','$last','$email','$uid','$pwd');";
	#$result=mysqli_query($conn,$sql);
	//mysqli_query($conn,$sql);


header("location: ../index.php?signup=success");