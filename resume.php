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

    <link href="css/resume.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Month picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Year picker -->
    <script src="lib/year-select.js"></script>

    <title>CDPC || Resume</title>
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
      <p style="color: black;font-size: 20px;line-height: 5px;">Resume</p>
    </div>

    <div id="4" class="cantainer-fluid" style="background-color: #EDEFF9; margin: 0px 5%;margin-bottom: 20px;">
      <div style="height: 5px;background-color: #9FABFF;"></div>
      <div id="Personal_Details">
      </div>
      <!-- <div class="p_details">
        <div style="display: flex;">
          <p style="color: black;font-size: 25px;line-height: 20px;margin-right: auto;">Dixit Ukani</p>
          <i class="fas fa-edit" id="pd_edit" data-toggle="modal" data-target="#P_Details"></i>
        </div>
        <div>
          <p style="line-height: 15px;">dixitukani2@gmail.com</p>
          <p style="line-height: 20px;">+91 9672319049</p>
          <p style="line-height: 20px;">male, 05-10-1998</p>
          <p style="line-height: 20px;">Address :- 89/90, radhakrishana soc., khodiyarnagar road, varachha,</p>
          <p style="line-height: 10px;">surat, gujarat, india-395006</p>
        </div>
      </div> -->
      <div style="height: 2px;background-color: #9FABFF;width: 90%;margin: auto;"></div>
      <div class="education">
        <p class="e_title">Education</p>
        <div id="School_E_Details">
        </div>
        <div id="College_E_Details">
        </div>
        <div id="Other_E_Details">
        </div>
        <div style="color: #9FABFF;display: flex;cursor: pointer;" data-toggle="modal" data-target="#S_E_Details" id="add_education">
          <i class="fas fa-plus" style="margin-right: 5px;"></i>
          <p style="font-weight: 600;line-height: 5px;margin-top: 5px;">Add Education</p>
        </div>
      </div>
      <div style="height: 2px;background-color: #9FABFF;width: 90%;margin: auto;"></div>
      <div class="education">
        <p class="e_title">Internships</p>
        <div id="Internship_Details">
        </div>
        <div style="color: #9FABFF;display: flex;cursor: pointer;" data-toggle="modal" data-target="#I_Details" id="add_internship">
          <i class="fas fa-plus" style="margin-right: 5px;"></i>
          <p style="font-weight: 600;line-height: 5px;margin-top: 5px;">Add Internship</p>
        </div>
      </div>
      <div style="height: 2px;background-color: #9FABFF;width: 90%;margin: auto;"></div>
      <div class="education">
        <p class="e_title">Projects</p>
        <div id="Project_Details">
        </div>
        <div style="color: #9FABFF;display: flex;cursor: pointer;" data-toggle="modal" data-target="#Pro_Details" id="add_project">
          <i class="fas fa-plus" style="margin-right: 5px;"></i>
          <p style="font-weight: 600;line-height: 5px;margin-top: 5px;">Add Project</p>
        </div>
      </div>
      <div style="height: 2px;background-color: #9FABFF;width: 90%;margin: auto;"></div>
      <div class="education">
        <p class="e_title" style="line-height: 10px;margin-top: 25px">Skills</p>
        <div id="Skill_Details">
        </div>
        <div class="row" >
          <div id="Skill_Details">
          </div>
        </div>
        <div style="color: #9FABFF;display: flex;cursor: pointer;" data-toggle="modal" data-target="#S_Details" id="add_skill">
          <i class="fas fa-plus" style="margin-right: 5px;"></i>
          <p style="font-weight: 600;line-height: 5px;margin-top: 5px;">Add Skill</p>
        </div>
      </div>
      <div style="height: 2px;background-color: #9FABFF;width: 90%;margin: auto;"></div>
      <div class="education">
        <p class="e_title">Additional Details</p>
        <div id="Additional_Details">
        </div>
        <div style="color: #9FABFF;display: flex;cursor: pointer;" data-toggle="modal" data-target="#A_Details" id="add_additional">
          <i class="fas fa-plus" style="margin-right: 5px;"></i>
          <p style="font-weight: 600;line-height: 5px;margin-top: 5px;">Add Additional Details</p>
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


<!--Personal Details Modal -->
<div class="modal" id="P_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" style="width: 100%;" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Personal Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="php/su_personalDetails.php" method="post">
        <div class="modal-body">
          <div class="row" style="margin: auto;">
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_fn" name="js_firstname" placeholder="First Name">
            </div>
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_ln" name="js_lastname" placeholder="Last Name">
            </div>
          </div>
          <div class="pd_fn" style="width: 94%;">
            <input type="text" class="pd" id="pd_ea" name="js_p_email" placeholder="E-Mail Address">
          </div>
          <div class="row" style="margin: auto;">
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_gender" name="js_gender" placeholder="Gender">
            </div>
            <div class="pd_fn">
              <input type="date" class="pd" id="pd_dob" name="js_birthdate" placeholder="Date Of Birth">
            </div>
          </div>
          <div class="pd_fn" style="width: 94%;">
            <input type="text" class="pd" id="pd_address" name="js_address" placeholder="Address">
          </div>
          <div class="row" style="margin: auto;">
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_city" name="js_city" placeholder="City">
            </div>
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_state" name="js_state" placeholder="State">
            </div>
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_country" name="js_country" placeholder="Country">
            </div>
          </div>
          <div class="row" style="margin: auto;">
            <div class="pd_fn">
              <input type="text" class="pd" id="pd_zc" name="js_zipcode" placeholder="Zip code">
            </div>
            <div class="pd_fn" style="display: flex;">
              <input type="text" class="pd" style="width: 35px;" placeholder="+91" readonly>
              <input type="text" class="pd" style="width: 70%;" id="pd_mn" name="js_mobile_no" placeholder="Mobile No.">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Select Education Details Modal -->
