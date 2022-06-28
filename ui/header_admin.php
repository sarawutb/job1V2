<?php
require('../connect/connect.php');
session_start();
// if ($_SESSION['page'] == null) {
//   $_SESSION['page'] = 1;
// }
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>แบบฟอร์มคำขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="../css/style.main.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/datepicker.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
</head>

<style>
  @media only screen and (max-width: 600px) {
    #headerTitle {
      display: none;
    }
  }

  body {
    font-family: 'Mitr', sans-serif;
  }
</style>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
      <!-- <div class="sidebar-heading border-bottom bg-light">จัดการระบบ</div> -->
      <center>
        <img src="../css/img/logo.png" alt="" width="90" height="50">
      </center>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" id="page_1" onclick="page1()" href="">ตรวจสอบแบบฟอร์ม</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" id="page_2" onclick="page2()" href="">ประวัติทำรายการ</a>
        <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a> -->
      </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <button class="navbar-toggler d-block" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
          <a class="navbar-brand">
            <font color="#0d5a9e">
              <strong class="header-title ml-2" id="headerTitle">
                แบบฟอร์มคำขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล (CAPITAL ENGINEERING NETWORK PLC.)
              </strong>
            </font>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item active"><a class="nav-link" href="../login">ออกจากระบบ</a></li>
            </ul>
          </div>
        </div>
      </nav>