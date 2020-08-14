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

    <link href="css/myApplication.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <title>CDPC || Applications</title>
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

    <div class="cantainer text-center">
      <p style="color: black;font-size: 20px;line-height: 5px;">My Applications</p>
    </div>

    <div class="cantainer-fluid l_table">
      <table class="table" style="margin: 20px auto;width: 95%;">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Job Type</th>
            <th scope="col">Company</th>
            <th scope="col">Application Status</th>
            <th scope="col">No. of Applicants</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody id="myApplication">
        </tbody>
        <!-- <tbody>
          <tr>
            <td scope="row">18th Apr 2020</td>
            <td>Mobile App Development</td>
            <td>Crowd Steering</td>
            <td><span class="a_status" data-toggle="tooltip" data-html="true" title="This Company is in contact with you. if you have replied and haven't heard futher, better to apply for other jobs.">In-Touch</span></td>
            <td>27</td>
            <td><span class="application">Review Application</span></td>
          </tr>
          <tr>
            <td scope="row">18th Apr 2020</td>
            <td>React Native Development</td>
            <td>Mavoix Solutions Private Limited</td>
            <td><span class="a_status" data-toggle="tooltip" data-html="true" title="Congratulation! You got this job.">Hired</span></td>
            <td>26</td>
            <td><span class="application">Review Application</span></td>
          </tr>
          <tr>
            <td scope="row">18th Apr 2020</td>
            <td>Mobile App Development</td>
            <td>ABRNS Software Services Private Limited</td>
            <td><span class="a_status" data-toggle="tooltip" data-html="true" title="We are sorry to inform you that you are not selected for this job. Better Luck Next Time!">Not Selected</span></td>
            <td>70</td>
            <td><span class="application">Review Application</span></td>
          </tr> 
        </tbody> -->
      </table>
    </div>

    <div class="cantainer-fluid s_table">
      <div id="myApplication_ss">
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

  function viewApplication(x){
    location.href = "viewApplication.php?application="+ x;
  }

  $(document).ready(function(){
    // Job Post Details
    var xmlhttp = new XMLHttpRequest(); 
    var ma_details = "";
    var ma_ss_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              ma_details += '<tbody>';
              for (var i = 0; i < myObj.length; i++) {
                if (myObj[i].aa_status == "Applied") { var tooltip = "Your Application has been reached out to Company but Company has not responding yet.";  }
                if (myObj[i].aa_status == "In-Touch") { var tooltip = "This Company is in contact with you. if you have replied and haven't heard futher, better to apply for other jobs.";  }
                if (myObj[i].aa_status == "Hired") { var tooltip = "Congratulation! You got this job.";  }
                if (myObj[i].aa_status == "Not Selected") { var tooltip = "We are sorry to inform you that you are not selected for this job. Better Luck Next Time!";  }
                if (myObj[i].aa_status == "Seen") { var tooltip = "Company seen your Application.if Company is interested in your profile, Company will contact you soon.";  }

                ma_ss_details +=  '<div style="margin: 0px auto;width: 95%;border: 1px solid #EDEFF9;">' + 
                                      '<p style="background-color: #EDEFF9;font-size: 17px;padding: 5px 10px;font-weight: 500;">' + myObj[i].ja_title + '</p>' + 
                                      '<div style="display: flex;margin-left: 10px;">' + 
                                        '<p style="font-size: 14px;font-weight: 600;line-height: 15px;width: 130px;">Company:</p>' + 
                                        '<p style="font-size: 14px;line-height: 15px;">' + myObj[i].c_name + '</p>' + 
                                      '</div>' + 
                                      '<div style="display: flex;margin-left: 10px;">' + 
                                        '<p style="font-size: 14px;font-weight: 600;line-height: 15px;width: 130px;">Application Status:</p>' + 
                                        '<p style="font-size: 14px;line-height: 15px;"><span class="a_status" data-toggle="tooltip" data-html="true" title="' + tooltip + '">' + myObj[i].aa_status + '</span></p>' + 
                                      '</div>' + 
                                      '<div style="display: flex;margin-left: 10px;">' + 
                                        '<p style="font-size: 14px;font-weight: 600;line-height: 15px;width: 130px;">No. of Applicants:</p>' + 
                                        '<p style="font-size: 14px;line-height: 15px;">' + myObj[i].n_o_a + '</p>' + 
                                      '</div>' + 
                                      '<p style="font-size: 14px;padding: 0px 10px;font-weight: 500;" onclick="viewApplication('+ myObj[i].aa_id +')"><span class="application">Review Application</span></p>' + 
                                    '</div>'

                ma_details +=  '<tr>' + 
                                  '<td scope="row">' + myObj[i].aa_date + '</td>' +
                                  '<td>' + myObj[i].ja_title + '</td>' + 
                                  '<td>' + myObj[i].c_name + '</td>' + 
                                  '<td><span class="a_status" data-toggle="tooltip" data-html="true" title="' + tooltip + '">' + myObj[i].aa_status + '</span></td>' + 
                                  '<td>' + myObj[i].n_o_a + '</td>' + 
                                  '<td><span class="application" onclick="viewApplication('+ myObj[i].aa_id +')">Review Application</span></td>' +  
                                '</tr>'

              }
              ma_details += '</tbody>';
              document.getElementById("myApplication").innerHTML = ma_details;
              document.getElementById("myApplication_ss").innerHTML = ma_ss_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/appliedApplicationDetails.php", true); 
    xmlhttp.send(); 

    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
  });
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>