<div class="modal" id="S_E_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div>
          <p style="font-size: 20px;">Add Education</p>
          <div class="row">
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#School_E_Details_Modal" data-dismiss="modal" data-title="X(Secondary) Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">X(Secondary)</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#School_E_Details_Modal" data-dismiss="modal" data-title="XII(Senior Secondary) Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">XII(Senior Secondary)</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#College_E_Details_Modal" data-dismiss="modal" data-title="Graduation Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">Graduation</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#College_E_Details_Modal" data-dismiss="modal" data-title="Post Graduation Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">Post Graduation</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#Other_E_Details_Modal" data-dismiss="modal" data-title="Diploma Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">Diploma</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
            <div class="skill" style="background-color: #EDEFF9;border: 1px solid #9E9E9E" data-toggle="modal" data-target="#Other_E_Details_Modal" data-dismiss="modal" data-title="PhD Details">
              <div style="margin-right: auto;padding-top: 15px;">
                <p style="font-size: 17px;line-height: 0px;padding: 10px 0px;color: #717171;">PhD</p>
              </div>
              <div>
                <i class="fas fa-plus" style="padding-top: 18px;color: #717171;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--School Education Details Modal -->
<div class="modal" id="School_E_Details_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="php/su_education.php" method="post" id="insert_sedform">
        <div class="modal-header" style="background-color: #9FABFF">
          <input type="text" class="pd" name="School_E_title" style="color: #fff;font-weight: 600;border-bottom: none;font-size: 20px;" id="School_E_title" readonly/>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="sd_id" class="pd" style="margin: 0px auto;" id="sd_id" hidden>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">Year Of Completion*:-</p>
            <input class="yearselect pd" name="sd_yoc" id="sd_yoc" style="margin: 0px auto;" placeholder="choose month" />
          </div>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">Board*:-</p>
            <input type="text" class="pd" name="sd_board" id="sd_board" style="margin: 0px auto;" placeholder="Ex. CBSC" />
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance Scale:-</p>
              <!-- <select class="pd" style="margin: 0px auto;padding-bottom: 3px;">
                <option value="Percentage">Percentage</option>
                <option value="CGPA">CGPA(Scale Of 10)</option>
              </select> -->
              <div class="dropdown">
                <input type="text" class="pd text-left" name="sd_pscale" id="sd_pscale" list="Performance_Scale" placeholder="Choose Performance Scale">
                <datalist id="Performance_Scale">
                  <option value="Percentage">
                  <option value="CGPA(Scale Of 10)">
                </datalist>
              </div>
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance:-</p>
              <input class="pd" name="sd_performance" id="sd_performance" style="margin: 0px auto;" placeholder="00.00" />
            </div>
          </div>
          <div id="sch_stream">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">Stream:-</p>
            <!-- <select class="pd" style="margin: 0px auto;padding-bottom: 3px;">
              <option value="c_stream" selected>Choose Stream</option>
              <option value="Science">Science</option>
              <option value="Commerce">Commerce</option>
              <option value="Arts">Arts</option>
            </select> -->
            <div class="dropdown">
              <input type="text" class="pd text-left" name="sd_stream" id="sd_stream" list="Stream" placeholder="Choose Stream">
              <datalist id="Stream">
                <option value="Science">
                <option value="Commerce">
                <option value="Arts">
              </datalist>
            </div>
          </div>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">School:-</p>
            <input type="text" class="pd" name="sd_school" id="sd_school" style="margin: 0px auto;" placeholder="Ex. Delhi Public School" />
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn" id="sd_save" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--College Education Details Modal -->
<div class="modal" id="College_E_Details_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="php/su_education.php" method="post" id="insert_cedform">
        <div class="modal-header" style="background-color: #9FABFF">
          <input type="text" class="pd" name="College_E_title" style="color: #fff;font-weight: 600;border-bottom: none;font-size: 20px;" id="College_E_title" readonly/>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="cd_id" class="pd" style="margin: 0px auto;" id="cd_id" hidden>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">College*:-</p>
            <input type="text" class="pd" name="cd_college" id="cd_college" style="margin: 0px auto;" placeholder="Ex. Charusat University" />
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Start Year*:-</p>
              <input class="yearselect pd" name="cd_s_year" id="cd_s_year" style="margin: 0px auto;" placeholder="choose year" />
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">End Year*:-</p>
              <input class="yearselect pd" name="cd_e_year" id="cd_e_year" style="margin: 0px auto;" placeholder="choose year" />
            </div>
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Degree*:-</p>
              <input class="pd" name="cd_degree" style="margin: 0px auto;" placeholder="Ex. B.Tech, B.E" id="cd_degree" />
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Stream*:-</p>
              <input class="pd" name="cd_stream" id="cd_stream" style="margin: 0px auto;" placeholder="Ex. computer engineering" />
            </div>
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance Scale:-</p>
              <!-- <select class="pd" style="margin: 0px auto;padding-bottom: 3px;">
                <option value="Percentage">Percentage</option>
                <option value="CGPA">CGPA(Scale Of 10)</option>
              </select> -->
              <div class="dropdown">
                <input type="text" class="pd text-left" name="cd_pscale" id="cd_pscale" list="Performance_Scale" placeholder="Choose Performance Scale">
                <datalist id="Performance_Scale">
                  <option value="Percentage">
                  <option value="CGPA(Scale Of 10)">
                </datalist>
              </div>
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance:-</p>
              <input class="pd" name="cd_performance" id="cd_performance" style="margin: 0px auto;" placeholder="00.00" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" id="cd_save" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Other Education Details Modal -->
