<?php
require_once('includes/dbutils.php'); 
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
<div class="login"><?php print"<p>Welcome ".$_POST['uid']."</p>";?></div>
</div>

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
  
    
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$tutor = $_REQUEST['tut_id'];
    $c_name= $_REQUEST['course_name'];
	$price=$_REQUEST['price'];
    $know = $_REQUEST['know'];
	$c_time=$_REQUEST['c_time'];
	$c_day=$_REQUEST['c_day'];
	$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$folder = 'Imag/'.$filename;
move_uploaded_file($tempname,$folder);
	//}else{
	$sql = "INSERT INTO course (tut_id, course_name, price,knowledge,course_day,course_time,image)
      VALUES('$tutor', '$c_name', '$price', '$know','$c_day','$c_time','$filename')"; 
	 // use exec() because no results are returned 
	$conn->exec($sql);
	echo "New record created successfully";
	//print "<p>Recordhas been sent and will be reviewed by the admissions team</p>";
	header ('location:class.php');
//} 
$conn = null;
?>
