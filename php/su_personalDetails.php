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

    if (isset($_POST['submit'])) {
        if(!isset($_SESSION)) { session_start(); }
        $user_id = $_SESSION['js_id'];
        $js_firstname = $_POST['js_firstname'];
        $js_lastname = $_POST['js_lastname'];
        $js_p_email = $_POST['js_p_email'];
        $js_gender = $_POST['js_gender'];
        $js_birthdate = $_POST['js_birthdate'];
        $js_address = $_POST['js_address'];
        $js_city = $_POST['js_city'];
        $js_state = $_POST['js_state'];
        $js_country = $_POST['js_country'];
        $js_zipcode = $_POST['js_zipcode'];
        $js_mobile_no = $_POST['js_mobile_no'];

        $sql = "UPDATE js_registration SET js_firstname='$js_firstname',js_lastname='$js_lastname',js_p_email='$js_p_email',js_gender='$js_gender',js_birthdate='$js_birthdate',js_address='$js_address',js_city='$js_city',js_state='$js_state',js_country='$js_country',js_zipcode='$js_zipcode',js_mobile_no='$js_mobile_no' WHERE js_id='$user_id'";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../resume.php');
        } else {
          echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../resume.php' }</script>";
        }

        $conn->close();

    }
?>