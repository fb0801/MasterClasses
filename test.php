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
<a href="classes.html">Classes</a>
<a href="about.html">About</a>
<a href="apply.html">Apply</a>
<div class="login"><a href="loginindex.php">Login</a></div>
</div>

<h2 class="title">MasterClasses Applications</h2>
<?php




?>
<div class="searchbx">
<form class="edit_form" action="" method="post" autocomplete=off>
<input id="txt_edit" type="text" name="search" placeholder="MasterClasses...">
<button id="btn_edit" type="submit">Search</button>
</form>
</div>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>
<?php
  $pdo = new PDO('mysql:host='.$mysqlhost.';dbname='.$dbname.';charset=utf8', $username, $password);
if (isset($_POST['submit'])){
$str=$_POST['search'];
$sth=$pdo->prepare("SELECT * FROM 'applications' WHERE Name ="$str"");

$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
if($row=$sth->fetch())
{
	<br><br><br>
	
}
?>