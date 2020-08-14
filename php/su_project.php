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
			$p_title = $_POST['p_title'];
			$p_startmonth = $_POST['p_startmonth'];
			$p_endmonth = $_POST['p_endmonth'];
			$p_discription = $_POST['p_discription'];
			$p_link = $_POST['p_link'];

			$sql = "INSERT INTO project (js_id, p_title, p_startmonth, p_endmonth, p_discription, p_link)
   			VALUES ('$user_id', '$p_title', '$p_startmonth', '$p_endmonth', '$p_discription', '$p_link')";

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
			$p_id = $_POST['p_id'];
			$p_title = $_POST['p_title'];
			$p_startmonth = $_POST['p_startmonth'];
			$p_endmonth = $_POST['p_endmonth'];
			$p_discription = $_POST['p_discription'];
			$p_link = $_POST['p_link'];

			$sql = "UPDATE project SET p_title='$p_title',p_startmonth='$p_startmonth',p_endmonth='$p_endmonth',p_discription='$p_discription',p_link='$p_link' WHERE p_id='$p_id'";

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