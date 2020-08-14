<?php

 $mysqli = new mysqli("localhost","root","","cdpc");
 
$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);
    
    if(!isset($_SESSION)) { session_start(); }
    $user_id = $_SESSION['js_id'];
    // $user_id = 7;
    $searchQuery = "SELECT appliedapplications.ja_id, appliedapplications.aa_id, appliedapplications.aa_date, appliedapplications.aa_status FROM appliedapplications where js_id = '$user_id'" ;

    if($result = $mysqli->query($searchQuery)){
        $tem = array();
        $rowcount = mysqli_num_rows($result);
        while($row[] = $result->fetch_assoc()){
            $tem = $row;

        }
        for ($i=0; $i < $rowcount; $i++) { 
            $ja_id = implode($tem[$i])[0];
            $searchQuery_1 = 'SELECT jobapplication.ja_title, companies.c_name
                    FROM jobapplication 
                    INNER JOIN companies
                    ON jobapplication.c_id=companies.c_id
                    WHERE ja_id = "'.$ja_id.'"' ;

            if($result_1 = $mysqli->query($searchQuery_1)){
           
                while($row_1=$result_1->fetch_assoc()){
                        $tem[$i]["ja_title"] = $row_1['ja_title'];
                        $tem[$i]["c_name"] = $row_1['c_name'];
                }
            }else{
                $json = json_encode("No record Found");
            }

            $searchQuery_2 = 'SELECT appliedapplications.aa_id
                    FROM appliedapplications
                    WHERE ja_id = "'.$ja_id.'"' ;

            $result_2 = $mysqli->query($searchQuery_2);
            $noofapplicants = mysqli_num_rows($result_2);
            $tem[$i]["n_o_a"] = $noofapplicants;
        }
        if($tem != []){
            $json = json_encode($tem);
        }else {
            $json = json_encode("No record Found");
        }
    }else{
        $json = json_encode("No record Found");
    }

    
    echo $json;

    mysqli_close($mysqli);
?>