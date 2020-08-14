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

	if(isset($_GET['fieldPreferance']) or isset($_GET['locationPreferance'])){

		if(!isset($_SESSION)) { session_start(); }
        $js_id = $_SESSION['js_id'];

		if(isset($_GET['fieldPreferance'])){
			$fieldPreferance = $_GET['fieldPreferance'];
		}else{
			$fieldPreferance = "";
		}

		if(isset($_GET['locationPreferance'])){
			$locationPreferance = $_GET['locationPreferance'];
		}else{
			$locationPreferance = "";
		}

		// echo $fieldPreferance." ".$locationPreferance;
		$sql = "SELECT * FROM js_preferances WHERE js_id='$js_id'";
		$result = $conn->query($sql);
		$rowcount=mysqli_num_rows($result);

		if($rowcount > 0){
			$sql_u = "UPDATE js_preferances SET field_preferances='$fieldPreferance',location_preferances='$locationPreferance' WHERE js_id='$js_id'";

	   		if ($conn->query($sql_u) === TRUE) {
			    echo "Your Preferances Updated Successfully.";
			} else {
				echo "somthing went wrong!";
			}
		}else{
			$sql_i = 'INSERT INTO `js_preferances` (js_id, field_preferances, location_preferances) VALUES ("'.$js_id.'", "'.$fieldPreferance.'", "'.$locationPreferance.'")';

		    if ($conn->query($sql_i) === TRUE) {
	            echo "Your Preferances Inserted Successfully.";
	        } else {
	            echo "somthing went wrong!";
	        }
		}

		$conn->close();
	}
?>