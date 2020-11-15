<?php

$username = 'root';
$password = '';
$servername = 'localhost';
$dbname = 'masterclasses';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	  
$name = $_POST['name'];
$surname = $_POST['surname'];
$qualifications = $_POST['qualifications'];
$experience = $_POST['experience'];
$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$folder = 'profile/'.$filename;
move_uploaded_file($tempname,$folder);

$sql = "INSERT INTO profiles (name, surname, qualifications, experience, image)
      VALUES('$name', '$surname', '$qualifications', '$experience', '$folder')"; 
	 // use exec() because no results are returned 
$conn->exec($sql);
echo "New record created successfully";
header("Location:tutor_home.php"); 

$conn = null;
?>


