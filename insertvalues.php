<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blog_subscriber";

	$subsname = $_POST['subsname'];
	$subsemail = $_POST['subsemail'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO subscriber_details (subsname, subsemail)
	VALUES ('$subsname','$subsemail')";
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
