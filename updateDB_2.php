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
$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'masterclasses';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$tnt=$_REQUEST['first'];
		$tst=$_REQUEST['surname'];
		$em=$_REQUEST['email'];
		$user_a=$_REQUEST['user_a'];
		$pass=$_REQUEST['password'];
		$xp=$_REQUEST['expe'];
		$avl=$_REQUEST['ava'];
	$sql ="INSERT INTO tutor(tut_first,tut_last,tut_email,tut_uid,tut_pwd,special,avaliable)
	VALUES('$tnt','$tst','$em','$user_a','$pass','$xp','$avl')"; 
// use exec() because no results are returned 
	$conn->exec($sql);
	echo "New record created successfully";
	print("<button id='btn_edit_3'><a class='edit_link'href='home.php'>Back</button></a>");

	//print "<p>Thank you ".$_POST['firstname'].", your application to be a tutor has been sent and will be reviewed by the admissions team</p>";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//} 
$conn = null;
//require_once "dbus.php";
//if (isset($_GET['appid'])&&isset( $_GET['first']) && isset( $_GET['surname']) && isset( $_GET['email']) && isset( $_GET['exp']) && isset( $_GET['spec']) && isset( $_GET['ava'])&&isset($_GET['user_a'])&&isset($_GET['password'])) {
  //print "ok";
//} 
//else {
  //print "not ok";
//}



//$pdo = connect();

//$data = $pdo->exec( $sql);

//if ($data)
//{
	//echo "Record updated secessfuly.";
	//print("<button id='btn_edit_3'><a class='edit_link'href='home.php'>Back</button></a>");
//}
//else 
//{
//	echo "Record not updated!";
//}  
?>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>