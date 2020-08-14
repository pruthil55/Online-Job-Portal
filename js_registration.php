<?php

// $p_e_verification = false;
// $i_e_verification = false;
// $e_validation_1 = false;
// $e_validation_2 = false;
// if (isset($_POST['js_p_email'])) {
  // require 'PHPMailer/PHPMailerAutoload.php';
  // require 'php/g_r_number.php';

  // $mail = new PHPMailer;

  // $number = $number_1;
  // session_start();
  // $_SESSION['p_email_no'] = $number;
  // //$mail->SMTPDebug = 3;                               // Enable verbose debug output
  // $mail->isSMTP();                                      // Set mailer to use SMTP
  // $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
  // $mail->SMTPAuth = true;                               // Enable SMTP authentication
  // $mail->Username = 'ramravan1232@gmail.com';                 // SMTP username
  // $mail->Password = 'Dixit@123';                           // SMTP password
  // // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  // $mail->Port = 25;                                    // TCP port to connect to

  // $mail->setFrom('ramravan1232@gmail.com', 'CDPC');
  // $mail->addAddress($_POST['js_p_email']);     // Add a recipient
  // $_SESSION['js_p_email'] = $_POST['js_p_email'];

  // $mail->isHTML(true);
  // $mail->Subject = 'E-mail Address Verification';
  // $mail->Body    = '<html><body>';
  // $mail->Body    .= '<span style="font-size: 16px;"><b>Verification code :- </b>'.$number.'</span>';
  // $mail->Body    .= '<p style="font-size: 15px;">Please do not share this verification code with other.if you share and any kind of misuse happen then are not responsible for it.</p>';
  // $mail->Body    .= '<p style="font-size: 15px;">If you have not applied for E-mail Verification in our portal, Please ignore this email.May be user enter wrong email address by mistake.</p>';
  // $mail->Body    .= '</body></html>';

  // if(!$mail->send()) {
  //     if ($mail->ErrorInfo == 'You must provide at least one recipient email address.') {
  //       $e_validation_1 = true;
  //     }else{
  //       echo 'Message could not be sent.';
  //       echo 'Mailer Error: ' . $mail->ErrorInfo;
  //     }
  // } else {
  //     // header('Location: php/emailVerification.php?e_verification=js_personal');
  //     if(isset($_GET['js_institute_email'])) {
  //       if ($_GET['js_institute_email'] == 'verified') {
  //         header('Location: php/emailVerification.php?e_verification=js_personal&js_institute_email=verified');
  //       }
  //     }else{
  //       header('Location: php/emailVerification.php?e_verification=js_personal');
  //     }
  // }

// }

// if (isset($_POST['js_i_email'])) {
//   require 'PHPMailer/PHPMailerAutoload.php';
//   require 'php/g_r_number.php';

//   $mail = new PHPMailer;

//   $number = $number_1;
//   session_start();
//   $_SESSION['i_email_no'] = $number;
//   //$mail->SMTPDebug = 3;                               // Enable verbose debug output
//   $mail->isSMTP();                                      // Set mailer to use SMTP
//   $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
//   $mail->SMTPAuth = true;                               // Enable SMTP authentication
//   $mail->Username = 'ramravan1232@gmail.com';                 // SMTP username
//   $mail->Password = 'Dixit@123';                           // SMTP password
//   // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//   $mail->Port = 25;                                    // TCP port to connect to

//   $mail->setFrom('ramravan1232@gmail.com', 'CDPC');
//   $mail->addAddress($_POST['js_i_email']);     // Add a recipient
//   $_SESSION['js_i_email'] = $_POST['js_i_email'];

//   $mail->isHTML(true);
//   $mail->Subject = 'E-mail Address Verification';
//   $mail->Body    = '<html><body>';
//   $mail->Body    .= '<span style="font-size: 16px;"><b>Verification code :- </b>'.$number.'</span>';
//   $mail->Body    .= '<p style="font-size: 15px;">Please do not share this verification code with other.if you share and any kind of misuse happen then are not responsible for it.</p>';
//   $mail->Body    .= '<p style="font-size: 15px;">If you have not applied for E-mail Verification in our portal, Please ignore this email.May be user enter wrong email address by mistake.</p>';
//   $mail->Body    .= '</body></html>';

//   if(!$mail->send()) {
//       if ($mail->ErrorInfo == 'You must provide at least one recipient email address.') {
//         $e_validation_2 = true;
//       }else{
//         echo 'Message could not be sent.';
//         echo 'Mailer Error: ' . $mail->ErrorInfo;
//       }
//   } else {
//       // header('Location: php/emailVerification.php?e_verification=js_institute');
//       if(isset($_GET['js_personal_email'])) {
//         if ($_GET['js_personal_email'] == 'verified') {
//           header('Location: php/emailVerification.php?e_verification=js_institute&js_personal_email=verified');
//         }
//       }else{
//         header('Location: php/emailVerification.php?e_verification=js_institute');
//       }
//   }

