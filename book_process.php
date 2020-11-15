<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>MasterClasses-Classes</title><!--Display as site tab title-->
<link rel="shortcut icon" type="image/x-icon" href="images/master.ico"> <!--adds a image to the title to display in the tab-->
<link rel="stylesheet" type="text/css" href="masterclass_style.css">

			<!-- link css and html-->
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<!--make the webpage fit the screen-->
<style>
ul{
	list-style-type:none;
	margin:0;
	padding:0;
}
.edit_link_5{
	/*remove underline from site link*/
	text-decoration:none;
	color:black;
}
</style>
</head>

<body>

<div class="dif">
<a href="index.php"><img class="logo" src="images/masterclasses_2.jpg" alt="Logo" title="return to mainpage"></a>
<h1 id="no_head">Master</h1>
<br><br><br><br></div>

<div class="navbar">
<a href="index.php">Home</a>
<a href="classes.php">Classes</a>
<a href="about.html">About</a>
<a href="apply.php">Apply</a>
<div class="dropdown" style="float:right;">
<div class="login">Welcome</div>
<!--<div class="login"><?php print"<p>Welcome ".$_POST['uid']."</p>";?></div>-->
<div class="dropdown-content">
	
	  <a href="">Settings</a>
      <a href="logout.php">Log out</a>
      

</div></div></div>

<?php
$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'masterclasses';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$cli=$_REQUEST['classid'];
		$tt=$_REQUEST['title'];
		$des=$_REQUEST['description'];
		$lec=$_REQUEST['lecturer'];
		$cld=$_REQUEST['date'];
		$clt=$_REQUEST['time'];
		$user=$_REQUEST['user_n'];
		$usn=$_REQUEST['name'];
	 $sql = "INSERT INTO bookings 
  (courseid, title, description, tutor, course_date, course_time, studentname, username)
  VALUES
   ('$cli','$tt', '$des', '$lec', '$cld', '$clt', '$user', '$usn')"; 
// use exec() because no results are returned 
	$conn->exec($sql);
	print('You have booked a class');
print("<button id='btn_edit_3'><a class='edit_link'href='classes.php'>Back</button></a>");


	//print "<p>Thank you ".$_POST['firstname'].", your application to be a tutor has been sent and will be reviewed by the admissions team</p>";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//} 
$conn = null;
?>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>