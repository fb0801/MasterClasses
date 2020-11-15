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

<div class="w3-container">

  <form class="w3-container w3-card-4 w3-light-grey" action = "createProfile-1.php" method="post" enctype="multipart/form-data"> 
  <h2>Create Profile</h2>
  <p>Fill in the following information:</p>

  <p><label>First Name</label>
  <input class="w3-input w3-border" name="name" type="text"></p>

  <p><label>Surname</label>
  <input class="w3-input w3-border" name="surname" type="text"></p>
  
  <p><label>Qualifications</label>
  <input class="w3-input w3-border" name="qualifications" type="text"></p>
  
  <p><label>Experience</label>
  <input class="w3-input w3-border" name="experience" type="text"></p>
  
<label>Upload Image:</label><br>
  <input type="file" name="image">
 <input type="submit" value="Create Profile" name="submit">
 <br><br>
</form>
</div>


<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>