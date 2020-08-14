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

	if(isset($_GET['i_id'])) {
		$i_id = $_GET['i_id'];
		$sql = "DELETE FROM internship WHERE i_id = '$i_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['p_id'])) {
		$p_id = $_GET['p_id'];
		$sql = "DELETE FROM project WHERE p_id = '$p_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['ad_id'])) {
		$ad_id = $_GET['ad_id'];
		$sql = "DELETE FROM additional WHERE ad_id = '$ad_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['s_id'])) {
		$s_id = $_GET['s_id'];
		$sql = "DELETE FROM skill WHERE s_id = '$s_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['sd_id'])) {
		$sd_id = $_GET['sd_id'];
		$sql = "DELETE FROM s_degree WHERE sd_id = '$sd_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['cd_id'])) {
		$cd_id = $_GET['cd_id'];
		$sql = "DELETE FROM c_degree WHERE cd_id = '$cd_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

	if(isset($_GET['od_id'])) {
		$od_id = $_GET['od_id'];
		$sql = "DELETE FROM o_degree WHERE od_id = '$od_id'";

		if ($conn->query($sql) === TRUE) {
		    header('Location: ../resume.php');
		} else {
		    echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
		}

		$conn->close();
	}

?>