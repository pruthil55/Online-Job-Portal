<?php

 $mysqli = new mysqli("localhost","root","","cdpc");
 
$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);
    
    if(isset($_GET['application'])){
        if(!isset($_SESSION)) { session_start(); }
        $user_id = $_SESSION['js_id'];
        $aa_id = $_GET['application'];
        $searchQuery = "SELECT js_registration.js_firstname, js_registration.js_lastname, js_registration.js_city FROM js_registration where js_id = '$user_id'" ;

        if($result = $mysqli->query($searchQuery)){
            $tem = array();
            $rowcount = mysqli_num_rows($result);
            while($row[] = $result->fetch_assoc()){
                $tem = $row;

            }

            $searchQuery_1 = 'SELECT appliedapplications.ja_id, appliedapplications.qa_1, appliedapplications.qa_2, appliedapplications.aa_date FROM appliedapplications WHERE aa_id = "'.$aa_id.'"' ;

            if($result_1 = $mysqli->query($searchQuery_1)){
                while($row_1=$result_1->fetch_assoc()){
                    $tem[0]["ja_id"] = $row_1['ja_id'];
                    $tem[0]["qa_1"] = $row_1['qa_1'];
                    $tem[0]["qa_2"] = $row_1['qa_2'];
                    $year = substr($row_1['aa_date'], 8);
                    $month = substr($row_1['aa_date'], 3, 3);
                    $day = substr($row_1['aa_date'], 0, 2);
                    $tem[0]["date_ago"] = date_diff(date_create(date('d M Y')), date_create($day.$month.$year))->format("%a");
                }
            }

            $ja_id = $tem[0]["ja_id"];
            $searchQuery_2 = 'SELECT jobapplication.ja_title, companies.c_name
                    FROM jobapplication 
                    INNER JOIN companies
                    ON jobapplication.c_id=companies.c_id
                    WHERE ja_id = "'.$ja_id.'"' ;

            if($result_2 = $mysqli->query($searchQuery_2)){
                while($row_2=$result_2->fetch_assoc()){
                    $tem[0]["ja_title"] = $row_2['ja_title'];
                    $tem[0]["c_name"] = $row_2['c_name'];
                }
            }

            for ($i=0; $i < $rowcount; $i++) { 

                // $searchQuery_1 = 'SELECT jobapplication.ja_title, companies.c_name
                //         FROM jobapplication 
                //         INNER JOIN companies
                //         ON jobapplication.c_id=companies.c_id
                //         WHERE ja_id = "'.$ja_id.'"' ;

                // if($result_1 = $mysqli->query($searchQuery_1)){
               
                //     while($row_1=$result_1->fetch_assoc()){
                //             $tem[$i]["ja_title"] = $row_1['ja_title'];
                //             $tem[$i]["c_name"] = $row_1['c_name'];
                //     }
                // }else{
                //     $json = json_encode("No record Found");
                // }

                // $searchQuery_2 = 'SELECT appliedapplications.aa_id
                //         FROM appliedapplications
                //         WHERE ja_id = "'.$ja_id.'"' ;

                // $result_2 = $mysqli->query($searchQuery_2);
                // $noofapplicants = mysqli_num_rows($result_2);
                // $tem[$i]["n_o_a"] = $noofapplicants;
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
    }else{
        echo "Page not found";
    }
?>