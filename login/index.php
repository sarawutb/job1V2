<?php
  session_start();
  // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>แบบฟอร์มคำขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.main.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-2 bg-light text-white">
      <div class="container">
       <a class="navbar-brand" href="#">
         <img src="../css/img/logo.png" alt="" width="90" height="50">
         <font color="#0d5a9e">
           <strong class="header-title" id="headerTitle">
             แบบฟอร์มคำขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล (CAPITAL ENGINEERING NETWORK PLC.)</a>
           </strong>
         </font>
       </a>
      </div>
</header>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">ตรวจสอบแบบฟอร์มยื่นคำร้อง</h3>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label mt-2" for="typeEmailX-2">รหัสเจ้าหน้าที่</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label mt-2" for="typePasswordX-2">รหัสผ่าน</label>
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <a href="../manager"><button class="btn btn-primary btn-lg btn-block" type="submit">เข้าสู่ระบบ</button></a>

            <!-- <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<footer class="bg-primary text-white text-center text-lg-start fixed-bottom">
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.5);">
    <i>เพื่อประสิทธิภาพในการแสดงผลของระบบ กรุณาเข้าใช้งานโดยผ่านทาง เบราเซอร์ Google Chrome</i>
  </div>
</footer>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/radio_page1.js"></script>
<script type="text/javascript" src="js/script.js"></script> -->