<div class="modal" id="Other_E_Details_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="php/su_education.php" method="post" id="insert_oedform">
        <div class="modal-header" style="background-color: #9FABFF">
          <input type="text" class="pd" name="Other_E_title" style="color: #fff;font-weight: 600;border-bottom: none;font-size: 20px;" id="Other_E_title" readonly/>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="od_id" class="pd" style="margin: 0px auto;" id="od_id" hidden>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">College*:-</p>
            <input type="text" class="pd" name="od_college" id="od_college" style="margin: 0px auto;" placeholder="Ex. Charusat University" />
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Start Year*:-</p>
              <input class="yearselect pd" name="od_s_year" id="od_s_year" style="margin: 0px auto;" placeholder="choose year" />
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">End Year*:-</p>
              <input class="yearselect pd" name="od_e_year" id="od_e_year" style="margin: 0px auto;" placeholder="choose year" />
            </div>
          </div>
          <div style="margin: 0px auto;margin-top: 30px;">
            <p style="font-size: 16px;line-height: 0px;font-weight: 600">Stream*:-</p>
            <input type="text" class="pd" name="od_stream" id="od_stream" style="margin: 0px auto;" placeholder="Ex. computer engineering" />
          </div>
          <div class="row">
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance Scale:-</p>
              <!-- <select class="pd" style="margin: 0px auto;padding-bottom: 3px;">
                <option value="Percentage">Percentage</option>
                <option value="CGPA">CGPA(Scale Of 10)</option>
              </select> -->
              <div class="dropdown">
                <input type="text" class="pd text-left" name="od_pscale" id="od_pscale" list="Performance_Scale" placeholder="Choose Performance Scale">
                <datalist id="Performance_Scale">
                  <option value="Percentage">
                  <option value="CGPA(Scale Of 10)">
                </datalist>
              </div>
            </div>
            <div class="se_date" style="margin: 0px auto;margin-top: 30px;">
              <p style="font-size: 16px;line-height: 0px;font-weight: 600">Performance:-</p>
              <input class="pd" name="od_performance" id="od_performance" style="margin: 0px auto;" placeholder="00.00" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" id="od_save" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Internship Details Modal -->
<div class="modal" id="I_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Internship Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="php/su_internship.php" id="insert_iform">
        <div class="modal-body">
          <input type="text" name="i_id" class="pd" style="margin: 0px auto;" id="i_id" hidden>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Technology*:-</p>
            <input type="text" name="i_technology" class="pd" style="margin: 0px auto;" placeholder="Ex. Mobile App Devlopment" id="i_technology">
          </div>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Company*:-</p>
            <input type="text" name="i_company" class="pd" style="margin: 0px auto;" placeholder="Ex. Amazon, Filpcart" id="i_cname">
          </div>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Location*:-</p>
            <input type="text" name="i_location" class="pd" id="i_location" style="margin: 0px auto;" placeholder="Ex. Surat">
            <label style="font-size: 13px;width: 90%;margin-top: 10px;"><input type="checkbox" id="wtf" style="margin-right:2%;">Work From Home</label>
          </div>
          <div class="row">
            <div class="se_date">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Start Month*:-</p>
              <input type="text" id="i_smonth" name="i_s_month" class="datepicker pd" style="margin: 0px auto;" placeholder="choose month" />
            </div>
            <div class="se_date">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">End Month*:-</p>
              <input type="text" id="i_edate" name="i_e_month" class="datepicker pd" style="margin: 0px auto;" placeholder="choose month" />
              <label style="font-size: 13px;width: 90%;margin-top: 10px auto;"><input type="checkbox" id="present" style="margin-right:2%;">Currently Working Here</label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" style="font-size: 17px;line-height: 0px;font-weight: 600">Discription:-</label>
            <textarea name="i_discription" class="form-control" rows="3" id="i_discription"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn" id="i_save" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Project Details Modal -->
