<?php
function connect() {
  $username = 'root';
  $password = '';
  $mysqlhost = 'localhost';
  $dbname = 'masterclasses';
  $pdo = new PDO('mysql:host='.$mysqlhost.';dbname='.$dbname.';charset=utf8', $username, $password);
  if ( $pdo) {
    // make errors throw exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } else {
    die("Could not create PDO connection.");
  }
}

function createbooking($classid,$title,$description,$lecturer,$date,$time,$name,$surname ) 
{

$pdo = connect();
$sql = "INSERT INTO bookings 
  (courseid, title, description, lecturer, date, time, studentname, studentsurname)
  VALUES
   ($classid,'$title', '$description', '$lecturer', '$date', '$time', '$name', '$surname')"; 
$pdo->exec( $sql);

}  
  
?>
