<?php

function connect() {
   $username = 'Farhan';
  $password = 'Farhan3712356';
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

function htmlTable( $pdo, $table) {
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";
  
  print "<tr>";
  
  foreach( $stmt as $v) {
	  
    print "<th>".$v['Field']."</th>";
	
  }
  
  print "</tr>";
  
  $sql = "SELECT * FROM `".$table."`";
  
  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);
  
  foreach( $stmt as $row) {
	
    print "<tr>";
	//print"<button>Accept</button>";
    foreach( $row as $v) {
		//print"<button>Accept</button>";
      print "<td>".$v."</td>";
		//print "<button>Accept</button>";
    }
	
    print "</tr>";
	//print "<button>Accept</button>";
  }
	//
  print "</table>";  
	//print "<button>Accept</button>";
}

function htmlTable_3( $pdo, $table) {
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";
  
  print "<tr>";
  
  foreach( $stmt as $v) {
	  
    print "<th>".$v['Field']."</th>";
	
  }
  
  print "</tr>";

  
  $sql = "SELECT * FROM `".$table."`";
  
  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);
  
  foreach( $stmt as $row) {
	
    print "<tr>";
	//print"<button>Accept</button>";
    foreach( $row as $v) {
		//print"<button>Accept</button>";
      print "<td>".$v."</td>";
	  
		//print "<button>Accept</button>";
    }
	  print("<td><a class='edit_link_3'href='?deletionid=".$row['course_id']."' class='link'>Delete</a></td>");  
	print("<td><a class='edit_link_4'href='update.php?cid=$row[course_id]&tt=$row[course_name]&ds=$row[knowledge]&lec=$row[tut_id]&dt=$row[course_day]&tm=$row[course_time]&cp=$row[price]'>Edit</a></td>");

    print "</tr>";
	//print "<button>Accept</button>";
  }
	//
  print "</table>";  
	//print "<button>Accept</button>";
}
function htmlTable_4( $pdo, $table) {
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";
  
  print "<tr>";
  
  foreach( $stmt as $v) {
	  
    print "<th>".$v['Field']."</th>";
	
  }
  
  print "</tr>";

  
  $sql = "SELECT * FROM `".$table."`";
  
  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);
  
  foreach( $stmt as $row) {
	
    print "<tr>";
	//print"<button>Accept</button>";
    foreach( $row as $v) {
		//print"<button>Accept</button>";
      print "<td>".$v."</td>";
	  
		//print "<button>Accept</button>";
    }
	  print("<td><a class='edit_link_3'href='?deletionid_2=".$row['app_id']."' class='link'>Delete</a></td>");
	print("<td><a class='edit_link_4'href='app.php?aid=$row[app_id]&tn=$row[firstname]&ts=$row[surname]&em=$row[email]&xp=$row[expertise]&av=$row[availability]'>Approve</a></td>");  
	  
	//print("<td><a class='edit_link_4'href='?approveid_2=".$row['app_id']."' class='link'>Approve</a></td>");  

    print "</tr>";
	//print "<button>Accept</button>";
  }
	//
  print "</table>";  
	//print "<button>Accept</button>";
}

function htmlTable_2( $pdo, $table) {
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";
  
  print "<tr>";
  
  foreach( $stmt as $v) {
	  
    print "<th>".$v['Field']."</th>";
	//print"<button>Accept</button>";	
  }
  
  print "</tr>";
 // print"<button>Accept</button>";
  $sql = "SELECT tut_id,tut_first,tut_last,tut_email FROM `".$table."`";
  //print"<button>Accept</button>";
  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);
  //print"<button>Accept</button>";
  foreach( $stmt as $row) {
	//print"<button>Accept</button>";
    print "<tr>";
	
    foreach( $row as $v) {
		//print"<button>Accept</button>";
      print "<td>".$v."</td>";
	  //print"<button>Accept</button>";
	  
    }
//	print "<button>Accept</button>";
    print "</tr>";
	//print "<button>Accept</button>";
  }
	//print "<button>Accept</button>";
  print "</table>";  
	//print "<button>Accept</button>";
}

function deleteRecord( $pdo, $deletionid) {
  $errorMessage = "";  
 $stmt = $pdo->prepare("SELECT * FROM `course` WHERE `course_id`=?");
  $stmt->execute( array( $deletionid));  
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ( count( $rows) == 1) {
    // delete database record
    $stmt = $pdo->prepare("DELETE FROM `course` WHERE `course_id`=?");
    $stmt->execute( array( $deletionid));  
    $affected_rows = $stmt->rowCount(); 
header ('location:class.php'); 	
  } else if (count( $rows) > 1) {
    $errorMessage .= "ID matches more than one record. ";
  } else {
    $errorMessage .= "ID not found: nothing to delete. ";
  }
  return $errorMessage;
}

function deleteRecord_2( $pdo, $deletionid) {
  $errorMessage = "";  
 $stmt = $pdo->prepare("SELECT * FROM `applications` WHERE `app_id`=?");
  $stmt->execute( array( $deletionid));  
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ( count( $rows) == 1) {
    // delete database record
    $stmt = $pdo->prepare("DELETE FROM `applications` WHERE `app_id`=?");
    $stmt->execute( array( $deletionid));  
    $affected_rows = $stmt->rowCount(); 
header ('location:application.php'); 	
  } else if (count( $rows) > 1) {
    $errorMessage .= "ID matches more than one record. ";
  } else {
    $errorMessage .= "ID not found: nothing to delete. ";
  }
  return $errorMessage;
}
?>
