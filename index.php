<?php
include 'session.php';
session::init();
session::checksession();
if (isset($_POST['logout'])) {
  $logout = $_POST['logout'];
  if ($logout == "logout") {
    session::destroy();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="notification" id="notification"><img src="tick.png" alt=""><div class="notititle">Id send successfully.</div></div>
<div class="submitandavailableidcontainer">
    <div class="submitidformcontainer">
      <div class="inputs">
        <input type="text" name="name" id="name" class="inputname" placeholder="Name" autocomplete="off">
        <input type="text" name="mobile" id="mobile" class="inputmobile" placeholder="Mobile" autocomplete="off">
        <input type="text" name="amount" id="amount" class="inputamount" placeholder="Amount" autocomplete="off">
        <input type="checkbox" name="paid" id="paid" class="inputpaid">
      </div>
      <div class="sendbtn">SEND</div>
    </div>
    <div class="availableidcontainer">
      <div class="sticky">
        <div class="availableidhead">
          <div class="availableidheadtitle">Available ID</div>
        </div>
        <div class="availableidhead2">
          <div class="availableidgrid">NO</div>
          <div class="availableidgrid">Username</div>
          <div class="availableidgrid">Password</div>
        </div>
      </div>

      <div class="availableidlist">

      </div>
    </div>
  </div>
  <div class="cashandduesalescontainer">
    <div class="cashsales">
      <div class="sticky">
        <div class="cashsalesidhead">
          <div class="cashsalesidheadtitle">Sales (cash)</div>
          <input type="date" name="cashfrom" id="cashfrom" class="cashfrom">
          <input type="date" name="cashto" id="cashto" class="cashto">
          <input type="text" class="cashsalesidsearch" id="cashsalesidsearch" name="cashsalesidsearch" placeholder="Search">
          <div class="cashexportbtn">Export</div>
        </div>
        <div class="cashsalesidhead2">
          <div class="cashsalesidgrid">NO</div>
          <div class="cashsalesidgrid">Name</div>
          <div class="cashsalesidgrid">Mobile</div>
          <div class="cashsalesidgrid">Username</div>
          <div class="cashsalesidgrid">Password</div>
          <div class="cashsalesidgrid">Date</div>
          <div class="cashsalesidgrid">Amount</div>
        </div>
      </div>
      <div class="cashsalesidlist">

      </div>
    </div>
    <div class="duesales">
      <div class="sticky">
        <div class="duesalesidhead">
          <div class="duesalesidheadtitle">Sales (due)</div>
          <input type="date" name="duefrom" id="duefrom" class="duefrom">
          <input type="date" name="dueto" id="dueto" class="dueto">
          <input type="text" class="duesalesidsearch" id="duesalesidsearch" name="duesalesidsearch" placeholder="Search">
          <div class="dueexportbtn">Export</div>
        </div>
        <div class="duesalesidhead2">
          <div class="duesalesidgrid">NO</div>
          <div class="duesalesidgrid">Name</div>
          <div class="duesalesidgrid">Mobile</div>
          <div class="duesalesidgrid">Username</div>
          <div class="duesalesidgrid">Password</div>
          <div class="duesalesidgrid">Date</div>
          <div class="duesalesidgrid">Amount</div>
        </div>
      </div>

      <div class="duesalesidlist">

      </div>
    </div>
  </div>
  <div class="fileuploadcontainer">
    <div class="fileuploadformclose"><img src="close.png" alt=""></div>
    <div class="fileuploadform">
      <label for="file" class="selectfile">
        Select file
      </label>
      <input type="file" name="file" id="file" class="file">
      <div class="uploadbtn">Upload</div>
    </div>
  </div>
  <div class="downloadcontainer">
    <div class="downloadform">
      <div class="downloadclose"><img src="close.png" alt=""></div>
      <div class="downloadtitle">Exported file is ready for download</div>
      <a href="export.csv" class="downloadlink" download><div class="downloadbtn"><img src="download.png" alt=""></div></a>
    </div>
  </div>
  <div class="logoutbtn"><img src="logout.png" alt=""></div>
  <div class="fileuploadbtn"><img src="upload.png" alt=""></div>
  <script src="jquery.min.js"></script>
  <script src="main.js"></script>
</body>
</html>