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
<body>
<div class="dif">
<a href="home.php"><img class="logo" src="images/masterclasses_2.jpg" alt="Logo" title="return to mainpage"></a>
<h1 id="no_head">Master</h1>
<br><br><br><br></div>

<div class="navbar">
<a href="home.php">Home</a>
<a href="class.php">Classes</a>
<a href="about.php">About</a>
<a href="application.php">Apply</a>
<div class="dropdown" style="float:right;">
<div class="login">Welcome</div>
<!--<div class="login"><?php print"<p>Welcome ".$_POST['uid']."</p>";?></div>-->
<div class="dropdown-content">
	
	  <a href="">Settings</a>
      <a href="logout.php">Log out</a>
      

</div></div></div>
<body>
<h2 class="title">MasterClasses</h2>
<?php
require_once "dbus.php";

if ( isset( $_GET['classid']) && isset( $_GET['title']) && isset( $_GET['description']) && isset( $_GET['lecturer']) && isset( $_GET['date']) && isset( $_GET['time'])&&isset($_GET['price'])) {
  print "ok";
} 
else {
  print "not ok";
} 

$cid = $_GET['classid'];
$tt = $_GET['title'];
$ds = $_GET['description'];
$lec = $_GET['lecturer'];
$dt = $_GET['date'];
$tm = $_GET['time'];
$cp=$_GET['price'];	
$pdo = connect();
$sql = "UPDATE course SET course_name='$tt', knowledge='$ds', tut_id='$lec', course_day='$dt', course_time='$tm',price='$cp' WHERE course_id='$cid'";
$data = $pdo->exec( $sql);
if ($data)
{
	echo "Record updated secessfuly.";
	print("<button id='btn_edit_3'><a class='edit_link'href='home.php'>Back</button></a>");
}
else 
{
	echo "Record not updated!";
} 

?>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>