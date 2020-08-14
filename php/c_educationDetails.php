<?php

 $mysqli = new mysqli("localhost","root","","cdpc");
 
$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);
    
    if(isset($_GET['js_id'])){
        $user_id = $_GET['js_id'];
    }else{
        if(!isset($_SESSION)) { session_start(); }
        $user_id = $_SESSION['js_id'];
    }

    $searchQuery = "SELECT * FROM c_degree where js_id = '$user_id'" ;


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