<?php
//check if user has clicked the signup button
if (isset($_POST['submit'])){
	//connect to the database
	include_once'dbh.php';
	//get data from form
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];
	
	//check inputs are valid
	if (empty($first) || empty($last)|| empty($email)|| empty($uid)|| empty($pwd)){
		header("Location: ../index3.php?signup=empty");
		exit();
	}else{
		//check if input chars are valid
		if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last)){
			header("Location: ../index3.php?signup=char");
			exit();
		}else{
		//check if email valid
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../index3.php?signup=email&first=$first&last=$last&uid=$uid");
			exit();
		}else{
			header("Location: ../index3.php?signup=success");
			exit();
		}
	}}
}else{
	header("Location: ../signupindex.php");
	exit();
}