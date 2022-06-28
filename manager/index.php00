<?php
require('../connect/connect.php');
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
<div class="container-fulid mt-1 mb-5 mx-3">
  <div class="card mt-4">
      <div class="card-body">
              <h3>ตรวจสอบแบบฟอร์มยื่นคำร้อง</h3>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (ไทย)</th>
      <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (อังกฤษ)</th>
      <th scope="col">วัน/เดือน/ปี</th>
      <th scope="col">เวลา</th>
      <th scope="col">สถานะ</th>
      <th scope="col">ตัวจัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $number = 1;
      //for ($i=0; $i < 50; $i++) {
    $result = pg_query($conn,"SELECT * FROM cen_form1
                              INNER JOIN cen_title_name on cen_form1.title1_th = cen_title_name.id
                              INNER JOIN cen_status on cen_form1.status = cen_status.id_status");
    while($row=pg_fetch_assoc($result)){
      $date_sql = explode("-",$row['date']);
      $day = $date_sql[2];
      $month = $date_sql[1];
      $year = $date_sql[0]+543;
      $time = explode(".",$row['time']);
      $date = $day."/".$month."/".$year;

    ?>
    <tr>
      <th scope="row"><?=$number++?></th>
      <td><?=$row['title_name_th'].$row['name1_th']." ".$row['lname1_th']?></td>
      <td><?=$row['title_name_en']." ".$row['name1_en']." ".$row['lname1_en']?></td>
      <td><?=$date?></td>
      <td><?=$time[0]?></td>
      <td>
        <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-<?=$row['color_status']?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?=$row['name_status']?>
  </button>
  <div class="dropdown-menu">
    <?php
    $result1 = pg_query($conn,"SELECT * FROM cen_status");
    while($row1=pg_fetch_assoc($result1)){
    ?>
    <a class="dropdown-item" href="#"><?=$row1['name_status']?></a>
  <?php }//} ?>
  </div>
</div>
      </td>
      <td>
        <button type="button" class="btn btn-info"><i style="font-size:24px" class="fa">&#xf06e;</i> ตรวจสอบ</button>
        <a href="../edit/?userid=<?=$row['id_cen_form1']?>"><button type="button" class="btn btn-warning"><i style="font-size:24px" class="fa">&#xf040;</i></button></a>
        <button type="button" class="btn btn-danger"><i style="font-size:24px" class="fa">&#xf1f8;</i></button>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
</div>
</div>
</div>

<footer class="bg-primary text-white text-center text-lg-start fixed-bottom">
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.5);">
    <i>เพื่อประสิทธิภาพในการแสดงผลของระบบ กรุณาเข้าใช้งานโดยผ่านทาง เบราเซอร์ Google Chrome</i>
  </div>
</footer>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="../js/radio_page1.js"></script>
<script type="text/javascript" src="../js/script.js"></script> -->
