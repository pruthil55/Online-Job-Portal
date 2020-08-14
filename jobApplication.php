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

    <link href="css/jobApplication_1.css" rel="stylesheet">

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

    <div class="cantainer"></div>

    <div id="jobApplication">
    </div>
    <!-- <div class="cantainer-fluid">
      <p style="color: black;font-size: 20px;line-height: 25px;font-weight: 400;">Job Application for paprClip</p>

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
          <div style="display: flex;float: left;background-color: #9FABFF;height: 30px;margin-top: 10px;margin-right: 15px;">
            <p style="color: #fff;margin-left: 10px;font-size: 14px;font-weight: 510;">JOB POST</p>
          </div>
        </div>
      </div>

      <div style="border: 1px solid #D1D1D1;margin: 30px auto;">
        <div style="width: 96%;margin: 10px auto;">
          <p style="font-size: 17px;font-weight: 600;color: #808081;">About paprClip</p>
          <p style="color: #818181;font-size: 15px;">
            We are an early-stage startup in India working out of the American Embassy. Our vision is to create a paper-less billing system for a convenient & environment-friendly shopping with improved offline retail experience. PaprClip provides a hassle-free digital solution for paperless billing & data analytics to retail merchants.<br>
            Our product has been awarded by the University of Texas & the US State.
          </p>
          <p style="font-size: 17px;font-weight: 600;color: #808081;">About the job</p>
          <p style="color: #818181">
            Selected intern's day-to-day responsibilities include:
          </p>
          <p style="color: #818181;font-size: 15px;">
            1. Work on React Native on the front end to improve and iterate Android and iOS applications <br>
            2. Write code for the app logic as well as the business logic using reducers, actions, and frameworks <br>
            3. Diagnose, and perform bug fixes along with performance bottlenecks <br>
            4. Collaborate with teams in other organizations to ensure that required business features and compliance rules are implemented effectively <br>
            5. Build service artifacts, plan deployment, and coordinate timeline & tasks with project management & teams <br>
            6. Create and maintain documentation for your projects <br>
            7. Drive the discussions and decisions of technical topics related to the team <br>
          </p>
          <div style="display: flex;">
            <p style="font-size: 17px;font-weight: 600;color: #808081;">No. of vacancy for jobs :</p><p style="visibility: hidden;">""</p>
            <p style="color: #818181;font-size: 17px;">4</p>
          </div>
          <p style="font-size: 17px;font-weight: 600;color: #808081;">Skill(s) required</p>
          <p style="color: #818181;font-size: 15px;">
            Adobe Photoshop, Adobe Illustrator, Adobe Creative Suite, Creative Writing, 3ds Max, Copywriting
          </p>
          <div align="center">
            <button type="button" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;padding-bottom: 9px;" onclick="Applynow()">Apply Now</button>
          </div>
        </div>
      </div>

    </div> -->

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

  function Applynow(x) {
    location.href = "A_Questions.php?job="+x;
  }

  $(document).ready(function(){

    // Job Post Details
    var xmlhttp = new XMLHttpRequest(); 
    var jp_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                var responsibility = myObj[i].ja_responsibilities;
                var j = true;
                var p = 1;
                while(j) {
                  if(responsibility.search(p) == -1){
                    // responsibility = p;
                    j=false;
                  }else {
                    p = p+1;
                  }
                }
                var responsibilities = [];
                for(var k=1;k<p;k++){
                  if(k+1 < p){
                    var a = responsibility.search(k);
                    var b = responsibility.search(k+1);
                    var string = responsibility.slice(a, b-4);
                    responsibilities.push(string+'<br>');
                  }else {
                    var a = responsibility.search(k);
                    var string = responsibility.slice(a, );
                    responsibilities.push(string);
                  }
                }
                // var r_details = "";
                // for(var k=0;k<p-1;k++){
                //   r_details += '<p style="color: #818181;font-size: 15px;">' + 
                //                   responsibilities[k] +
                //                 '</p>'
                // }
                jp_details +=  '<div class="cantainer-fluid">' + 
                                  '<p style="color: black;font-size: 20px;line-height: 25px;font-weight: 400;">Job Application for ' + myObj[i].c_name + '</p>' +

                                  '<div class="j_post">' + 
                                      '<div class="row" style="padding: 0px 35px;">' +
                                        '<div style="width: auto;margin-right: auto;">' +
                                          '<h4 style="color: black;color: #006cb5;">' + myObj[i].ja_title + '</h4>' + 
                                          '<p style="color: black;">' + myObj[i].c_name + '</p>' +
                                        '</div>' + 
                                        '<div class="c_logo1">' +
                                          '<img class="c_logo" src="' + myObj[i].c_imageUrl + '" alt="">' + 
                                        '</div>' +
                                      '</div>' +
                                      '<div class="j_post_divider" style="width: 97%;"></div>' +
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
                                          '<div style="display: flex;float: left;background-color: #9FABFF;height: 30px;margin-top: 10px;margin-right: 15px;">' + 
                                            '<p style="color: #fff;margin-left: 10px;font-size: 14px;font-weight: 510;">JOB POST</p>' + 
                                          '</div>' + 
                                        '</div>' +
                                    '</div>' + 

                                    '<div style="border: 1px solid #D1D1D1;margin: 30px auto;">' +
                                        '<div style="width: 96%;margin: 10px auto;">' +
                                          '<p style="font-size: 17px;font-weight: 600;color: #808081;">About ' + myObj[i].c_name + '</p>' + 
                                          '<p style="color: #818181;font-size: 15px;">' + 
                                            myObj[i].c_discription + 
                                          '</p>' + 
                                          '<p style="font-size: 17px;font-weight: 600;color: #808081;">About the job</p>' + 
                                          '<p style="color: #818181">' +
                                            "Selected intern's day-to-day responsibilities include:" + 
                                          '</p>' + 
                                           '<p style="color: #818181;font-size: 15px;">' + 
                                             responsibilities.join("") +
                                           '</p>' +
                                          '<div style="display: flex;">' + 
                                            '<p style="font-size: 17px;font-weight: 600;color: #808081;">No. of vacancy for jobs :</p><p style="visibility: hidden;">""</p>' + 
                                            '<p style="color: #818181;font-size: 17px;">' + myObj[i].ja_vacancy + '</p>' + 
                                          '</div>' + 
                                          '<p style="font-size: 17px;font-weight: 600;color: #808081;">Skill(s) required</p>' + 
                                          '<p style="color: #818181;font-size: 15px;">' + 
                                            myObj[i].ja_skill +
                                          '</p>' + 
                                          '<div align="center">' + 
                                            '<button type="button" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;padding-bottom: 9px;" onclick="Applynow('+ myObj[i].ja_id +')">Apply Now</button>' + 
                                          '</div>' + 
                                        '</div>' + 
                                      '</div>' + 

                                '</div>'

              }
              document.getElementById("jobApplication").innerHTML = jp_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/jobDetails.php?job=" + <?php if (isset($_GET['job'])) { echo $_GET['job']; } ?>, true); 
    xmlhttp.send(); 

  });

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>