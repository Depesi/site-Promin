<?php
// $uri = $_SERVER['REQUEST_URI'];
// echo $uri;

$userName = $_POST['Name'];
$userPhone = $_POST['Phone'];

$servername = "localhost";
$username = "addAdminNew";
$password = "addAdmin2281337";
$dbname = "feedbackform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedbackrequest (userName, userPhone, accept)
VALUES ('$userName', '$userPhone', '0')";

 if ($conn->query($sql) === TRUE) {
    echo "Данные отправлены";
	if($_COOKIE["url"] == "/diplom_&_sitePromin/index.php") {
		header('Location: index.php');
	}
	else if($_COOKIE["url"] == "/diplom_&_sitePromin/") {
		header('Location: index.php');
	}	
	else if($_COOKIE["url"] == "/diplom_&_sitePromin/pageHistory.php") {
		header('Location: pageHistory.php');
	}
	else if($_COOKIE["url"] == "/diplom_&_sitePromin/pageTrainers.php") {
		header('Location: pageTrainers.php');
	}
	else if($_COOKIE["url"] == "/diplom_&_sitePromin/pageSchedule.php") {
		header('Location: pageSchedule.php');
	}
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();

?>