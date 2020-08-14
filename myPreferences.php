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

    <link href="css/myPreferences.css" rel="stylesheet">

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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/dropdown.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/transition.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/dropdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/transition.min.js"></script>

    <style type="text/css">
      .ui.label { background-color: #EEE; color: #666 !important; font-size: 13px; }
      .ui.label .icon:before { content: '\f00d'; font-family: fontAwesome; font-style: normal; font-size: 12px; padding-left: 5px; position: relative; top: -1px; }
      .ui.label .icon:hover:before { color: #F00; }
    </style>

    <title>CDPC || Preferences</title>
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

    <div class="cantainer-fluid">
      <div style="border: 2px solid #EDEFF9;margin-bottom: 20px;">
        <span class="text-center"><p style="color: #006cb5;font-size: 20px;background-color: #EDEFF9;padding: 10px 0px;">Job Preferences</p></span>
        <p style="font-family: sans-serif;font-size: 18px;margin-left: 20px;line-height: 20px;margin-top: 20px;">In Which fields you are looking for job?</p>
        <div id="fieldPreferance">
        </div>
        <!-- <?php //if(!isset($_SESSION)) { session_start(); } $size = sizeof($_SESSION['field']);  ?>
        <?php //for ($i=0; $i < $size; $i++) { ?> -->
        <!-- <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Mbile app delopment</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;" onclick="deleteElement()"></i>
        </div> -->
        <!-- <?php //} ?> -->
        <!-- <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Web Development</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;"></i>
        </div>
        <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Digital Marketing</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;"></i>
        </div> -->
        <div style="margin: 10px 20px;background-color: #EDEFF9;">
          <div style="display: flex;padding: 7px 0px;cursor: pointer;" data-toggle="modal" data-target="#Preferences">
            <i class="fas fa-plus" style="margin: auto 0px;margin-left: auto;"></i>
            <p style="margin: auto 10px;margin-right: auto;">Add Preferences</p>
          </div>
        </div>
        <div id="s_p">
        </div>
        <p style="font-family: sans-serif;font-size: 18px;margin-left: 20px;line-height: 20px;margin-top: 20px;">In which cities would you like to do your jobs?</p>
        <p style="font-family: sans-serif;font-size: 15px;margin-left: 20px;line-height: 15px;">Leave this blank if you do not have any preference</p>
        <div id="locationPreferance">
        </div>
        <!-- <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Surat</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;"></i>
        </div>
        <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Ahmedabad</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;"></i>
        </div>
        <div class="row" style="margin: 10px 20px;">
          <p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">Vadodara</p>
          <i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;"></i>
        </div> -->
        <div style="margin: 10px 20px;background-color: #EDEFF9;">
          <div style="display: flex;padding: 7px 0px;cursor: pointer;" data-toggle="modal" data-target="#L_Preferences">
            <i class="fas fa-plus" style="margin: auto 0px;margin-left: auto;"></i>
            <p style="margin: auto 10px;margin-right: auto;">Add Preferable Location</p>
          </div>
        </div>
        <div style="margin: 10px 20px;">
          <div align="right">
            <button type="button" onclick="savePreferance();" class="btn" style="background-color: #006cb5;border: 1px solid #006cb5;color: #fff;font-weight: 600">Save</button>
          </div>
        </div>
      </div>
    </div>

<!--Preferences Details Modal -->
<div class="modal" id="Preferences" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Add Preferences</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form action="" method="post"> -->
        <div class="modal-body">
          <div style="margin: 30px auto">
            <p style="font-size: 17px;line-height: 0px;font-weight: 600">Choose field*:-</p>
            <!-- <input type="text" name="field" id="field" class="pd" style="margin: 0px auto;" placeholder="Ex. Mobile App Development"> -->
            <select id="field" class="pd ui fluid selection dropdown">
              <option value="">Field</option>
              <option value="Architecture">Architecture</option>
              <option value="Interior Design">Interior Design</option>
              <option value="Commerce" disabled>Commerce</option>
              <option value="Accounts">Accounts</option>
              <option value="Chartered Accountancy(CA)">Chartered Accountancy(CA)</option>
              <option value="Design" disabled>Design</option>
              <option value="Animation">Animation</option>
              <option value="Fashion Design">Fashion Design</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Merchandise Design">Merchandise Design</option>
              <option value="Engineering" disabled>Engineering</option>
              <option value="Aerospace Engineering">Aerospace Engineering</option>
              <option value="Android App Development">Android App Development</option>
              <option value="Biotechnology Engineering">Biotechnology Engineering</option>
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Computer Vision">Computer Vision</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Electronics Engineering">Electronics Engineering</option>
              <option value="Energy Science & Engineering">Energy Science & Engineering</option>
              <option value="Engineering Design">Engineering Design</option>
              <option value="Engineering Physics">Engineering Physics</option>
              <option value="Game Development">Game Development</option>
              <option value="Image Processing">Image Processing</option>
              <option value="Meterial Science">Meterial Science</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Metallurgical Engineering">Metallurgical Engineering</option>
              <option value="Naval Architecture and Ocean Engineering">Naval Architecture and Ocean Engineering</option>
              <option value="Network Engineering">Network Engineering</option>
              <option value="Petroleum Engineering">Petroleum Engineering</option>
              <option value="Software Testing">Software Testing</option>
              <option value="Hospitality" disabled>Hospitality</option>
              <option value="Hotel Management">Hotel Management</option>
              <option value="Travel & Tourism">Travel & Tourism</option>
              <option value="MBA" disabled>MBA</option>
              <option value="Data Entry">Data Entry</option>
              <option value="Finance">Finance</option>
              <option value="General Management">General Management</option>
              <option value="Human Resources(HR)">Human Resources(HR)</option>
              <option value="Market/Business Research">Market/Business Research</option>
              <option value="Marketing">Marketing</option>
              <option value="Operations">Operations</option>
              <option value="Sales">Sales</option>
              <option value="Media" disabled>Media</option>
              <option value="Cinematography">Cinematography</option>
              <option value="Content Writing">Content Writing</option>
              <option value="Film Making">Film Making</option>
              <option value="Journalism">Journalism</option>
              <option value="Motion Graphics">Motion Graphics</option>
              <option value="Pubilc Relation(PR)">Pubilc Relation(PR)</option>
              <option value="Social Media Marketing">Social Media Marketing</option>
              <option value="Video Making/Editing">Video Making/Editing</option>
              <option value="Videography">Videography</option>
              <option value="Science" disabled>Science</option>
              <option value="Biology">Biology</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Physics">Physics</option>
              <option value="Statistics">Statistics</option>
              <option value="Others" disabled>Others</option>
              <option value="Acting">Acting</option>
              <option value="Agriculture & Food Engineering">Agriculture & Food Engineering</option>
              <option value="Campus Ambassador">Campus Ambassador</option>
              <option value="Company Secretary(CS)">Company Secretary(CS)</option>
              <option value="Data Science">Data Science</option>
              <option value="Event Management">Event Management</option>
              <option value="Humanities">Humanities</option>
              <option value="Law">Law</option>
              <option value="Medicine">Medicine</option>
              <option value="Pharmaceutical">Pharmaceutical</option>
              <option value="Psychology">Psychology</option>
              <option value="Teaching">Teaching</option>
              <option value="UI/UX Design">UI/UX Design</option>
              <option value="Volunteering">Volunteering</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" name="s_field" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Add" onclick="addfield()"></input>
        </div>
      <!-- </form> -->
    </div>
  </div>
</div>


<!--Location Preferences Details Modal -->
<div class="modal" id="L_Preferences" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #9FABFF">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;font-weight: 600;">Add Location Preferences</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="margin: 30px auto">
          <p style="font-size: 17px;line-height: 0px;font-weight: 600">Choose Location*:-</p>
          <!-- <input type="text" class="pd" style="margin: 0px auto;" placeholder="Ex. Ahmedabad, Surat etc."> -->
          <select id="location" class="pd ui fluid selection dropdown">
            <option value="">Location</option>
            <option value="Agra">Agra</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Bengalore">Bengalore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Bhubaneswer">Bhubaneswer</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chennai">Chennai</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Delhi">Delhi</option>
            <option value="Dhanbad">Dhanbad</option>
            <option value="Faridabad">Faridabad</option>
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Guwahati">Guwahati</option>
            <option value="Gwalior">Gwalior</option>
            <option value="Howrah">Howrah</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Indore">Indore</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Kochi">Kochi</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Kota">Kota</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Madurai">Madurai</option>
            <option value="Meerut">Meerut</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nashik">Nashik</option>
            <option value="Navi Mumbai">Navi Mumbai</option>
            <option value="Noida">Noida</option>
            <option value="North Goa">North Goa</option>
            <option value="Patna">Patna</option>
            <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
            <option value="Pune">Pune</option>
            <option value="Raipur">Raipur</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Solapur">Solapur</option>
            <option value="South Goa">South Goa</option>
            <option value="Srinagar">Srinagar</option>
            <option value="Surat">Surat</option>
            <option value="Thane">Thane</option>
            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Vijayawada">Vijayawada</option>
            <option value="Visakhapatanam">Visakhapatanam</option>
            <option value="International">International</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <input type="button" onclick="addlocation()" class="btn" style="background-color: #9FABFF;border: 1px solid #9FABFF;color: #fff;font-weight: 600" value="Add"></input>
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

  function deleteElement(x) {
    // alert(x);
    if(x == 0){
      if(element.length == 1){
        // alert(x);
        element.pop();
        document.getElementById("fieldPreferance").innerHTML = "";
      }else{
        element.splice(0, 1);
        showPreferance();
      }
    }else{
      element.splice(x, 1);
      showPreferance();
    }
  }

  function deletelocationElement(x) {
    // alert(x);
    if(x == 0){
      if(element1.length == 1){
        // alert(x);
        element1.pop();
        document.getElementById("locationPreferance").innerHTML = "";
      }else{
        element1.splice(0, 1);
        showlocationPreferance();
      }
    }else{
      element1.splice(x, 1);
      showlocationPreferance();
    }
  }

  $('#field').dropdown();
  $('#location').dropdown();

  var x = 0;
  var element = [];
  function addfield() {
    element.push(document.getElementById("field").value);
    showPreferance();
    x++;
    document.getElementById("field").value = "";
    $('#Preferences').modal('hide');
  }

  var y = 0;
  var element1 = [];
  function addlocation() {
    element1.push(document.getElementById("location").value);
    showlocationPreferance();
    y++;
    document.getElementById("location").value = "";
    $('#L_Preferences').modal('hide');
  }

  function savePreferance(){
    var var_data = element.join();
    var va_data = element1.join();
    $.ajax({
      url: 'http://localhost/cdpc/savePreferance.php',
      type: 'GET',
      data: { fieldPreferance: var_data, locationPreferance: va_data },
      success: function(data) {
        alert(data);
      }
    });
  }

  $(document).ready(function(){

    // Field Preferances Details
    var xmlhttp = new XMLHttpRequest(); 
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            myObj = JSON.parse(this.responseText); 
            if(myObj != "No record Found") {
              var fp = myObj[0].field_preferances;
              while(fp.search(",") != -1){
                var a = fp.search(",");
                var string = fp.slice(0, a);
                element.push(string);
                fp = fp.slice(a+1, );
              }
              element.push(fp);
              showPreferance();

              var lp = myObj[0].location_preferances;
              while(lp.search(",") != -1){
                var a = lp.search(",");
                var string = lp.slice(0, a);
                element1.push(string);
                lp = lp.slice(a+1, );
              }
              element1.push(lp);
              showlocationPreferance();
            }
        } 
    }; 
    xmlhttp.open("GET", "php/takePreferance.php", true); 
    xmlhttp.send();  

  });

  function showPreferance(){
    var fp_details = "";
    for (var i = 0; i < element.length; i++) {
      fp_details += '<div class="row" style="margin: 10px 20px;">' + 
                        '<p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">'+ element[i] +'</p>' + 
                        '<i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;" onclick="deleteElement('+ i +')"></i>' + 
                      '</div>'
      document.getElementById("fieldPreferance").innerHTML = fp_details;
    }
  }

  function showlocationPreferance(){
    var lp_details = "";
    for (var i = 0; i < element1.length; i++) {
      lp_details += '<div class="row" style="margin: 10px 20px;">' + 
                        '<p style="background-color: #EDEFF9;padding: 7px 10px;width: 90%;margin: auto;">'+ element1[i] +'</p>' + 
                        '<i class="fas fa-times" style="font-size: 20px;color: #808081;margin-left: auto;margin-top: auto;margin-right: auto;margin-bottom: auto;" onclick="deletelocationElement('+ i +')"></i>' + 
                      '</div>'
      document.getElementById("locationPreferance").innerHTML = lp_details;
    }
  }

  var l_nav = document.getElementById("4");
  window.onclick = function(event) {
    if (event.target == l_nav) {
      closeNav();
    }
  }
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>