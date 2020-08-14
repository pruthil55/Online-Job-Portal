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

    <link href="css/viewApplication.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

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
                <span style="margin-left: 10px;font-size: 14px;color: #808081;margin-right: 10px;"><?php echo $user_email; ?></span>
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

    <!-- <div class="cantainer text-center">
      <p style="color: black;font-size: 20px;margin-top: 20px;font-family: Roboto;">Below is your application for web development job at ssm technology</p>
    </div> -->
    <div id="vaHeader">
    </div>

    <div class="cantainer-fluid">
      <!-- <div class="firstbox">
        <p style="margin-left: 5%;font-size: 20px;margin-top: 30px;line-height: 0px;font-weight: 500;">Dixit Ukani</p>
        <div class="row" style="width: 90%;margin: 0px auto;">
          <p style="color: #818181;font-weight: 400">Surat</p>
          <p style="margin-left: auto;color: #818181;font-weight: 400;">Applied 20 days ago</p>
        </div>
        <div style="height: 1px;background-color: #D1D1D1;width: 90%;margin: 0px auto;"></div>
        <div style="width: 90%;margin: 0px auto;">
          <p style="font-size: 20px;margin-top: 25px;line-height: 0px;font-weight: 500;">Assessment</p>
          <p style="font-size: 15px;font-weight: 500;margin-top: 25px;">Q1. Why should you be hired for this job?</p>
          <p style="font-size: 14px;color: #818181;">I have one year experience in html, css and bootstrap. I make two projects based on this technologies. Second one is currently working so that I have not upload yet GitHub but if you want to see my work then I can show you. Kind of job portal for my University. I am full stack developer. But I love to code frontend more than back end. I am very excited to do such kind of internship.thank you.</p>
          <p style="font-size: 15px;font-weight: 500;margin-top: 25px;">Q2. What are you expect from us (company)?</p>
          <p style="font-size: 14px;color: #818181;">I have one year experience in html, css and bootstrap. I make two projects based on this technologies. Second one is currently working so that I have not upload yet GitHub but if you want to see my work then I can show you. Kind of job portal for my University. I am full stack developer. But I love to code frontend more than back end. I am very excited to do such kind of internship.thank you.</p>
        </div>
      </div> -->
      <div id="vaFirstbox">
      </div>

      <div class="secondbox">
        <p style="margin-left: 5%;font-size: 20px;margin-top: 30px;line-height: 0px;font-weight: 500;">Resume</p>
        <div style="width: 90%;margin: 0px auto;">
          <p style="margin-top: 40px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">EDUCATION</p>
          <div id="seDetails">
          </div>
          <div id="ceDetails">
          </div>
          <div id="oeDetails">
          </div>
          <!-- <div>
            <span style="font-size: 14px;font-weight: 600;">B.Tech (Hons.), Computer Science & Engineering (2017 - 2021)</span><br>
            <span style="font-size: 14px;color: #818181;">CS Patel Institute of Technology</span><br>
            <span style="font-size: 14px;color: #818181;">Percentage: 84.12%</span><br>
          </div> -->
        </div>
        <div style="width: 90%;margin: 0px auto;">
          <p style="margin-top: 30px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">INTERNSHIPS</p>
          <div id="iDetails">
          </div>
          <!-- <div>
            <span style="font-size: 14px;font-weight: 600;">Digital Marketing</span><br>
            <span style="font-size: 14px;color: #818181;">Xitij Infotech, Virtual</span><br>
            <span style="font-size: 14px;color: #818181;">May 2019 - Jun 2019</span><br>
            <span style="font-size: 14px;color: #818181;">I have good experience in digital marketing.I am good enough in HTML, CSS, Javascript, Jquary, Java(for backend connection), Bootstrap, and PHP. I made 2-3 Attractive themes based on frontend languages during internship.It was my good experiance.</span><br>
          </div> -->
        </div>
        <div style="width: 90%;margin: 0px auto;">
          <p style="margin-top: 30px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">PROJECTS</p>
          <div id="proDetails">
          </div>
        </div>
        <div style="width: 90%;margin: 0px auto;">
          <p style="margin-top: 30px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">SKILLS</p>
          <div id="sDetails">
          </div>
        </div>
        <div style="width: 90%;margin: 0px auto;">
          <p style="margin-top: 30px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">ADDITIONAL DETAILS</p>
          <div id="adDetails">
          </div>
        </div>
        <div style="width: 90%;margin: 0px auto;margin-bottom: 20px;">
          <p style="margin-top: 30px;font-size: 15px;font-weight: 600;color: #818181;line-height: 0px;">CONTACT DETAILS</p>
          <div id="pdDetails">
          </div>
        </div>
      </div>
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

  $(document).ready(function(){
    // Job Post Details
    var xmlhttp = new XMLHttpRequest(); 
    var va_header = "";
    var va_firstbox = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if(myObj[i].qa_2 == "none"){
                  var qa_2 = "blank";
                }else{
                  var qa_2 = myObj[i].qa_2;
                }
                va_header +=  '<div class="cantainer text-center">' + 
                                '<p style="color: black;font-size: 20px;margin-top: 20px;font-family: Roboto;">Below is your application for ' + myObj[i].ja_title + ' job at ' + myObj[i].c_name + '</p>' +
                              '</div>'

                va_firstbox +=  '<div class="firstbox">' + 
                                  '<p style="margin-left: 5%;font-size: 20px;margin-top: 30px;line-height: 0px;font-weight: 500;">' + myObj[i].js_firstname + ' ' + myObj[i].js_lastname + '</p>' + 
                                  '<div class="row" style="width: 90%;margin: 0px auto;">' + 
                                    '<p style="color: #818181;font-weight: 400">' + myObj[i].js_city + '</p>' + 
                                    '<p style="margin-left: auto;color: #818181;font-weight: 400;">Applied ' + myObj[i].date_ago + ' days ago</p>' + 
                                  '</div>' + 
                                  '<div style="height: 1px;background-color: #D1D1D1;width: 90%;margin: 0px auto;"></div>' + 
                                  '<div style="width: 90%;margin: 0px auto;">' + 
                                    '<p style="font-size: 20px;margin-top: 25px;line-height: 0px;font-weight: 500;">Assessment</p>' + 
                                    '<p style="font-size: 15px;font-weight: 500;margin-top: 25px;">Q1. Why should you be hired for this job?</p>' + 
                                    '<p style="font-size: 14px;color: #818181;">' + myObj[i].qa_1 + '</p>' + 
                                    '<p style="font-size: 15px;font-weight: 500;margin-top: 25px;">Q2. What are you expect from us (company)?</p>' + 
                                    '<p style="font-size: 14px;color: #818181;">' + qa_2 + '</p>' + 
                                  '</div>' + 
                                '</div>'
              }
              document.getElementById("vaHeader").innerHTML = va_header;
              document.getElementById("vaFirstbox").innerHTML = va_firstbox;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/viewApplicationDetails.php?application="+<?php if(isset($_GET['application'])){ echo $_GET['application']; } ?>, true); 
    xmlhttp.send(); 

    // School Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var se_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if(myObj[i].sd_level == "XII(Senior Secondary) Details"){
                  var degree = "XII(Senior Secondary)";
                  var stream = ', ' + myObj[i].sd_stream;
                }
                if(myObj[i].sd_level == "X(Secondary) Details"){
                  var degree = "X(Secondary)";
                  var stream = '';
                }
                if(myObj[i].sd_pscale == "Percentage"){
                  var sign = "%";
                }else{
                  var sign = "";
                }
                se_details +=  '<div>' + 
                                  '<span style="font-size: 14px;font-weight: 600;">' + degree + ', ' + myObj[i].sd_board + stream + '(' + myObj[i].sd_yoc + ')' + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].sd_school + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].sd_pscale + ': ' + myObj[i].sd_performance + sign + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("seDetails").innerHTML = se_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/s_educationDetails.php", true); 
    xmlhttp.send();

    // College Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var ce_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if(myObj[i].cd_pscale == "Percentage"){
                  var sign = "%";
                }else{
                  var sign = "";
                }
                ce_details +=  '<div>' + 
                                  '<span style="font-size: 14px;font-weight: 600;">' + myObj[i].cd_degree + ', ' + myObj[i].cd_stream + '(' + myObj[i].cd_s_year +'-'+ myObj[i].cd_e_year +')' + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].cd_college + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].cd_pscale + ': ' + myObj[i].cd_performance + sign + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("ceDetails").innerHTML = ce_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/c_educationDetails.php", true); 
    xmlhttp.send();

    // Other Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var oe_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if(myObj[i].od_level == "PhD Details"){
                  var degree = "PhD";
                }
                if(myObj[i].od_level == "Diploma Details"){
                  var degree = "Diploma";
                }
                if(myObj[i].sd_pscale == "Percentage"){
                  var sign = "%";
                }else{
                  var sign = "";
                }
                oe_details +=  '<div>' + 
                                  '<span style="font-size: 14px;font-weight: 600;">' + degree + ', ' + myObj[i].od_stream + '(' + myObj[i].od_s_year + '-' + myObj[i].od_e_year + ')' + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].od_college + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].od_pscale + ': ' + myObj[i].od_performance + sign + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("oeDetails").innerHTML = oe_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/o_educationDetails.php", true); 
    xmlhttp.send();

    // Internship Details
    var xmlhttp = new XMLHttpRequest(); 
    var i_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                i_details +=  '<div>' + 
                                '<span style="font-size: 14px;font-weight: 600;">' + myObj[i].i_technology + '</span><br>' + 
                                '<span style="font-size: 14px;color: #818181;">' + myObj[i].i_company + ', ' + myObj[i].i_location + '</span><br>' + 
                                '<span style="font-size: 14px;color: #818181;">' + myObj[i].i_startdate + '-' + myObj[i].i_enddate + '</span><br>' + 
                                '<span style="font-size: 14px;color: #818181;">' + myObj[i].i_discription + '</span><br>' + 
                              '</div>'
              }
              document.getElementById("iDetails").innerHTML = i_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/internshipDetails.php", true); 
    xmlhttp.send();

    // Project Details
    var xmlhttp = new XMLHttpRequest(); 
    var pro_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                pro_details +=  '<div>' + 
                                  '<span style="font-size: 14px;font-weight: 600;">' + myObj[i].p_title + '</span><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].p_startmonth + '-' + myObj[i].p_endmonth + '</span><br>' + 
                                  '<a style="font-size: 14px;color: #006cb5;cursor: pointer;" href="' + myObj[i].p_link + '">' + myObj[i].p_link + '</a><br>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].p_discription + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("proDetails").innerHTML = pro_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/projectDetails.php", true); 
    xmlhttp.send();

    // Skill Details
    var xmlhttp = new XMLHttpRequest(); 
    var s_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              s_details += '<div class="row" style="width: 100%;margin-left: 0%;">';
              for (var i = 0; i < myObj.length; i++) {
                s_details +=  '<div class="skill">' + 
                                '<span style="font-size: 14px;font-weight: 500">' + myObj[i].s_title + '</span><br>' + 
                                '<span style="font-size: 13px;color: #818181;">' + myObj[i].s_level + '</span>' + 
                              '</div>'
              }
              s_details += '</div>';
              document.getElementById("sDetails").innerHTML = s_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/skillDetails.php", true); 
    xmlhttp.send();

    // Additional Details
    var xmlhttp = new XMLHttpRequest(); 
    var ad_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                ad_details +=  '<div>' + 
                                  '<span style="font-size: 14px;color: #818181;">' + myObj[i].ad_discription + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("adDetails").innerHTML = ad_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/additionalDetails.php", true); 
    xmlhttp.send();

    // Contact Details
    var xmlhttp = new XMLHttpRequest(); 
    var pd_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                pd_details +=  '<div>' + 
                                  '<span style="font-weight: 500;">Institute Email : </span><span style="font-size: 14px;color: #818181;">' + myObj[i].js_i_email + '</span><br>' + 
                                  '<span style="font-weight: 500;">Personal Email : </span><span style="font-size: 14px;color: #818181;">' + myObj[i].js_p_email + '</span><br>' + 
                                  '<span style="font-weight: 500;">Phone : </span><span style="font-size: 14px;color: #818181;">+91 ' +  myObj[i].js_mobile_no + '</span><br>' + 
                                '</div>'
              }
              document.getElementById("pdDetails").innerHTML = pd_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/personalDetails.php", true); 
    xmlhttp.send(); 

  });


</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>