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
$pdo = connect();
htmlTable_4( $pdo, 'applications');
if ( isset( $_GET['deletionid_2'])) {
  $errorMessage = deleteRecord_2( $pdo, $_GET['deletionid_2']);
  if ( $errorMessage != "") {
    print "<div class='errormessage'>$errorMessage</div>\n";
  } else {
    print "<div class='message'>Record deleted.</div>\n";    
  }
}
?>

<button id="btn_edit_3"><a class="edit_link"href="home.php">Back</button></a>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>