<?php
/*$dbusername = 'Farhan';
  $dbpassword = 'Farhan3712356';
  $hostname = 'localhost';
  $dbname = 'masterclasses';
  //$dbhandle=mysqli_connect($hostname,$dbusername,$dbpassword) or die('Could not connect to the database');
  //$dbhandle=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname) or die("could not connect to database");
 
  $dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="masterclasses";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);
  //$selected=mysqli_select_db("masterclasses",$dbhandle);
*/
$dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="masterclasses";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);  
  if(isset($_POST['submit'])){
  $user=$_POST['uid'];
  $firstname = $_POST['first'];
   $surname = $_POST['last'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['pwd'];
  //$email=$_POST['email'];
  
  $sql="SELECT * FROM users WHERE user_uid='$user'";// or email='user_email'");
  $q_3="SELECT * FROM users WHERE user_email='$email'";
  $result=mysqli_query($conn,$sql);
  $res=mysqli_query($conn,$q_3);
  if(mysqli_num_rows($result)>0){
	  //echo'username already exist';
	  	  //print "<p>Username ".$_POST['uid']."</p>";
		print "<p>Username ".$_POST['uid'].", already exists!</p>";
  }elseif(mysqli_num_rows($res)>0){
	  //echo'You already have a account';
	  print "<p>You already have a account ".$_POST['email']."</p>";

  }else{
	$sql_2="INSERT into users(user_first,user_last,user_email, user_uid,user_pwd)
	values('$firstname','$surname','$email','$user','$password')";
	mysqli_query($conn,$sql_2);
	//values('$firstname','$surname','$email','$user','$password');");
		header("location:loginindex.php");
  }
  }
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>MasterClasses</title><!--Display as site tab title-->
<link rel="shortcut icon" type="image/x-icon" href="images/master.ico"> <!--adds a image to the title to display in the tab-->
<link rel="stylesheet" type="text/css" href="masterclass_style.css">
			<!-- link css and html-->
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<!--make the webpage fit the screen-->

</head>
<div class="dif">
<body>

<a href="index.html"><img class="logo" src="images/masterclasses_2.jpg" alt="Logo" title="return to mainpage"></a>
<h1 id="no_head">Master</h1>
<br><br><br><br></div>

<div class="navbar">
<a href="index.html">Home</a>
<a href="classes.php">Classes</a>
<a href="about.html">About</a>
<a href="apply.html">Apply</a>
<div class="login"><a href="loginindex.php">Login</a></div>
</div>
<h2 class="title">MasterClasses</h2>
<div class="edt">
<form action="new_user.php" method="POST">
<input type="text" name="first" placeholder="Firstname" required>
<br>
<input type="text" name="last" placeholder="Lastname" required>
<br>
<input type="text" name="email" placeholder="E-mail" required>
<br>
<input type="text" name="uid" placeholder="Username" required>
<br>
<input type="password" name="pwd" placeholder="Password" required>
<br>
<button id="btn" type="submit" name="submit">Sign up</button>
<button id="btn"><a class="edit_link" href="loginindex.php">Login</a></button>

</form></div>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>