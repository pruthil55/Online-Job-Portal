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

	if (isset($_POST['College_E_title'])) {

		if($_POST['submit'] == "Save"){
			if(!isset($_SESSION)) { session_start(); }
			$user_id = $_SESSION['js_id'];
			$College_E_title = $_POST['College_E_title'];
			$cd_college = $_POST['cd_college'];
			$cd_s_year = $_POST['cd_s_year'];
			$cd_e_year = $_POST['cd_e_year'];
			$cd_degree = $_POST['cd_degree'];
			$cd_stream = $_POST['cd_stream'];
			$cd_pscale = $_POST['cd_pscale'];
			$cd_performance = $_POST['cd_performance'];

			$sql = "INSERT INTO c_degree (js_id, cd_level, cd_college, cd_s_year, cd_e_year, cd_degree, cd_stream, cd_pscale, cd_performance) VALUES ('$user_id', '$College_E_title', '$cd_college', '$cd_s_year', '$cd_e_year', '$cd_degree', '$cd_stream', '$cd_pscale', '$cd_performance')";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

		}

		if($_POST['submit'] == "Update"){
			$cd_id = $_POST['cd_id'];
			$College_E_title = $_POST['College_E_title'];
			$cd_college = $_POST['cd_college'];
			$cd_s_year = $_POST['cd_s_year'];
			$cd_e_year = $_POST['cd_e_year'];
			$cd_degree = $_POST['cd_degree'];
			$cd_stream = $_POST['cd_stream'];
			$cd_pscale = $_POST['cd_pscale'];
			$cd_performance = $_POST['cd_performance'];

			$sql = "UPDATE c_degree SET cd_level='$College_E_title',cd_college='$cd_college',cd_s_year='$cd_s_year',cd_e_year='$cd_e_year',cd_degree='$cd_degree',cd_stream='$cd_stream',cd_pscale='$cd_pscale',cd_performance='$cd_performance' WHERE cd_id='$cd_id'";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

		}
	}

	if (isset($_POST['Other_E_title'])) {

		if($_POST['submit'] == "Save"){
			if(!isset($_SESSION)) { session_start(); }
			$user_id = $_SESSION['js_id'];
			$Other_E_title = $_POST['Other_E_title'];
			$od_college = $_POST['od_college'];
			$od_s_year = $_POST['od_s_year'];
			$od_e_year = $_POST['od_e_year'];
			$od_stream = $_POST['od_stream'];
			$od_pscale = $_POST['od_pscale'];
			$od_performance = $_POST['od_performance'];

			$sql = "INSERT INTO o_degree (js_id, od_level, od_college, od_s_year, od_e_year, od_stream, od_pscale, od_performance) VALUES ('$user_id', '$Other_E_title', '$od_college', '$od_s_year', '$od_e_year', '$od_stream', '$od_pscale', '$od_performance')";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

		}

		if($_POST['submit'] == "Update"){
			$od_id = $_POST['od_id'];
			$Other_E_title = $_POST['Other_E_title'];
			$od_college = $_POST['od_college'];
			$od_s_year = $_POST['od_s_year'];
			$od_e_year = $_POST['od_e_year'];
			$od_stream = $_POST['od_stream'];
			$od_pscale = $_POST['od_pscale'];
			$od_performance = $_POST['od_performance'];

			$sql = "UPDATE o_degree SET od_level='$Other_E_title',od_college='$od_college',od_s_year='$od_s_year',od_e_year='$od_e_year',od_stream='$od_stream',od_pscale='$od_pscale',od_performance='$od_performance' WHERE od_id='$od_id'";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();
		}
	}

	if (isset($_POST['School_E_title'])) {

		if($_POST['submit'] == "Save"){
			if(!isset($_SESSION)) { session_start(); }
			$user_id = $_SESSION['js_id'];
			$School_E_title = $_POST['School_E_title'];
			$sd_yoc = $_POST['sd_yoc'];
			$sd_board = $_POST['sd_board'];
			$sd_pscale = $_POST['sd_pscale'];
			$sd_performance = $_POST['sd_performance'];
			if ($School_E_title == "X(Secondary) Details") {
				$sd_stream = "none";
			}else{
				$sd_stream = $_POST['sd_stream'];
			}
			$sd_school = $_POST['sd_school'];

			$sql = "INSERT INTO s_degree (js_id, sd_level, sd_yoc, sd_board, sd_pscale, sd_performance, sd_stream, sd_school) VALUES ('$user_id', '$School_E_title', '$sd_yoc', '$sd_board', '$sd_pscale', '$sd_performance', '$sd_stream', '$sd_school')";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();

		}

		if($_POST['submit'] == "Update"){
			$sd_id = $_POST['sd_id'];
			$School_E_title = $_POST['School_E_title'];
			$sd_yoc = $_POST['sd_yoc'];
			$sd_board = $_POST['sd_board'];
			$sd_pscale = $_POST['sd_pscale'];
			$sd_performance = $_POST['sd_performance'];
			if ($School_E_title == "X(Secondary) Details") {
				$sd_stream = "none";
			}else{
				$sd_stream = $_POST['sd_stream'];
			}
			$sd_school = $_POST['sd_school'];

			$sql = "UPDATE s_degree SET sd_yoc='$sd_yoc',sd_board='$sd_board',sd_pscale='$sd_pscale',sd_performance='$sd_performance',sd_stream='$sd_stream',sd_school='$sd_school' WHERE sd_id='$sd_id'";

		    if ($conn->query($sql) === TRUE) {
		    	header('Location: ../resume.php');
		    } else {
		      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		    }

		    $conn->close();
		}
	}
?>