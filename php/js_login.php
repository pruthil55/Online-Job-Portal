<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "cdpc";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $username = $_POST['js_email'];  
    $password = $_POST['js_password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from js_registration where js_i_email = '$username' and js_password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<script>var r=true if(r==true) { location.href = '../index.php }</script>";
            if(!isset($_SESSION)) { session_start(); }
            $_SESSION['js_id'] = $row["js_id"];
            header('Location: ../homePage.php');
        }  
        else{  
            echo "<script>var r = alert('Login unsuccessful.\\nPlease enter vaild username and password.'); if( r != true) { location.href = '../index.php' }</script>";  
        } 
?> 