<div class="modal" id="Pro_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Project Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="php/su_project.php" method="post" id="insert_pform">
        <div class="modal-body">
          <input type="text" name="p_id" class="pd" style="margin: 0px auto;" id="p_id" hidden>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Project Title*:-</p>
            <input type="text" name="p_title" class="pd" style="margin: 0px auto;" placeholder="Ex. My Project" id="p_title">
          </div>
          <div class="row">
            <div class="se_date">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">Start Month*:-</p>
              <input id="p_sdate" name="p_startmonth" class="datepicker pd" style="margin: 0px auto;" placeholder="choose month" />
            </div>
            <div class="se_date">
              <p style="font-size: 17px;line-height: 0px;font-weight: 600">End Month*:-</p>
              <input type="text" name="p_endmonth" class="datepicker pd" style="margin: 0px auto;" placeholder="choose month" id="e_month"/>
              <label style="font-size: 13px;width: 90%;margin-top: 10px auto;"><input type="checkbox" id="p_present" style="margin-right:2%;">On Going</label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" style="font-size: 17px;line-height: 0px;font-weight: 600">Discription:-</label>
            <textarea name="p_discription" class="form-control" rows="3" id="p_discription"></textarea>
          </div>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Project Link:-</p>
            <input type="text" name="p_link" class="pd" style="margin: 0px auto;" placeholder="Ex. https://myProjectlink.com" id="p_link">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn" id="p_save" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Skill Details Modal -->
<div class="modal" id="S_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Skill Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="php/su_skill.php" method="post" id="insert_sform">
        <div class="modal-body">
          <input type="text" name="s_id" class="pd" style="margin: 0px auto;" id="s_id" hidden>
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Skill*:-</p>
            <input type="text" name="s_title" class="pd" id="s_title" style="margin: 0px auto;" placeholder="Ex. HTML, CSS, Bootstrap, PHP etc.">
          </div>
          <div>
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Skill Level*:-</p>
            <div class="dropdown">
              <input type="text" class="pd text-left" name="s_level" id="s_level" list="skill_level" placeholder="Choose level of skill" required>
              <datalist id="skill_level">
                <option value="Beginner">
                <option value="Intermediate">
                <option value="Advance">
              </datalist>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn" id="s_save" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Additional Details Modal -->
<div class="modal" id="A_Details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Additional Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="php/su_additional.php" method="post" id="insert_adform">
        <div class="modal-body">
          <input type="text" name="ad_id" class="pd" style="margin: 0px auto;" id="ad_id" hidden>
          <p style="color: #808081;">you can add here your compitative programming site link, co-cariculer activity certificate, certificate of trainning program, work sample, github link, social-media link etc...</p>
          <div class="form-group">
            <textarea name="ad_discription" class="form-control" id="ad_discription" rows="3" placeholder="Add details here(max. 250 characters)"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn" id="ad_save" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Save"></input>
        </div>
      </form>
    </div>
  </div>
</div>