// }

// if(isset($_GET['js_personal_email'])) {
//   if ($_GET['js_personal_email'] == 'verified') {
//     $p_e_verification = true;
//   }
// }

// if(isset($_GET['js_institute_email'])) {
//   if ($_GET['js_institute_email'] == 'verified') {
//     $i_e_verification = true;
//   }
// }


if(!isset($_SESSION)) { session_start(); }
 if (isset($_POST['Submit'])) { 
   $_SESSION['first_name'] = $_POST['first_name'];
   $_SESSION['last_name'] = $_POST['last_name'];
   $_SESSION['js_p_email'] = $_POST['js_p_email'];
   $_SESSION['institute'] = $_POST['institute'];
   $_SESSION['gender'] = $_POST['gender'];
   $_SESSION['birthday'] = $_POST['birthday'];
   $_SESSION['address'] = $_POST['address'];
   $_SESSION['city'] = $_POST['city'];
   $_SESSION['state'] = $_POST['state'];
   $_SESSION['country'] = $_POST['country'];
   $_SESSION['zipcode'] = $_POST['zipcode'];
   $_SESSION['mobileno'] = $_POST['mobileno'];
   $_SESSION['js_i_email'] = $_POST['js_i_email'];
   $_SESSION['password'] = $_POST['password'];
   $_SESSION['c_password'] = $_POST['c_password'];
   $_SESSION['p_e_verification'] = false;
   $_SESSION['i_e_verification'] = false;

   if($_SESSION['password'] == $_SESSION['c_password']){
    require 'PHPMailer/PHPMailerAutoload.php';

    if(!isset($_SESSION)) { session_start(); }
    if (isset($_SESSION['js_p_email'])) {
      // require 'PHPMailer/PHPMailerAutoload.php';
      require 'php/g_r_number.php';

      $mail = new PHPMailer;

      $number = $number_1;
      if(!isset($_SESSION)) { session_start(); }
      $_SESSION['p_email_no'] = $number;
      //$mail->SMTPDebug = 3;                               // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'ramravan1232@gmail.com';                 // SMTP username
      $mail->Password = 'Dixit@123';                           // SMTP password
      // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 25;                                    // TCP port to connect to

      $mail->setFrom('ramravan1232@gmail.com', 'CDPC');
      $mail->addAddress($_SESSION['js_p_email']);     // Add a recipient
      // $_SESSION['js_p_email'] = $_POST['js_p_email'];

      $mail->isHTML(true);
      $mail->Subject = 'E-mail Address Verification';
      $mail->Body    = '<html><body>';
      $mail->Body    .= '<span style="font-size: 16px;"><b>Verification code :- </b>'.$number.'</span>';
      $mail->Body    .= '<p style="font-size: 15px;">Please do not share this verification code with other.if you share and any kind of misuse happen then are not responsible for it.</p>';
      $mail->Body    .= '<p style="font-size: 15px;">If you have not applied for E-mail Verification in our portal, Please ignore this email.May be user enter wrong email address by mistake.</p>';
      $mail->Body    .= '</body></html>';

      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
      }else {
        // echo 'Message could be sent.';
        if(!isset($_SESSION)) { session_start(); }
        $_SESSION['p_e_verification'] = true;
      }

    }

    if(!isset($_SESSION)) { session_start(); }
    if (isset($_SESSION['js_i_email'])) {
      // require 'PHPMailer/PHPMailerAutoload.php';
      require 'php/g_r_number.php';

      $mail = new PHPMailer;

      $number = $number_1;
      if(!isset($_SESSION)) { session_start(); }
      $_SESSION['i_email_no'] = $number;
      //$mail->SMTPDebug = 3;                               // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'ramravan1232@gmail.com';                 // SMTP username
      $mail->Password = 'Dixit@123';                           // SMTP password
      // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 25;                                    // TCP port to connect to

      $mail->setFrom('ramravan1232@gmail.com', 'CDPC');
      $mail->addAddress($_SESSION['js_i_email']);     // Add a recipient
      // $_SESSION['js_p_email'] = $_POST['js_p_email'];

      $mail->isHTML(true);
      $mail->Subject = 'E-mail Address Verification';
      $mail->Body    = '<html><body>';
      $mail->Body    .= '<span style="font-size: 16px;"><b>Verification code :- </b>'.$number.'</span>';
      $mail->Body    .= '<p style="font-size: 15px;">Please do not share this verification code with other.if you share and any kind of misuse happen then are not responsible for it.</p>';
      $mail->Body    .= '<p style="font-size: 15px;">If you have not applied for E-mail Verification in our portal, Please ignore this email.May be user enter wrong email address by mistake.</p>';
      $mail->Body    .= '</body></html>';

      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
      }else {
        if(!isset($_SESSION)) { session_start(); }
        $_SESSION['i_e_verification'] = true;
        header('Location: php/emailVerification.php');
      }

    }

   }else{
      echo "<script>alert('your password doesnot match with confim password');</script>";
   }

 } 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Register</title>

    <style> 
      .cd {
        width: 90%;
        color: #fff;
        margin: 26px 12px;
        box-sizing: border-box;
        border: none;
        border-bottom: 1px solid #fff;
        background-color: transparent;
      }
      .cd:focus {
        outline: none;
        border: none;
        border-bottom: 1px solid #fff;
      }
      .cd::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff;
      }
      .cd:-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #fff;
      }

      .cd::-ms-input-placeholder { /* Microsoft Edge */
        color: #fff;
      }
      .pd {
        width: 90%;
        margin: 26px 12px;
        box-sizing: border-box;
        border: none;
        border-bottom: 1px solid black;
        background-color: transparent;
      }
      .pd:focus {
        outline: none;
        border: none;
        border-bottom: 1px solid black;
      }
      .twoColumn {
        width: 44.5%;
        margin-left: 15px;
      }
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
      }

      /* Add a green text color and a checkmark when the requirements are right */
      .valid {
        color: green;
      }

      .valid:before {
        position: relative;
        left: 0px;
        content: "✔";
      }

      /* Add a red text color and an "x" when the requirements are wrong */
      .invalid {
        color: red;
      }

      .invalid:before {
        position: relative;
        left: 0px;
        content: "✖";
      }
      @media only screen and (max-width: 774px) {
        .twoColumn {
          width: 100%;
          margin-left: 15px;
        }
      }
    </style>
  </head>
  <body>

    <div class="cantainer-fluid">
      <form action=" " method="post">
        <div class="row">
          <div class="col-sm">
            <h4 style="margin-left: 10px;margin-top: 20px;">Personal Details</h4>
            <div class="row">
              <div class="twoColumn">
                <input type="text" class="pd" name="first_name" placeholder="First Name" required>
              </div>
              <div class="twoColumn">
                <input type="text" class="pd" name="last_name" placeholder="Last Name" required>
              </div>
            </div>
            <!-- <form action=" " method="post"> -->
              <div style="display: flex;">
                <input type="email" class="pd" name="js_p_email" style="width: 90%;" placeholder="Enter your email ( personal )">
               <!--  <?php //if(!$p_e_verification) { ?>
                  <button type="submit" class="btn btn-primary" style="padding: 0px 5px;margin-left: -65px;height: 30px;margin-top: 20px;">Verifiy</button>
                  value="<?php //if(!isset($_SESSION)) { session_start(); }  if(isset($_SESSION['js_p_email']) and isset($_GET['js_personal_email'])){echo $_SESSION['js_p_email'];}else{echo "";}?>"
                <?php //} ?>
                <?php //if($p_e_verification) { ?>
                <button type="submit" class="btn btn-primary" style="padding: 0px 5px;margin-left: -75px;height: 30px;margin-top: 20px;" disabled>Verified</button>
                <?php //} ?> -->
              </div>
              <!-- <?php //if ($e_validation_1) { ?>
              <p style="line-height: 0px;margin-right: 8.5%;color: red;" align="right">Not valid field</p>
              <?php //} ?> -->
            <!-- </form>  -->
            <!-- <div class="dropdown">
              <input class="pd text-left" type="text" name="institute" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 90%;margin-left: 12px;padding: 5px 0px;margin-top: 30px;margin-right: auto;background-color: #fff;cursor: default;" id="institute" placeholder="Choose your institute">
              <i class="fas fa-caret-down fa-1x" style="margin-left: -20px;margin-bottom: 10px;"></i>
              <ul class="dropdown-menu" style="width: 90%;">
                <p style="margin: 10px 10px;color: black;cursor: pointer;" id="cspit">Chandubhai S Patel Institute Of Technology</p>
                <p style="margin: 10px 10px;color: black;cursor: pointer;" id="depstar">Devang Patel Science And Technology</p>
              </ul> 
            </div> -->
            <div class="dropdown">
              <input type="text" class="pd text-left" name="institute" list="institutename" placeholder="Choose your institute" required>
              <datalist id="institutename">
                <option value="Chandubhai S Patel Institute Of Technology">
                <option value="Devang Patel Science And Technology">
              </datalist>
            </div>
            <div class="row" style="margin-left: 12px;margin-top: 30px;">
              <p style="font-size: 18px;">Gender :</p>
              <div style="margin: 3px; margin-left: 20px;">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
              </div>
              <div style="margin: 3px;margin-left: 88px;">
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
              </div>
              <div style="margin: 4px;margin-left: 88px;">
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
              </div>
            </div> 
            <div style="margin-top: 10px;margin-left: 12px;margin-bottom: 20px;">
              <label for="birthday">Date Of Birth :</label>
              <input type="date" class="pd" style="width: 150px;padding: 0px 0px;" id="birthday" name="birthday">
            </div>
          </div>
          <div class="col-sm bg-primary" id="2half">
            <div id="c_2half">
              <h4 style="color: #fff;margin-left: 10px;margin-top: 20px;">Contact Details</h4>
              <input type="text" class="cd" name="address" placeholder="Flat no., Street and Area etc.">
              <div class="row" style="margin-right: 12px;">
                <div style="width: 29.2%;margin-left: 15px;">
                  <input type="text" class="cd" name="city" placeholder="City">
                </div>
                <div style="width: 29.2%;margin-left: 15px;">
                  <input type="text" class="cd" name="state" placeholder="State">
                </div>
                <div style="width: 29.2%;margin-left: 15px;">
                  <input type="text" class="cd" name="country" placeholder="Country">
                </div>
              </div>
              <div class="row" style="margin-right: 12px;">
                <div style="width: 45.6%;margin-left: 15px;margin-top: 5px;">
                  <input type="text" class="cd" name="zipcode" placeholder="Zip Code">
                </div>
                <div style="width: 46%;margin-left: 15px;display: flex;">
                  <div class="input-group-prepend">
                    <span class="cd" id="basic-addon1" style="background-color: #fff;color: black;padding: 4px 5px;margin-right: -10px;border-radius: 5px;">+91</span>
                  </div>
                  <input type="text" class="form-control cd" name="mobileno" style="padding: 4px 10px;margin-left: 0px;border: 1px solid #fff;" placeholder="Mobile no." aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <h4 style="color: #fff;margin-left: 10px;margin-top: 20px;">Additional Details</h4>
              <!-- <form action=" " method="post"> -->
                <div style="display: flex;">
                  <input type="email" class="cd" name="js_i_email" placeholder="Enter your email ( institute )" required>
                  <!-- <?php //if(!$i_e_verification) { ?>
                    <button type="submit" class="btn" style="padding: 0px 5px;margin-left: -65px;height: 30px;margin-top: 20px;background-color: #fff;">Verifiy</button>
                    value="<?php //if(!isset($_SESSION)) { session_start(); }  if(isset($_SESSION['js_i_email']) and isset($_GET['js_institute_email'])){echo $_SESSION['js_i_email'];}else{echo "";}?>"
                  <?php //} ?>
                  <?php //if($i_e_verification) { ?>
                  <button type="submit" class="btn" style="padding: 0px 5px;margin-left: -75px;height: 30px;margin-top: 20px;background-color: #fff;" disabled>Verified</button>
                  <?php //} ?> -->
                </div>
                <!-- <?php //if ($e_validation_2) { ?>
                <p style="line-height: 0px;margin-right: 8.5%;color: red;" align="right">Not valid field</p>
                <?php //} ?> -->
              <!-- </form> -->
              <input type="password" class="cd" name="password" placeholder="Enter your Password" id="password" required>
              <span id="message">
                <span id="letter" class="invalid" style="font-size: 12px;width: 120px;">A <b>lowercase</b> letter, </span>
                <span id="capital" class="invalid" style="font-size: 12px;width: 173px;">A <b>capital (uppercase)</b> letter, </span>
                <span id="number" class="invalid" style="font-size: 12px;width: 80px;">A <b>number</b>, </span>
                <span id="length" class="invalid" style="font-size: 12px;width: 200px;">Minimum <b>8 characters</b></span>
              </span>
              <input type="password" class="cd" name="c_password" placeholder="Enter your Confim Password" id="c_password" required>
              <div align="right" style="margin: 20px 0px;margin-right: 7%;">
                <button type="submit" name="Submit" class="btn btn-danger">Register</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

<script type="text/javascript">
  $(document).ready(function(){
    if( document.getElementById('c_2half').clientHeight >= window.innerHeight ){
      $('#2half').css('height','100%');
    }else{
      $('#2half').css('height',$( window ).height());
    }
  });

  var myInput = document.getElementById("password");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "inline-block";
    $("#message").css('display','flex');
    $("#message").css('margin-left','12px');
    $("#message").css('width','90%');
    $("#password").css('margin-bottom','0px');
  }

  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
    $("#password").css('margin-bottom','20px');
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>

<!-- Optional JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>