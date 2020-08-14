<?php 
  if(!isset($_SESSION)) { session_start(); }
  if(!isset($_SESSION['js_id'])){
    header('Location: index.php');
  }
?>
<?php 
  
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_name = "cdpc";  
      
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
  } 

  if(!isset($_SESSION)) { session_start(); }
  $user_id = $_SESSION['js_id'];

  $sql = "select *from js_registration where js_id = '$user_id'";  
  $result = mysqli_query($con, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $user_fname = $row["js_firstname"];
  $user_lname = $row["js_lastname"];
  $user_email = $row["js_i_email"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/successornot.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>CDPC || Account</title>
  </head>
  <body id="myPage" data-offset="60">

    <div class="ss_logo">
      <i type="button" class="fas fa-bars" onclick="openNav()" style="color: #006cb5;border: 1px solid #EDEFF9;margin: auto 20px;"></i>
      <a href="#myPage">
        <img style="width: 180px;height: 40px;margin-left: 0px;" src="https://www.charusat.ac.in/images/logo.png" alt="charusat">
      </a>
    </div>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark ls_logo" style="background-color: #EDEFF9;width: 100%;">
      <a href="#myPage">
        <img style="width: 180px;height: 40px;margin-left: 10px;" src="https://www.charusat.ac.in/images/logo.png" alt="charusat">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>

        <ul class="navbar-nav nav-item align-self-end" style="margin-right: 50px;">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 5px;margin-right: 5px;">
              <span style="color: #808081;font-size: 16px;font-weight: 500">JOBS</span>
              <i class="fas fa-caret-down" style="color: #808081"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <div class="d_jobs">
                <div class="dn_jobs">
                  <p style="font-weight: 600;">Location</p>
                  <div class="dropdown-divider"></div>
                  <p class="jd_items" href="#" >Work From Home Jobs</p>
                  <p class="jd_items" href="#" >Jobs At Ahmedabad</p>
                  <p class="jd_items" href="#" >Jobs At Vadodara</p>
                  <p class="jd_items" href="#" >Jobs At Surat</p>
                  <p class="jd_items" href="#" >Jobs At Gandhinagar</p>
                  <p class="jd_items" href="#" >Jobs At Outside the Gujarat</p>
                </div>
                <div class="dn_jobs">
                  <p style="font-weight: 600;">Department</p>
                  <div class="dropdown-divider"></div>
                  <p class="jd_items" href="#" >Computer Engineering Jobs</p>
                  <p class="jd_items" href="#" >Information Technology Jobs</p>
                  <p class="jd_items" href="#" >E&C Engineering Jobs</p>
                  <p class="jd_items" href="#" >Electrical Engineering Jobs</p>
                  <p class="jd_items" href="#" >Mechanical Engineering Jobs</p>
                  <p class="jd_items" href="#" >Civil Engineering Jobs</p>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span style="font-weight: 500;font-size: 20px;color: #808081;border: 1px solid #808081;padding: 1px 9px;padding-bottom: 3px;border-radius: 40px;"><?php echo strtoupper($user_fname[0]); ?></span>
              <i class="fas fa-caret-down" style="color: #808081"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a>
                <span style="margin-left: 10px;font-size: 14px;color: #808081;font-weight: 600"><?php echo $user_fname." ".$user_lname; ?></span><br>
                <span style="margin-left: 10px;font-size: 14px;color: #808081;margin-right: 10px"><?php echo $user_email; ?></span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="myApplication.php">My Applications</a>
              <a class="dropdown-item" href="resume.php">My Resume</a>
              <a class="dropdown-item" href="myPreferences.php">My Preferences</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" id="navbarDropdown_more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More<span style="float:right;"><i class="fas fa-caret-down" style="color: #808081"></i></span></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown_more">
                <a class="dropdown-item" href="m_Account.php">Manage Account</a>
                <a class="dropdown-item" href="php/logout.php">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="cantainer text-center"></div>

    <div class="cantainer-fluid">
      <?php if (substr($_GET['job'], 1) == "true") { ?>
      <div style="background-color: #edeff9;border-radius: 10px;margin-top: 30px;">
        <p style="color: #006cb5; padding: 10px 15px;"><span style="font-size: 18px;font-weight: 600">Congatulations, </span><span>your job application for human resource post at HCL Technologies <span style="font-weight: 600">submitted successfully</span>.if company will be interested in your profile, they will contact you through verified mobile number or verified e-mail address.</span></p>
        <p style="margin-left: 15px;color: #808081;padding-bottom: 10px;">Please make sure given mobile number or email address verified. if not then verify it.</p>
      </div>
      <?php } ?>

      <?php if (substr($_GET['job'], 1) == "false") { ?>
      <div style="border: 1px solid red;border-radius: 10px;margin-top: 30px;">
        <p style="color: red; padding: 10px 15px;"><span style="font-size: 18px;font-weight: 600">Sorry, </span><span>your application cannot registered successfully. <span style="font-weight: 600">somthing went wrong. </span><br>Please try again later.</span></p>
      </div>
      <?php } ?>

      <div>
        <div style="background-color: #006cb5;margin-top: 30px;display: flex;width: 185px;color: #fff;cursor: pointer;" onclick="backTojobprofiles()">
          <i class="fas fa-arrow-left" style="margin: 11px 10px;"></i>
          <p style="margin: 5px 0px;font-weight: 600;">Back to job profiles</p>
        </div>
      </div>

      <p class="text-center" style="font-size: 20px;margin-top: 20px;">Relevant Jobs</p>

      <div id="R_Job_Post">
      </div>
      <!-- <div class="j_post">
        <div class="row" style="padding: 0px 35px;">
          <div style="width: auto;margin-right: auto;">
            <h4 style="color: black;color: #006cb5;">Human Resources (HR)</h4> 
            <p style="color: black;">HCL Technologies</p>
          </div>
          <div class="c_logo1">
            <img class="c_logo" src="https://internshala.com/cached_uploads/logo%2F5e2fde49d21461580195401.jpg" alt="">
          </div>
        </div>
        <div class="j_post_divider"></div>
        <div class="row" style="padding: 20px 35px;">
          <p style="color: #808081;line-height: 5px;">Locations:- </p>
          <p style="color: #424242;line-height: 5px;">Work From Home</p>
        </div>
        <div class="row" style="width: 100%;margin: auto;">
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Start Date</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">Immediately</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Bond Time</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">3 Months</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Package</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;"><i class="fas fa-rupee-sign fa-xs" style="color: #919191;line-height: 5px;"></i>3500/month</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Post On</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">20 Apr'20</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Apply By</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">18 May'20</p>
          </div>
        </div>
        <div style="width: 100%;margin: auto;background-color: #9FABFF;height: 40px;">
          <div style="display: flex;float: right;background-color: #9FABFF;height: 30px;margin-top: 10px;margin-right: 15px;cursor: pointer;" onclick="viewDetails()">
            <p style="color: #fff;margin-right: 10px;font-size: 14px;font-weight: 510;">VIEW DETAILS</p>
            <i class="fas fa-chevron-right" style="color: #fff;margin-top: 2px;"></i>
          </div>
        </div>
      </div>

      <div class="j_post">
        <div class="row" style="padding: 0px 35px;">
          <div style="width: auto;margin-right: auto;">
            <h4 style="color: black;color: #006cb5;">Human Resources (HR)</h4> 
            <p style="color: black;">HCL Technologies</p>
          </div>
          <div class="c_logo1">
            <img class="c_logo" src="https://internshala.com/cached_uploads/logo%2F5e2fde49d21461580195401.jpg" alt="">
          </div>
        </div>
        <div class="j_post_divider"></div>
        <div class="row" style="padding: 20px 35px;">
          <p style="color: #808081;line-height: 5px;">Locations:- </p>
          <p style="color: #424242;line-height: 5px;">Work From Home</p>
        </div>
        <div class="row" style="width: 100%;margin: auto;">
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Start Date</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">Immediately</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Bond Time</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">3 Months</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Package</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;"><i class="fas fa-rupee-sign fa-xs" style="color: #919191;line-height: 5px;"></i>3500/month</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Post On</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">20 Apr'20</p>
          </div>
          <div style="padding: 0px 15px;margin: auto;">
            <p style="color: #808081;line-height: 5px;font-size: 14px;">Apply By</p>
            <p style="color: #424242;line-height: 5px;font-size: 14px;">18 May'20</p>
          </div>
        </div>
        <div style="width: 100%;margin: auto;background-color: #9FABFF;height: 40px;">
          <div style="display: flex;float: right;background-color: #9FABFF;height: 30px;margin-top: 10px;margin-right: 15px;cursor: pointer;" onclick="viewDetails()">
            <p style="color: #fff;margin-right: 10px;font-size: 14px;font-weight: 510;">VIEW DETAILS</p>
            <i class="fas fa-chevron-right" style="color: #fff;margin-top: 2px;"></i>
          </div>
        </div>
      </div> -->
      <!-- <div style="text-align: center;background-color: #edeff9;border-radius: 10px;">
        <p style="color: #006cb5;padding: 60px 0px;font-size: 20px;">No Relevant Jobs found</p>
      </div> -->

    </div>

<!--Left menu bar for mobile Modal -->
<div id="leftNavbar" class="sidenav">
  <div class="row" style="margin-bottom: 20px;">
    <div style="display: flex;">
      <div style="margin: auto 0px;">
        <span style="font-weight: 500;font-size: 20px;color: #808081;border: 1px solid #808081;padding: 1px 9px;padding-bottom: 3px;border-radius: 40px;height: 35px;margin-left: 25px;"><?php echo strtoupper($user_fname[0]); ?></span>
      </div>
      <div style="margin-top: 15px;">
        <p style="margin-left: 10px;font-size: 13px;color: #808081;font-weight: 600;line-height: 0px;"><?php echo $user_fname." ".$user_lname; ?></p>
        <p style="margin-left: 10px;font-size: 13px;color: #808081;line-height: 0px;"><?php echo $user_email; ?></p>
      </div>
    </div>
    <div style="position: absolute;right: 10px;top: 30px;" onclick="closeNav()">
      <i class="fas fa-times" style="font-size: 20px;color: #808081"></i>
    </div>
  </div>
  <div class="dropdown-divider"></div>
  <a href="homePage.php" style="font-size: 19px;color: #000000;">Jobs</a>
  <a href="#" style="font-size: 19px;color: #000000;">Work From Home Jobs</a>
  <div class="dropdown-divider"></div>
  <a href="myApplication.php" style="font-size: 19px;color: #000000;">My Applications</a>
  <a href="resume.php" style="font-size: 19px;color: #000000;">My Resume</a>
  <a href="myPreferences.php" style="font-size: 19px;color: #000000;">My Preferences</a>
  <a href="m_Account.php" style="font-size: 19px;color: #000000;">Manage Account</a>
  <a href="php/logout.php" style="font-size: 19px;color: #000000;">Log out</a>
</div>

<script type="text/javascript">
  function openNav() {
    document.getElementById("leftNavbar").style.width = "300px";
  }

  function closeNav() {
    document.getElementById("leftNavbar").style.width = "0";
  }

  var l_nav = document.getElementById("4");
  window.onclick = function(event) {
    if (event.target == l_nav) {
      closeNav();
    }
  }

  function viewDetails(x) {
    location.href = "jobApplication.php?job="+ x;
  }

  function backTojobprofiles() {
    location.href = "homePage.php";
  }

  $(document).ready(function(){

    // Job Post Details
    var xmlhttp = new XMLHttpRequest(); 
    var r_jp_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                r_jp_details +=  '<div class="j_post">' + 
                                  '<div class="row" style="padding: 0px 35px;">' +
                                    '<div style="width: auto;margin-right: auto;">' +
                                      '<h4 style="color: black;color: #006cb5;">' + myObj[i].ja_title + '</h4>' + 
                                      '<p style="color: black;">' + myObj[i].c_name + '</p>' +
                                    '</div>' + 
                                    '<div class="c_logo1">' +
                                      '<img class="c_logo" src="' + myObj[i].c_imageUrl + '" alt="">' + 
                                    '</div>' +
                                  '</div>' +
                                  '<div class="j_post_divider"></div>' +
                                  '<div class="row" style="padding: 20px 35px;">' +
                                    '<p style="color: #808081;line-height: 5px;">Locations:- </p>' +
                                    '<p style="color: #424242;line-height: 5px;">' + myObj[i].ja_location + '</p>' +
                                  '</div>' +
                                  '<div class="row" style="width: 100%;margin: auto;">' + 
                                    '<div style="padding: 0px 15px;margin: auto;">' +
                                      '<p style="color: #808081;line-height: 5px;font-size: 14px;">Start Date</p>' +
                                      '<p style="color: #424242;line-height: 5px;font-size: 14px;">' + myObj[i].ja_startdate + '</p>' +
                                    '</div>' + 
                                    '<div style="padding: 0px 15px;margin: auto;">' + 
                                      '<p style="color: #808081;line-height: 5px;font-size: 14px;">Bond Time</p>' + 
                                      '<p style="color: #424242;line-height: 5px;font-size: 14px;">' + myObj[i].ja_bondtime + '</p>' +
                                    '</div>' + 
                                    '<div style="padding: 0px 15px;margin: auto;">' +
                                      '<p style="color: #808081;line-height: 5px;font-size: 14px;">Package</p>' + 
                                      '<p style="color: #424242;line-height: 5px;font-size: 14px;"><i class="fas fa-rupee-sign fa-xs" style="color: #919191;line-height: 5px;"></i>' + myObj[i].ja_package + ' ' + myObj[i].ja_package_type + '</p>' + 
                                    '</div>' + 
                                    '<div style="padding: 0px 15px;margin: auto;">' + 
                                      '<p style="color: #808081;line-height: 5px;font-size: 14px;">Post On</p>' + 
                                      '<p style="color: #424242;line-height: 5px;font-size: 14px;">' + myObj[i].ja_poston + '</p>' + 
                                    '</div>' + 
                                    '<div style="padding: 0px 15px;margin: auto;">' + 
                                      '<p style="color: #808081;line-height: 5px;font-size: 14px;">Apply By</p>' + 
                                      '<p style="color: #424242;line-height: 5px;font-size: 14px;">' + myObj[i].ja_applyby + '</p>' +
                                    '</div>' + 
                                  '</div>' + 
                                  '<div style="width: 100%;margin: auto;background-color: #9FABFF;height: 40px;">' + 
                                    '<div style="display: flex;float: right;background-color: #9FABFF;height: 30px;margin-top: 10px;margin-right: 15px;cursor: pointer;" onclick="viewDetails('+ myObj[i].ja_id +')">' + 
                                      '<p style="color: #fff;margin-right: 10px;font-size: 14px;font-weight: 510;">VIEW DETAILS</p>' + 
                                      '<i class="fas fa-chevron-right" style="color: #fff;margin-top: 2px;"></i>' + 
                                    '</div>' + 
                                  '</div>' + 
                                '</div>'

              }
              // document.getElementById("R_Job_Post").innerHTML = r_jp_details;
            }else {
              r_jp_details += '<div style="text-align: center;background-color: #edeff9;border-radius: 10px;">' + 
                                '<p style="color: #006cb5;padding: 60px 0px;font-size: 20px;">No Relevant Jobs found</p>' +
                              '</div>'
            }
            document.getElementById("R_Job_Post").innerHTML = r_jp_details;
        } 
    }; 
    xmlhttp.open("GET", "php/relevantjobpost.php?job="+<?php if (isset($_GET['job'])) { echo $_GET['job'][0]; } ?>, true); 
    xmlhttp.send(); 

  });

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>