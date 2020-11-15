<?php
require_once('includes/dbutils.php');
?>
<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>MasterClasses-Classes</title><!--Display as site tab title-->
<link rel="shortcut icon" type="image/x-icon" href="images/master.ico"> <!--adds a image to the title to display in the tab-->
<link rel="stylesheet" type="text/css" href="masterclass_style.css">

			<!-- link css and html-->
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<!--make the webpage fit the screen-->
<style>
ul{
	list-style-type:none;
	margin:0;
	padding:0;
}
.edit_link_5{
	/*remove underline from site link*/
	text-decoration:none;
	color:black;
}
</style>
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
<div class="searchbx">
<form class="edit_form" action="search_process.php" method="post" autocomplete=off>
<input id="txt_edit" type="text" name="search" placeholder="MasterClasses...">
<button id="btn_edit" type="submit">Search</button>

</form>
</div>
<?php
//$pdo = connect();
	//$scl=$_REQUEST['search'];
  //$results = $pdo->query("SELECT course.course_id,course.course_name,course.course_day,course.course_time,course.knowledge,course.price,tutor.tut_first,course.image FROM course INNER JOIN tutor on tutor.tut_id=course.tut_id WHERE course.course_name like'%$scl%'", PDO::FETCH_ASSOC);
  //foreach( $results as $row) {
	//  print("<div class='box_1'>");
  //print("<tr>");
  //print("<h1>".$row['course_name']."</h1>");
  //print("<table><tr>");
  //print("<img src='Imag/".$row['image']."' height = '120'/></td>");
  //print("<button id='btn_edit_2'><a class='edit_link_5' href='book.php?cid=$row[course_id]&tt=$row[course_name]&ds=$row[knowledge]&lec=$row[tut_first]
	//      &dt=$row[course_day]&tm=$row[course_time]'''>Book</button></a>");
	//print("<td><a href='update.php?cid=$row[class_id]&tt=$row[course_name]&ds=$row[knowledge]&lec=$row[tut_name]&dt=$row[course_day]&tm=$row[course_time]'>Edit</a></td>");
		  
//print("<td><a class='edit_link_4'href='app.php?aid=$row[app_id]&tn=$row[firstname]&ts=$row[surname]&em=$row[email]&xp=$row[expertise]&av=$row[availability]'>Approve</a></td>");  
	
  
  //print("<ul>");
  
  
  //print("<li>Tutor: ".$row['tut_first']."</li>");
  //print("<li>Day: ".$row['course_day']."</li>");
  //print("<li>Time: ".$row['course_time']."</li>");
  //print("<li>Description: ".$row['knowledge']."</li>");
  //print("<li>Price: £".$row['price']."</li>");
  //print("</ul>");
  //print("</tr></table>");
  //print("</div>");
  //}
  $dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="masterclasses";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);
$scl=$_REQUEST['search'];
  $sql ="SELECT course.course_id,course.course_name,course.course_day,course.course_time,course.knowledge,course.price,tutor.tut_first,course.image FROM course INNER JOIN tutor on tutor.tut_id=course.tut_id WHERE course.course_name like'%$scl%'";
  $result=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($result);
  if($count >0){
	  while ($row =mysqli_fetch_assoc($result)){
	print("<div class='box_1'>");
  print("<tr>");
  print("<h1>".$row['course_name']."</h1>");
  print("<table><tr>");
  print("<img src='Imag/".$row['image']."' height = '120'/></td>");
  print("<button id='btn_edit_2'><a class='edit_link_5' href='book.php?cid=$row[course_id]&tt=$row[course_name]&ds=$row[knowledge]&lec=$row[tut_first]
	      &dt=$row[course_day]&tm=$row[course_time]'''>Book</button></a>");
	
  
  print("<ul>");
  
  
  print("<li>Tutor: ".$row['tut_first']."</li>");
  print("<li>Day: ".$row['course_day']."</li>");
  print("<li>Time: ".$row['course_time']."</li>");
  print("<li>Description: ".$row['knowledge']."</li>");
  print("<li>Price: £".$row['price']."</li>");
  print("</ul>");
  print("</tr></table>");
  print("</div>");  
  }}else{
	  print('results not found try to use less words or the name of the class');
print("<button id='btn_edit_3'><a class='edit_link'href='classes.php'>Back</button></a>");

  }
?>

<div class="bottom_sec">
<img id="copy" src="images/fav_mini.png" alt="MasterClasses logo"><p>&copy; MasterClasses 2020</p>
</div>

</body>
</html>