<?php
require_once('dbus.php'); 
?>
<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>MasterClasses</title><!--Display as site tab title-->
<link rel="shortcut icon" type="image/x-icon" href="images/master.ico"> <!--adds a image to the title to display in the tab-->
<link rel="stylesheet" type="text/css" href="masterclass_style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<a href="about.html">About</a>
<a href="application.php">Apply</a>
<div class="dropdown" style="float:right;">
<div class="login">Welcome</div>
<!--<div class="login"><?php print"<p>Welcome ".$_POST['uid']."</p>";?></div>-->
<div class="dropdown-content">
	
	  <a href="">Settings</a>
      <a href="logout.php">Log out</a>
      

</div></div></div>

<div class="w3-container">
  <h3>This form is used to add master class tutors.</h3>
  <form class="w3-container w3-card-4 w3-light-grey" action = "updateDB_2.php" method="GET" >
  <h2>Tutor Master Class</h2>
  <p>Add new tutor:</p>

<p><label>Application ID</label>
  <input class="w3-input w3-border" name="appid" type="text" value ="<?php echo $_GET['aid']; ?>"/></p>
  
  <p><label>Name</label>
  <input class="w3-input w3-border" name="first" type="text" value ="<?php echo $_GET['tn']; ?>"/></p>

  <p><label>Surname</label>
  <input class="w3-input w3-border" name="surname" type="text" value ="<?php echo $_GET['ts']; ?>"/></p>
  
  <p><label>Email</label>
  <input class="w3-input w3-border" name="email" type="text" value ="<?php echo $_GET['em']; ?>"/></p>
  
  <p><label>Expertise</label>
  <input class="w3-input w3-border" name="expe" type="text" value ="<?php echo $_GET['xp']; ?>"/></p>
  
  <p><label>Avaliable</label>
  <input class="w3-input w3-border" name="ava" type="text" value ="<?php echo $_GET['av']; ?>"/></p>
  
  <p><label>Username</label>
  <input class="w3-input w3-border" name="user_a" type="text"></p>
  
  <p><label>Password</label>
  <input class="w3-input w3-border" name="password" type="password"></p>
  
  <p><button class="w3-btn w3-border w3-pink" name="submit">Add</button></p>
  
</form>
</div>
<button id="btn_edit_3"><a class="edit_link"href="home.php">Back</button></a>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>