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
    </style>
  </head>
  <body>

    <div class="cantainer-fluid">
      <div class="row">
        <div class="col-sm">
          <h4 style="margin-left: 10px;margin-top: 20px;">Company's Personal Details</h4>
          <!-- <div class="row" style="margin-right: 12px;">
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="First Name">
            </div>
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="Last Name">
            </div>
          </div> -->
          <input type="text" class="pd" placeholder="Enter Your Company Name">
          <textarea style="margin-left: 12px;width: 90%;margin-right: 12px;border-radius: 3px;color: #808080" rows="4" name="comment" form="usrform">Enter Your Company Discriptions...</textarea>
          <input type="text" class="pd" placeholder="Enter Your Company's Site url">
          <h4 style="margin-left: 10px;margin-top: 20px;">Company's Contact Person Details</h4>
          <div class="row" style="margin-right: 12px;">
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="First Name">
            </div>
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="Last Name">
            </div>
          </div>
          <div class="row" style="margin-right: 12px;">
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="E-mail Address( Personal )">
            </div>
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="pd" placeholder="Mobile No.( Personal )">
            </div>
          </div>
        </div>
        <div class="col-sm bg-primary">
          <h4 style="color: #fff;margin-left: 10px;margin-top: 20px;">Company's Contact Details</h4>
          <input type="text" class="cd" placeholder="Flat no., Street and Area etc.">
          <div class="row" style="margin-right: 12px;">
            <div style="width: 29.2%;margin-left: 15px;">
              <input type="text" class="cd" placeholder="City">
            </div>
            <div style="width: 29.2%;margin-left: 15px;">
              <input type="text" class="cd" placeholder="State">
            </div>
            <div style="width: 29.2%;margin-left: 15px;">
              <input type="text" class="cd" placeholder="Country">
            </div>
          </div>
          <div class="row" style="margin-right: 12px;">
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="cd" placeholder="Zip Code">
            </div>
            <div style="width: 45.6%;margin-left: 15px;">
              <input type="text" class="cd" placeholder="Mobile No.">
            </div>
          </div>
          <h4 style="color: #fff;margin-left: 10px;margin-top: 20px;">Additional Details</h4>
          <input type="text" class="cd" placeholder="Enter your e-mail address ( Company's e-mail address )">
          <input type="text" class="cd" placeholder="Enter your Password">
          <input type="text" class="cd" placeholder="Enter your Confim Password">
          <div align="right" style="margin: 20px 53px;">
            <button type="button" class="btn btn-danger">Register</button>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>