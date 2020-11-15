
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
<h2 class="title">MasterClasses</h2>
<?php
//session_start();
$dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="masterclasses";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);


  //if(isset($_POST['submit'])){
  $user= $_POST['uid'];
  $pass= $_POST['pwd'];
  //session_start();
  //$login=$user =$pass;
  
  $sql="SELECT * FROM users WHERE user_uid='$user' AND user_pwd='$pass'";
  $sql_1="SELECT * FROM employee WHERE user_uid='$user' AND user_pwd='$pass'";
  $sql_2="SELECT * FROM tutor WHERE tut_uid='$user' AND tut_pwd='$pass'";
  
  $result=mysqli_query($conn,$sql);
  $res=mysqli_query($conn,$sql_1);
  $result_2=mysqli_query($conn,$sql_2);
  //$row=mysqli_fetch_array($sql_1);
  
  $count=mysqli_num_rows($result);
  $count_2=mysqli_num_rows($res);
  $count_3=mysqli_num_rows($result_2);
  mysqli_close($conn);
  if($count==1){
  //if(mysqli_num_rows($result)==1){
	  //echo'username already exist';
	  	  //print "<p>Username ".$_POST['uid']."</p>";
		header("location:user_home.php");
  }elseif($count_2==1){
  //elseif($row['user_uid'] == $user && $row['user_pwd']==$pass){
	  //echo'You already have a account';
	  //$_SESSION['user'] = $count[0]['user_uid'];
	  header ('location:home.php');

  }elseif($count_3==1){
  //elseif(mysqli_num_rows($result_2)>0){
	  header("location:tutor_home.php");
  }else{
	  //header("location:mistake.php");
	echo"Either username or password do not match please try again";
	echo"<button id='btn_edit_4' ><a class='edit_link'href='loginindex.php'>return to Login</button></a>";
  }
  //}
  //mysqli_close();
?>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>