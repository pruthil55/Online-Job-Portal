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

	if(isset($_POST['submit'])){
		if($_POST['submit'] == "Save"){
			if(!isset($_SESSION)) { session_start(); }
			$user_id = $_SESSION['js_id'];
			$i_technology = $_POST['i_technology'];
			$i_company = $_POST['i_company'];
			$i_location = $_POST['i_location'];
			$i_s_month = $_POST['i_s_month'];
			$i_e_month = $_POST['i_e_month'];
			$i_discription = $_POST['i_discription'];

			$sql = "INSERT INTO internship (js_id, i_technology, i_company, i_location, i_startdate, i_enddate, i_discription)
   			VALUES ('$user_id', '$i_technology', '$i_company', '$i_location', '$i_s_month', '$i_e_month', '$i_discription')";

		    if ($conn->query($sql) === TRUE) {
		      // echo "New record created successfully";
		      // echo "<script>var r = alert('Congratulations, You are successfully registered.'); if( r != true) { location.href = '../index.php' }</script>";
		    	header('Location: ../resume.php');
		    } else {
		      // echo "Error: " . $sql . "<br>" . $conn->error;
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

			// echo $user_id." ".$i_technology." ".$i_company." ".$i_location." ".$i_s_month." ".$i_e_month." ".$i_discription;
		}

		if($_POST['submit'] == "Update"){
			$i_id = $_POST['i_id'];
			$i_technology = $_POST['i_technology'];
			$i_company = $_POST['i_company'];
			$i_location = $_POST['i_location'];
			$i_s_month = $_POST['i_s_month'];
			$i_e_month = $_POST['i_e_month'];
			$i_discription = $_POST['i_discription'];

			$sql = "UPDATE internship SET i_technology='$i_technology',i_company='$i_company',i_location='$i_location',i_startdate='$i_s_month',i_enddate='$i_e_month',i_discription='$i_discription' WHERE i_id='$i_id'";

		    if ($conn->query($sql) === TRUE) {
		      // echo "New record created successfully";
		      // echo "<script>var r = alert('Congratulations, You are successfully registered.'); if( r != true) { location.href = '../index.php' }</script>";
		    	header('Location: ../resume.php');
		    } else {
		      // echo "Error: " . $sql . "<br>" . $conn->error;
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

			// echo $user_id." ".$i_id." ".$i_technology." ".$i_company." ".$i_location." ".$i_s_month." ".$i_e_month." ".$i_discription;
		}
	}
?>