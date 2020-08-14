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
			$ad_discription = $_POST['ad_discription'];

			$sql = "INSERT INTO additional (js_id, ad_discription) VALUES ('$user_id', '$ad_discription')";

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
			$ad_id = $_POST['ad_id'];
			$ad_discription = $_POST['ad_discription'];

			$sql = "UPDATE additional SET ad_discription='$ad_discription' WHERE ad_id='$ad_id'";

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