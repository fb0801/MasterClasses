<?php 
  require_once( 'includes/dbutils.php');
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


<body>
<h2 class="title">MasterClasses Registration</h2>

<form action="signup.php" method="POST">
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
<button id="btn" type="submit" name="submit">Sign up</button><br>
<button id="btn" ><a class="edit_link"href="loginindex.php">Login</button></a>
<!--<button id="btn" ><a class="edit_link"href="login.php">Employee Login</button></a>-->


</form>
<?php
/*if (isset ($_POST['email']))
{
	$rec=$_POST['email'];
	$query=mysql_query("select email from users where email='$rec'");
	if(mysql_num_rows(query)==0){
		$rec=
	}
}
$q=select 'email' from 'users' where(email='$email')"
$q_run=mysql_query($q);
if(mysql_num_rows($q_run)==1){
	echo"A account already exist";
}
if (isset ($_POST['submit']))
{
$user=$_POST['email'];
$check= mysql_query("select user_email from users where user_email='email'");
if (!check){
	die('failed to execute');
}
if (mysql_num_rows($check)>0){
	echo "You have a account already";
}}*/
/*$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'masterclasses';

$q_email=$_POST['email'];
$q_user=$_POST['user']; 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql=$conn->prepare("SELECT user_uid,user_email from users where user_email='$q' OR user_uid='$q_user'");

	// use exec() because no results are returned 
	$conn->exec($sql);
	echo "You have a account already!";
}
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	 }
    
$conn = null;
	/*header("location:loginindex.php");
    }*/
/*$q_email=$_POST['email'];
$q_user=$_POST['user'];    
$sql=mysql_query("SELECT user_uid,user_email from users where user_email='$q' AND user_uid='$q_user'");
if(mysql_num_rows($sql)>0){
	echo "You have a account already!";
}else{
	mysql_query("INSERT into users(user_first,user_last,user_email, user_uid,user_pwd)
	values('$firstname','$surname','$email','$user','$password')";
	header("location:loginindex.php");
	)
}
mysql_close();*/

/*$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'masterclasses';
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['uid']) && isset($_POST['email'])){
	$q_email=$_POST['email'];
	$firstname = $_POST['first'];
    $surname = $_POST['last'];
    $password = $_REQUEST['pwd']; 
	$q_user=$_POST['uid'];
$stmt=$conn->prepare("SELECT * FROM users WHERE user_uid='$uid'OR user_email='$email'")
}
if(mysql_num_rows($stmt)>0){
	echo'Already exists';
}else{
	$sql= "INSERT into users(user_first,user_last,user_email, user_uid,user_pwd)
	values('$firstname','$surname','$email','$user','$password')";
	 // use exec() because no results are returned 
	$conn->exec($sql);
	print "<p>Thank you ".$_POST['first'].", you can now use the app</p>";
	index.html*/
/*    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    
$conn = null;
}
*/

?>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>