<script>

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

    $('#P_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });
    $('#S_E_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });
    $('#I_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });
    $('#Pro_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });
    $('#S_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });
    $('#A_Details').on('show.bs.modal', function () {
      if ($( window ).width() <= 576) {
        $('.modal-content').css('width',$( window ).width()*0.95);
      }
    });

    $('input[id="wtf"]').click(function(){
      if($(this).prop("checked") == true){
        document.getElementById("i_location").value = "Work From Home";
      }
      else if($(this).prop("checked") == false){
        document.getElementById("i_location").value = "";
      }
    });

    $('input[id="present"]').click(function(){
      if($(this).prop("checked") == true){
        document.getElementById("i_edate").value = "Present";
      }
      else if($(this).prop("checked") == false){
        document.getElementById("i_edate").value = "";
      }
    });

    $('input[id="p_present"]').click(function(){
      if($(this).prop("checked") == true){
        document.getElementById("e_month").value = "Present";
      }
      else if($(this).prop("checked") == false){
        document.getElementById("e_month").value = "";
      }
    });

    // Personal Details
    var xmlhttp = new XMLHttpRequest(); 
    var pi_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                pi_details +=  '<div class="p_details">' + 
                                  '<div style="display: flex;">' + 
                                    '<p style="color: black;font-size: 25px;line-height: 20px;margin-right: auto;">' + myObj[i].js_firstname + ' ' +  myObj[i].js_lastname + '</p>' +
                                    '<i class="fas fa-edit pd_edit_data" data-toggle="modal" data-target="#P_Details" id="'+
                                    myObj[i].js_id +'"></i>' + 
                                  '</div>' + 
                                  '<div>' + 
                                    '<p style="line-height: 15px;">' + myObj[i].js_p_email + '</p>' +
                                    '<p style="line-height: 20px;">+91 ' + myObj[i].js_mobile_no + '</p>' + 
                                    '<p style="line-height: 20px;">' + myObj[i].js_gender +', '+ myObj[i].js_birthdate + '</p>' +
                                    '<p style="line-height: 20px;">Address :- ' + myObj[i].js_address + '</p>' +
                                    '<p style="line-height: 10px;">' + myObj[i].js_city +', ' + myObj[i].js_state + ', ' + myObj[i].js_country + '-' + myObj[i].js_zipcode + '</p>' +
                                  '</div>' + 
                                '</div>'
              }
              document.getElementById("Personal_Details").innerHTML = pi_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/personalDetails.php", true); 
    xmlhttp.send(); 

    $(document).on('click', '.pd_edit_data', function(){  
      var pid_id = $(this).attr("id");  
      // document.getElementById("pd_fn").value = "Dixit";
      $.ajax({  
        url:"php/personalDetails.php",  
        method:"POST",  
        data:{pid_id:pid_id},  
        dataType:"json",  
        success:function(data){ 
          $('#pd_fn').val(data[0].js_firstname);  
          $('#pd_ln').val(data[0].js_lastname);  
          $('#pd_ea').val(data[0].js_p_email);
          $('#pd_gender').val(data[0].js_gender);  
          $('#pd_dob').val(data[0].js_birthdate);
          $('#pd_address').val(data[0].js_address);
          $('#pd_city').val(data[0].js_city);
          $('#pd_state').val(data[0].js_state);  
          $('#pd_country').val(data[0].js_country);
          $('#pd_zc').val(data[0].js_zipcode);
          $('#pd_mn').val(data[0].js_mobile_no);  
        }  
      });  
    });


    $("#School_E_Details_Modal").on("show.bs.modal", function(event){
        var button = $(event.relatedTarget);
        var titleData = button.data("title");
        document.getElementById("School_E_title").value = titleData;
        if (titleData == "X(Secondary) Details") {
          $('#sch_stream').css('visibility','hidden');
          $('#sch_stream').css('width','0px');
          $('#sch_stream').css('height','0px');
          $('#sch_stream').css('margin','0px auto');
        }
        if (titleData == "XII(Senior Secondary) Details") {
          $('#sch_stream').css('visibility','visible');
          $('#sch_stream').css('width','auto');
          $('#sch_stream').css('height','auto');
          $('#sch_stream').css('margin','0px auto');
          $('#sch_stream').css('margin-top','30px');
        }
    });

    $("#College_E_Details_Modal").on("show.bs.modal", function(event){
        var button = $(event.relatedTarget);
        var titleData = button.data("title");
        document.getElementById("College_E_title").value = titleData;
        if (titleData == "Post Graduation Details") {
          document.getElementById("cd_degree").placeholder = "Ex. M.E, M.Tech etc.";
        }
        if (titleData == "Graduation Details") {
          document.getElementById("cd_degree").placeholder = "Ex. B.E, B.Tech etc.";
        }
    });

    $("#Other_E_Details_Modal").on("show.bs.modal", function(event){
        var button = $(event.relatedTarget);
        var titleData = button.data("title");
        document.getElementById("Other_E_title").value = titleData;
    });

    // School Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var se_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if (myObj[i].sd_level == "X(Secondary) Details") { var sd_level = "X(Secondary)"; var sd_stream = "" }
                if (myObj[i].sd_level == "XII(Senior Secondary) Details") { var sd_level = "XII(Senior Secondary)"; var sd_stream = "-"+myObj[i].sd_stream }
                if(myObj[i].sd_pscale == "Percentage"){ var sd_pscale="%"; }else{ var sd_pscale=""; }
                se_details +=  '<div class="e_details">' + 
                                  '<div style="margin-right: auto;">' + 
                                    '<p style="font-size: 14px;line-height: 15px;font-weight: 600;">' + sd_level+', ' + myObj[i].sd_board + sd_stream + '(' + myObj[i].sd_yoc + ')' + '</p>' +
                                    '<p style="font-size: 14px;line-height: 15px;color: #808081">' + myObj[i].sd_school + '</p>' +
                                    '<p style="font-size: 14px;line-height: 10px;color: #808081">' + myObj[i].sd_pscale + ': ' + myObj[i].sd_performance + sd_pscale + '</p>' + 
                                  '</div>' + 
                                  '<div>' +
                                    '<i class="fas fa-edit sed_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#School_E_Details_Modal" id="'+
                                    myObj[i].sd_id +'"></i>' + 
                                    '<i class="fas fa-trash sed_delete_data" id="'+
                                    myObj[i].sd_id +'"></i>' + 
                                  '</div>' +
                                '</div>'
              }
              document.getElementById("School_E_Details").innerHTML = se_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/s_educationDetails.php", true); 
    xmlhttp.send(); 

    $('#add_education').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_sedform')[0].reset();  
      $('#sd_save').val("Save");
    });
    $(document).on('click', '.sed_edit_data', function(){  
      var sd_id = $(this).attr("id");  
      $.ajax({  
        url:"php/s_educationDetails.php",  
        method:"POST",  
        data:{sd_id:sd_id},  
        dataType:"json",  
        success:function(data){ 
          for(i=0;i<data.length;i++){
            if(data[i].sd_id == sd_id){
              sd_id = i+1;
            }
          }
          $('#sd_id').val(data[sd_id-1].sd_id);  
          $('#sd_yoc').val(data[sd_id-1].sd_yoc);  
          $('#sd_board').val(data[sd_id-1].sd_board);  
          $('#sd_pscale').val(data[sd_id-1].sd_pscale);
          $('#sd_performance').val(data[sd_id-1].sd_performance);  
          $('#sd_school').val(data[sd_id-1].sd_school);
          $('#School_E_title').val(data[sd_id-1].sd_level);
          if (data[sd_id-1].sd_stream != "none") { 
            $('#sd_stream').val(data[sd_id-1].sd_stream); 
          }
          if (data[sd_id-1].sd_level == "X(Secondary) Details") {
            $('#sch_stream').css('visibility','hidden');
            $('#sch_stream').css('width','0px');
            $('#sch_stream').css('height','0px');
            $('#sch_stream').css('margin','0px auto');
          }
          if (data[sd_id-1].sd_level == "XII(Senior Secondary) Details") {
            $('#sch_stream').css('visibility','visible');
            $('#sch_stream').css('width','auto');
            $('#sch_stream').css('height','auto');
            $('#sch_stream').css('margin','0px auto');
            $('#sch_stream').css('margin-top','30px');
          }
          $('#sd_save').val("Update");     
        }  
      });  
    });
    $(document).on('click', '.sed_delete_data', function(){
      var sd_id = $(this).attr("id");
      location.href = "php/delete.php?sd_id="+sd_id;
    });

    // College Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var ce_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                // if (myObj[i].sd_level == "X(Secondary) Details") { var sd_level = "X(Secondary)"; var sd_stream = "" }
                // if (myObj[i].sd_level == "XII(Senior Secondary) Details") { var sd_level = "XII(Senior Secondary)"; var sd_stream = "-"+myObj[i].sd_stream }
                if(myObj[i].cd_pscale == "Percentage"){ var cd_pscale="%"; }else{ var cd_pscale=""; }
                ce_details +=  '<div class="e_details">' + 
                                  '<div style="margin-right: auto;">' + 
                                    '<p style="font-size: 14px;line-height: 15px;font-weight: 600;">' + myObj[i].cd_degree + ', ' + myObj[i].cd_stream + '(' + myObj[i].cd_s_year + '-' + myObj[i].cd_e_year + ')' + '</p>' + 
                                    '<p style="font-size: 14px;line-height: 15px;color: #808081">' + myObj[i].cd_college + '</p>' + 
                                    '<p style="font-size: 14px;line-height: 10px;color: #808081">' + myObj[i].cd_pscale + ': ' + myObj[i].cd_performance + cd_pscale + '</p>' + 
                                  '</div>' + 
                                  '<div>' + 
                                    '<i class="fas fa-edit ced_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#College_E_Details_Modal" id="'+
                                    myObj[i].cd_id +'"></i>' + 
                                    '<i class="fas fa-trash ced_delete_data" id="'+
                                    myObj[i].cd_id +'"></i>' + 
                                  '</div>' + 
                                '</div>'
              }
              document.getElementById("College_E_Details").innerHTML = ce_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/c_educationDetails.php", true); 
    xmlhttp.send(); 

    $('#add_education').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_cedform')[0].reset();  
      $('#cd_save').val("Save");
    });
    $(document).on('click', '.ced_edit_data', function(){  
      var cd_id = $(this).attr("id");  
      $.ajax({  
        url:"php/c_educationDetails.php",  
        method:"POST",  
        data:{cd_id:cd_id},  
        dataType:"json",  
        success:function(data){ 
          for(i=0;i<data.length;i++){
            if(data[i].cd_id == cd_id){
              cd_id = i+1;
            }
          }
          $('#cd_id').val(data[cd_id-1].cd_id);  
          $('#College_E_title').val(data[cd_id-1].cd_level);  
          $('#cd_college').val(data[cd_id-1].cd_college);  
          $('#cd_s_year').val(data[cd_id-1].cd_s_year);
          $('#cd_e_year').val(data[cd_id-1].cd_e_year);  
          $('#cd_degree').val(data[cd_id-1].cd_degree);
          $('#cd_stream').val(data[cd_id-1].cd_stream);
          $('#cd_pscale').val(data[cd_id-1].cd_pscale);
          $('#cd_performance').val(data[cd_id-1].cd_performance);
          $('#cd_save').val("Update");     
        }  
      });  
    });
    $(document).on('click', '.ced_delete_data', function(){
      var cd_id = $(this).attr("id");
      location.href = "php/delete.php?cd_id="+cd_id;
    });

    // Other Education Details
    var xmlhttp = new XMLHttpRequest(); 
    var oe_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                if (myObj[i].od_level == "Diploma Details") { var od_level = "Diploma"; }
                if (myObj[i].od_level == "PhD Details") { var od_level = "PhD"; }
                if(myObj[i].od_pscale == "Percentage"){ var od_pscale="%"; }else{ var od_pscale=""; }
                oe_details +=  '<div class="e_details">' + 
                                  '<div style="margin-right: auto;">' + 
                                    '<p style="font-size: 14px;line-height: 15px;font-weight: 600;">' + od_level + ', ' + myObj[i].od_stream + '(' + myObj[i].od_s_year + '-' + myObj[i].od_e_year + ')' + '</p>' + 
                                    '<p style="font-size: 14px;line-height: 15px;color: #808081">' + myObj[i].od_college + '</p>' + 
                                    '<p style="font-size: 14px;line-height: 10px;color: #808081">' + myObj[i].od_pscale + ': ' + myObj[i].od_performance + od_pscale + '</p>' + 
                                  '</div>' + 
                                  '<div>' + 
                                    '<i class="fas fa-edit oed_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#Other_E_Details_Modal" id="'+
                                    myObj[i].od_id +'"></i>' + 
                                    '<i class="fas fa-trash oed_delete_data" id="'+
                                    myObj[i].od_id +'"></i>' + 
                                  '</div>' + 
                                '</div>'
              }
              document.getElementById("Other_E_Details").innerHTML = oe_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/o_educationDetails.php", true); 
    xmlhttp.send(); 

    $('#add_education').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_oedform')[0].reset();  
      $('#od_save').val("Save");
    });
    $(document).on('click', '.oed_edit_data', function(){  
      var od_id = $(this).attr("id");  
      $.ajax({  
        url:"php/o_educationDetails.php",  
        method:"POST",  
        data:{od_id:od_id},  
        dataType:"json",  
        success:function(data){ 
          for(i=0;i<data.length;i++){
            if(data[i].od_id == od_id){
              od_id = i+1;
            }
          }
          $('#od_id').val(data[od_id-1].od_id);
          $('#Other_E_title').val(data[od_id-1].od_level);
          // $('#Other_E_title').val(data.length);  
          $('#od_college').val(data[od_id-1].od_college);  
          $('#od_s_year').val(data[od_id-1].od_s_year);  
          $('#od_e_year').val(data[od_id-1].od_e_year);
          $('#od_stream').val(data[od_id-1].od_stream);  
          $('#od_pscale').val(data[od_id-1].od_pscale);
          $('#od_performance').val(data[od_id-1].od_performance);
          $('#od_save').val("Update");     
        }  
      });  
    });
    $(document).on('click', '.oed_delete_data', function(){
      var od_id = $(this).attr("id");
      location.href = "php/delete.php?od_id="+od_id;
    });

    // Project Details
    var xmlhttp = new XMLHttpRequest(); 
    var pro_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                pro_details +=  '<div class="e_details">' +  
                                  '<div style="margin-right: auto;">' +
                                    '<p style="font-size: 14px;line-height: 5px;font-weight: 600;">' + myObj[i].p_title + '</p>' +
                                    '<p style="font-size: 14px;line-height: 5px;color: #808081">' + myObj[i].p_startmonth +'-'+ myObj[i].p_endmonth + '</p>' +
                                    '<p style="font-size: 14px;line-height: 15px;color: #9FABFF;cursor: pointer;overflow-wrap: break-word;">' + myObj[i].p_link + '</p>' +
                                    '<p style="font-size: 14px;line-height: 15px;color: #808081">' + myObj[i].p_discription + '</p>' +
                                  '</div>' +
                                  '<div>' +
                                    '<i class="fas fa-edit pro_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#Pro_Details" id="'+
                                    myObj[i].p_id +'"></i>' +
                                    '<i class="fas fa-trash pro_delete_data" id="'+
                                    myObj[i].p_id +'"></i>' +
                                  '</div>' +
                                '</div>'
              }
              document.getElementById("Project_Details").innerHTML = pro_details;
            }
        } 
    }; 
    xmlhttp.open("GET", "php/projectDetails.php", true); 
    xmlhttp.send(); 

    $('#add_project').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_pform')[0].reset();  
      $('#p_save').val("Save");
    });
    $(document).on('click', '.pro_edit_data', function(){  
      var p_id = $(this).attr("id");  
      $.ajax({  
        url:"php/projectDetails.php",  
        method:"POST",  
        data:{p_id:p_id},  
        dataType:"json",  
        success:function(data){ 
          for(i=0;i<data.length;i++){
            if(data[i].p_id == p_id){
              p_id = i+1;
            }
          }
          $('#p_id').val(data[p_id-1].p_id);  
          $('#p_title').val(data[p_id-1].p_title);  
          $('#p_sdate').val(data[p_id-1].p_startmonth);  
          $('#e_month').val(data[p_id-1].p_endmonth);
          $('#p_link').val(data[p_id-1].p_link);  
          $('#p_discription').val(data[p_id-1].p_discription);
          $('#p_save').val("Update");     
        }  
      });  
    });
    $(document).on('click', '.pro_delete_data', function(){
      var p_id = $(this).attr("id");
      location.href = "php/delete.php?p_id="+p_id;
    });

    // Month picker
    $( function() {
      $( ".datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          showButtonPanel: true,
          dateFormat: 'MM yy',
          onClose: function(dateText, inst) { 
              $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
          }
      });
      $('.yearselect').yearselect({order: 'desc'});
    } );

    // Internship Details
    var xmlhttp = new XMLHttpRequest(); 
    var its_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                its_details +=  '<div class="e_details">' +
                                  '<div style="margin-right: auto;">' + 
                                    '<p style="font-size: 14px;line-height: 5px;font-weight: 600;">' + myObj[i].i_technology + '</p>' +
                                    '<p style="font-size: 14px;line-height: 5px;color: #808081">' + myObj[i].i_company +'('+ myObj[i].i_location +')'+ '</p>' +
                                    '<p style="font-size: 14px;line-height: 5px;color: #808081">' + myObj[i].i_startdate + '-' + myObj[i].i_enddate + '</p>' +
                                    '<p style="font-size: 14px;line-height: 15px;color: #808081">' + myObj[i].i_discription + '</p>' +
                                  '</div>' +
                                  '<div>' +
                                    '<i class="fas fa-edit its_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#I_Details" id="'+
                                    myObj[i].i_id +'"></i>' +
                                    '<i class="fas fa-trash its_delete_data" id="'+
                                    myObj[i].i_id +'"></i>' +
                                  '</div>' +
                                '</div>'
              } 
              document.getElementById("Internship_Details").innerHTML = its_details;
            } 
        } 
    }; 
    xmlhttp.open("GET", "php/internshipDetails.php", true); 
    xmlhttp.send(); 

    $('#add_internship').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_iform')[0].reset(); 
      $('#i_save').val("Save"); 
    });
    $(document).on('click', '.its_edit_data', function(){  
      var i_id = $(this).attr("id");  
      $.ajax({  
        url:"php/internshipDetails.php",  
        method:"POST",  
        data:{i_id:i_id},  
        dataType:"json",  
        success:function(data){  
          for(i=0;i<data.length;i++){
            if(data[i].i_id == i_id){
              i_id = i+1;
            }
          }
          $('#i_id').val(data[i_id-1].i_id);
          $('#i_technology').val(data[i_id-1].i_technology);  
          $('#i_cname').val(data[i_id-1].i_company);  
          $('#i_location').val(data[i_id-1].i_location);
          $('#i_smonth').val(data[i_id-1].i_startdate);  
          $('#i_edate').val(data[i_id-1].i_enddate);
          $('#i_discription').val(data[i_id-1].i_discription);   
          $('#i_save').val("Update");  
        }  
      });  
    });
    $(document).on('click', '.its_delete_data', function(){
      var i_id = $(this).attr("id");
      location.href = "php/delete.php?i_id="+i_id;
    });

    // Skill Details
    var xmlhttp = new XMLHttpRequest(); 
    var skill_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                skill_details +=  '<div class="skill">' +
                                    '<div style="margin-right: auto;padding-top: 15px;">' +
                                      '<p style="font-size: 14px;line-height: 0px">' + myObj[i].s_title + '</p>' +
                                      '<p style="font-size: 13px;line-height: 0px;color: #808081;">' + myObj[i].s_level + '</p>' +
                                    '</div>' +
                                    '<div>' +
                                      '<i class="fas fa-edit sk_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#S_Details" id="' +
                                        myObj[i].s_id + '"></i>' +
                                      '<i class="fas fa-trash sk_delete_data" id="' +
                                        myObj[i].s_id + '"></i>' +
                                    '</div>' +
                                  '</div>'
              } 
              document.getElementById("Skill_Details").innerHTML = '<div class="row">'+ skill_details + '</div>';
            } 
        } 
    }; 
    xmlhttp.open("GET", "php/skillDetails.php", true); 
    xmlhttp.send(); 

    $('#add_skill').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_sform')[0].reset(); 
      $('#s_save').val("Save"); 
    });
    $(document).on('click', '.sk_edit_data', function(){  
      var s_id = $(this).attr("id");  
      $.ajax({  
        url:"php/skillDetails.php",  
        method:"POST",  
        data:{s_id:s_id},  
        dataType:"json",  
        success:function(data){  
          for(i=0;i<data.length;i++){
            if(data[i].s_id == s_id){
              s_id = i+1;
            }
          }
          $('#s_id').val(data[s_id-1].s_id);
          $('#s_title').val(data[s_id-1].s_title);  
          $('#s_level').val(data[s_id-1].s_level); 
          $('#s_save').val("Update");    
        }  
      });  
    });
    $(document).on('click', '.sk_delete_data', function(){
      var s_id = $(this).attr("id");
      location.href = "php/delete.php?s_id="+s_id;
    });

    // Add Additional Details
    var xmlhttp = new XMLHttpRequest(); 
    var aad_details = "";
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              for (var i = 0; i < myObj.length; i++) {
                aad_details +=  '<div class="e_details">' + 
                                  '<div style="display: flex;margin-right: auto;">' + 
                                    '<div class="ad-circle"></div>' + 
                                    '<p style="font-size:14px;">' + myObj[i].ad_discription + '</p>' +
                                  '</div>' + 
                                  '<div>' + 
                                    '<i class="fas fa-edit aad_edit_data" style="margin-right: 5px;" data-toggle="modal" data-target="#A_Details" id="'+
                                    myObj[i].ad_id +'"></i>' + 
                                    '<i class="fas fa-trash aad_delete_data" id="'+
                                    myObj[i].ad_id +'"></i>' + 
                                  '</div>' + 
                                '</div>'
              } 
              document.getElementById("Additional_Details").innerHTML = aad_details;
            } 
        } 
    }; 
    xmlhttp.open("GET", "php/additionalDetails.php", true); 
    xmlhttp.send(); 

    $('#add_additional').click(function(){  
      // $('#insert').val("Insert");  
      $('#insert_adform')[0].reset(); 
      $('#ad_save').val("Save"); 
    });
    $(document).on('click', '.aad_edit_data', function(){  
      var ad_id = $(this).attr("id");  
      $.ajax({  
        url:"php/additionalDetails.php",  
        method:"POST",  
        data:{ad_id:ad_id},  
        dataType:"json",  
        success:function(data){  
          for(i=0;i<data.length;i++){
            if(data[i].ad_id == ad_id){
              ad_id = i+1;
            }
          }
          $('#ad_id').val(data[ad_id-1].ad_id);
          $('#ad_discription').val(data[ad_id-1].ad_discription);    
          $('#ad_save').val("Update");  
        }  
      });  
    });
    $(document).on('click', '.aad_delete_data', function(){
      var ad_id = $(this).attr("id");
      location.href = "php/delete.php?ad_id="+ad_id;
    });

});

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>