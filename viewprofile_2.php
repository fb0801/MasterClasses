<?php 
  require_once( 'includes/dbutils.php');
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
<a href="tutor_home.php"><img class="logo" src="images/masterclasses_2.jpg" alt="Logo" title="return to mainpage"></a>
<h1 id="no_head">Master</h1>
<br><br><br><br></div>
<div class="navbar">
<a href="tutor_home.php">Home</a>
<a href="my_course.php">Classes</a>
<a href="tutor_review.php">Review</a>
<div class="dropdown" style="float:right;">
<div class="login">Welcome</div>
<!--<div class="login"><?php print"<p>Welcome ".$_SESSION['use']."</p>";?></div>-->

<div class="dropdown-content">
	
	  <a href="">Settings</a>
      <a href="logout.php">Log out</a>
      

</div></div></div>


<h2 class="title">MasterClasses</h2>

<h2>Profiles</h2>
<table class="w3-table-all w3-card-4 w3-margin">
  <tr class="w3-light-blue" >
    <td width="10%" align="center"><big><b>Name </b></big></td>
    <td width="10%" align="center"><big><b>Surname</b></big></td>
    <td width="10%" align="center"><big><b>Qualifications</b></big></td>
    <td width="10%" align="center"><big><b>Experience</b></big></td> 
    <td width="10%" align="center"><big><b>Image</b></big></td> 
	
  </tr>
<?php
$pdo = connect();
  $results = $pdo->query("SELECT * FROM profiles", PDO::FETCH_ASSOC);
  foreach( $results as $row) {
    print("<tr>");
    print("<td>".$row['name']."</td>");
    print("<td>".$row['surname']."</td>");
    print("<td>".$row['qualifications']."</td>");
    print("<td>".$row['experience']."</td>");
    print("<td><img src=".$row['image']." height = '120'/></td>");
    print("</tr>");
  }
?>
</table>


<button id="btn_edit_3"><a class="edit_link"href="tutor_home.php">Back</button></a>


<div class="space"></div>
<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>
</body>
</html>