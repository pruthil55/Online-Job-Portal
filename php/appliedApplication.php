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
        if(!isset($_SESSION)) { session_start(); }
        $js_id = $_SESSION['js_id'];
        if(isset($_GET['job'])) {
            $ja_id = $_GET['job'];
        }
        $qa_1 = $_POST['qa_1'];
        $qa_2 = $_POST['qa_2'];
        $aa_date = strval( date("d M' y") );
        $aa_status = 'Applied';

        // echo $js_id." ".$ja_id." ".$qa_1." ".$qa_2." ".$aa_date." ".$aa_status;

        $sql = 'INSERT INTO `appliedapplications` (js_id, ja_id, qa_1, qa_2, aa_date, aa_status) VALUES ("'.$js_id.'", "'.$ja_id.'", "'.$qa_1.'", "'.$qa_2.'", "'.$aa_date.'", "'.$aa_status.'")';

        if ($conn->query($sql) === TRUE) {
            header('Location: ../successornot.php?job='.$ja_id.'true');
        } else {
            header('Location: ../successornot.php?job='.$ja_id.'false');
        }

        $conn->close();


    }
?>