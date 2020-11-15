
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
<!--<div class="login"><?php print"<p>Welcome ".$_SESSION['use']."</p>";?></div>-->

<div class="dropdown-content">
	
	  <a href="">Settings</a>
      <a href="logout.php">Log out</a>
      

</div></div></div>

<body>
<h2 class="title">MasterClasses</h2>

<?php 

//print"<p>Welcome ".$_POST['user_uid']."</p>";
  //print "<h1>Welcome ".$_SESSION['user_uid']."</h1>\n";

?>

<div class="app">
<a class="edit_link_2" href="application.php"><h2>Applications</h2></a>
</div>


<div class="cl">
<a class="edit_link_2" href="course.php"><h2>Classes</h2></a>

</div>



<div class="review">
<a class="edit_link_2" href="review.php"><h2>Reviews</h2></a>
</div><br><br><br><br><br><br><br><br>

<div class="cl_2">
<a class="edit_link_2" href="profile.php"><h2>Profiles</h2></a>

</div>
<div class="space"></div>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>