<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cdpc";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$json = file_get_contents('php://input');
	$obj = json_decode($json,true);

	if(!isset($_SESSION)) { session_start(); }
    $js_id = $_SESSION['js_id'];

	$sql = 'SELECT field_preferances, location_preferances FROM js_preferances WHERE js_id="'.$js_id.'"';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row[] = $result->fetch_assoc()) {
	    $tem = $row;
	    $json = json_encode($tem);
	  }
	} else {
	  $tem = "No record Found";
	  $json = json_encode($tem);
	}
	echo $json;
	$conn->close();
?>