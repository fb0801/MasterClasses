<?php 
  require_once "dbutils1-bookings.php";
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

<div class="w3-container">
  <h3>Book class</h3>
  <form class="w3-container w3-card-4 w3-light-grey" action = "book_process.php" method="GET" >
  

<p><label>Class ID</label>
  <input class="w3-input w3-border" name="classid" type="text" readonly value ="<?php echo $_GET['cid']; ?>"/></p>
  
  <p><label>Class Title</label>
  <input class="w3-input w3-border" name="title" type="text" readonly value ="<?php echo $_GET['tt']; ?>"/></p>

  <p><label>Class Description</label>
  <input class="w3-input w3-border" name="description" type="text" readonly value ="<?php echo $_GET['ds']; ?>"/></p>
  
  <p><label>Class Lecturer</label>
  <input class="w3-input w3-border" name="lecturer" type="text" readonly value ="<?php echo $_GET['lec']; ?>"/></p>
  
  <p><label>Class Start Date</label>
  <input class="w3-input w3-border" name="date" type="text" readonly value ="<?php echo $_GET['dt']; ?>"/></p>
  
  <p><label>Class Start Time</label>
  <input class="w3-input w3-border" name="time" type="text" readonly value ="<?php echo $_GET['tm']; ?>"/></p>
  
  <p><label>Username</label>
  <input class="w3-input w3-border" name="user_n" type="text"></p>
  
  <p><label>Name</label>
  <input class="w3-input w3-border" name="name" type="text"></p>
  <p><button class="w3-btn w3-border w3-pink" name="go">Book</button></p>
  
</form>
</div>
<button id="btn_edit_3"><a class="edit_link"href="classes.php">Back</button></a>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
<?php

if(isset($_GET['go'])){
	createbooking($_GET['classid'],$_GET['title'],$_GET['description'],$_GET['lecturer'],$_GET['date'],$_GET['time'],$_GET['name'], $_GET['surname']);
}
?>
</body>
</html>