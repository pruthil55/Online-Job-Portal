<?php

 $mysqli = new mysqli("localhost","root","","cdpc");
 
$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);
    
    // if(!isset($_SESSION)) { session_start(); }
    // $user_id = $_SESSION['js_id'];
    $ja_status = "approved";

    // $searchQuery = "SELECT * FROM jobapplication where ja_status = '$ja_status'" ;
    $searchQuery = "SELECT jobapplication.ja_id ,jobapplication.ja_title, companies.c_name, companies.c_imageUrl, jobapplication.ja_location, jobapplication.ja_startdate, jobapplication.ja_bondtime, jobapplication.ja_package, jobapplication.ja_package_type, jobapplication.ja_poston, jobapplication.ja_applyby
                    FROM jobapplication 
                    INNER JOIN companies
                    ON jobapplication.c_id=companies.c_id
                    WHERE ja_status = '$ja_status'" ;


    if($result = $mysqli->query($searchQuery)){
   
    while($row[]=$result->fetch_assoc()){
            $tem = $row;
            $json = json_encode($tem);
    }
    }else{
        $json = json_encode("No record Found");
    }

    // $json = json_encode($searchQuery);
    echo $json;

    mysqli_close($mysqli);
?>