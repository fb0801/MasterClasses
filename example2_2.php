<?php
require_once "includes/dbutils.php";
?>
<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>MasterClasses-Apply</title><!--Display as site tab title-->
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

<h2 class="title">MasterClasses Tutor Application</h2>



<?php

$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'masterclasses';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $details = $_POST['details'];
    $course = $_POST['name'];
	
	$sql = "INSERT INTO review (description,course_name)
      VALUES('$details', '$course')"; 
	 // use exec() because no results are returned 
	$conn->exec($sql);
	//echo "New record created successfully";
	print "<p>Thank you for your course review</p>";

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