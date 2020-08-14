<?php 

// if(isset($_POST['v_code'])) {
//   if (isset($_GET['e_verification'])) {
//     if ($_GET['e_verification'] == 'js_personal') {
//       session_start();
//       $number = $_SESSION['p_email_no'];
//       if ($_POST['v_code'] == $number) {
//         // header('Location: ../js_registration.php?js_personal_email=verified');
//         if(isset($_GET['js_institute_email'])) {
//           if ($_GET['js_institute_email'] == 'verified') {
//             header('Location: ../js_registration.php?js_personal_email=verified&js_institute_email=verified');
//           }
//         }else{
//           header('Location: ../js_registration.php?js_personal_email=verified');
//         }
//       }else{
//         echo "your email address does not verified";
//       }
//     }
//     if ($_GET['e_verification'] == 'js_institute') {
//       session_start();
//       $number = $_SESSION['i_email_no'];
//       if ($_POST['v_code'] == $number) {
//         // header('Location: ../js_registration.php?js_institute_email=verified');
//         if(isset($_GET['js_personal_email'])) {
//           if ($_GET['js_personal_email'] == 'verified') {
//             header('Location: ../js_registration.php?js_personal_email=verified&js_institute_email=verified');
//           }
//         }else{
//           header('Location: ../js_registration.php?js_institute_email=verified');
//         }
//       }else{
//         echo "your email address does not verified";
//       }
//     }
//   }
// }

if(!isset($_SESSION)) { session_start(); }
if(isset($_POST['i_v_code']) and isset($_POST['p_v_code'])) {
  if($_POST['i_v_code'] == $_SESSION['i_email_no'] and $_POST['p_v_code'] == $_SESSION['p_email_no']){
    //echo "your personal and institute email verified.";
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

    if(!isset($_SESSION)) { session_start(); }
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $js_p_email = $_SESSION['js_p_email'];
    $js_i_name = $_SESSION['institute'];
    $gender = $_SESSION['gender'];
    $birthday = $_SESSION['birthday'];
    $address = $_SESSION['address'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $country = $_SESSION['country'];
    $zipcode = $_SESSION['zipcode'];
    $mobileno = $_SESSION['mobileno'];
    $js_i_email = $_SESSION['js_i_email'];
    $password = $_SESSION['password'];
    $c_password = $_SESSION['c_password'];
    $sql = "INSERT INTO js_registration (js_firstname, js_lastname, js_p_email, ja_i_name, js_gender, js_birthdate, js_address, js_city, js_state, js_country, js_zipcode, js_mobile_no, js_i_email, js_password)
    VALUES ('$first_name', '$last_name', '$js_p_email', '$js_i_name', '$gender', '$birthday', '$address', '$city', '$state', '$country', '$zipcode', '$mobileno', '$js_i_email', '$password')";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      echo "<script>var r = alert('Congratulations, You are successfully registered.'); if( r != true) { location.href = '../index.php' }</script>";
      session_unset();
    } else {
      // echo "Error: " . $sql . "<br>" . $conn->error;
      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../index.php' }</script>";
    }

    $conn->close();
  }elseif ($_POST['i_v_code'] != $_SESSION['i_email_no'] and $_POST['p_v_code'] == $_SESSION['p_email_no']) {
    // echo "your personal email verified but institute email not verified.";
    echo "<script>alert('Institute E-mail verification code doesnot matched.\\nPlease Enter vaild verification code.');</script>";
  }elseif($_POST['i_v_code'] == $_SESSION['i_email_no'] and $_POST['p_v_code'] != $_SESSION['p_email_no']){
    // echo "your institute email verified but personal email not verified.";
    echo "<script>alert('Personal E-mail verification code doesnot matched.\\nPlease Enter vaild verification code.');</script>";
  }else{
    // echo "your personal and institute both email is not verified.";
    echo "<script>alert('Personal and Institute E-mail verification code doesnot matched.\\nPlease Enter vaild verification code.');</script>";
  }
}elseif (isset($_POST['i_v_code']) and !isset($_POST['p_v_code'])) {
  if($_POST['i_v_code'] == $_SESSION['i_email_no']){
    // echo "institute email is verified.";
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

    if(!isset($_SESSION)) { session_start(); }
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $js_p_email = $_SESSION['js_p_email'];
    $js_i_name = $_SESSION['institute'];
    $gender = $_SESSION['gender'];
    $birthday = $_SESSION['birthday'];
    $address = $_SESSION['address'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $country = $_SESSION['country'];
    $zipcode = $_SESSION['zipcode'];
    $mobileno = $_SESSION['mobileno'];
    $js_i_email = $_SESSION['js_i_email'];
    $password = $_SESSION['password'];
    $c_password = $_SESSION['c_password'];
    $sql = "INSERT INTO js_registration (js_firstname, js_lastname, js_p_email, ja_i_name, js_gender, js_birthdate, js_address, js_city, js_state, js_country, js_zipcode, js_mobile_no, js_i_email, js_password)
    VALUES ('$first_name', '$last_name', '$js_p_email', '$js_i_name', '$gender', '$birthday', '$address', '$city', '$state', '$country', '$zipcode', '$mobileno', '$js_i_email', '$password')";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      echo "<script>var r = alert('Congratulations, You are successfully registered.'); if( r != true) { location.href = '../index.php' }</script>";
      session_unset();
    } else {
      // echo "Error: " . $sql . "<br>" . $conn->error;
      echo "<script>var r = alert('Sorry, something went wrong.\\nPlease try again later.'); if( r != true) { location.href = '../index.php' }</script>";
    }
  }
}

?>


<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .cantainer-fluid {
      background-color: #EDEFF9;
      width: 576px;
      margin: auto auto;
      height: auto;
    }
    @media only screen and (max-width: 576px) {
      .cantainer-fluid {
        background-color: #EDEFF9;
        width: 95%;
        margin: 10px auto;
        height: auto;
      }
    }
  </style>
</head>
<body>
  <form action=" " method="post">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="mx-auto" style="width: 576px;">
          <div class="cantainer-fluid justify-content-center align-self-center" align="center">
            <img style="width: 240px;height: 60px;margin: 30px auto;" src="https://www.charusat.ac.in/images/logo.png" alt="charusat">
            <p style="font-size: 20px;font-weight: 500;">Charusat Email Verification</p>
            <?php if(!isset($_SESSION)) { session_start(); } if($_SESSION['p_e_verification']) { ?>
            <div>
              <p style="margin-top: 30px;margin-left: 2.5%;" align="left">Email Verification of <span style="font-weight: 500;"><?php if(!isset($_SESSION)) { session_start(); } echo $_SESSION['js_p_email']; ?></span></p>
              <input style="width: 95%;padding: 5px 10px;" type="text" name="p_v_code" placeholder="enter your verification code">
            </div>
            <?php } ?>
            <?php if(!isset($_SESSION)) { session_start(); } if($_SESSION['i_e_verification']) { ?>
            <div>
              <p style="margin-top: 30px;margin-left: 2.5%;" align="left">Email Verification of <span style="font-weight: 500;"><?php if(!isset($_SESSION)) { session_start(); } echo $_SESSION['js_i_email']; ?></span></p>
              <input style="width: 95%;padding: 5px 10px;" type="text" name="i_v_code" placeholder="enter your verification code">
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-danger" style="margin-top: 30px;margin-bottom: 30px;">Submit</button>
          </div> 
        </div>
      </div>
    </div>
  </form>

<script type="text/javascript">
  
</script>
</body>
</html>