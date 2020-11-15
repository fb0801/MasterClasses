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

<form action="log.php" method="POST">
<input type="text" name="uid" placeholder="Username" required>
<br>
<input type="password" name="pwd" placeholder="Password" required>
<br>
<input type='hidden' name='formid' value='login'>
<div class="logindex_btn">
<button id="btn"><a class="edit_link" href="new_user.php">Sign up</a></button><br>
<button id="btn" type="submit">Login</button>
<!--<button id="btn" ><a class="edit_link"href="login.php">Employee Login</button></a>
-->
</div></form>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>