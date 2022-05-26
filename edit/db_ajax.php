<?php
include('../connect/connect.php');
if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
    $id = $_POST['id'];
    $result = pg_query($conn,"SELECT * FROM amphures WHERE province_id = $id ORDER BY amphur_name");
    echo '<option value="" selected disabled>กรุณาเลือก</option>';
    while($row=pg_fetch_assoc($result)){
      echo '<option value='.$row['amphur_id'].'>'.$row['amphur_name'].'</option>';
    }
  }
if (isset($_POST['function']) && $_POST['function'] == 'districts') {
    $id = $_POST['id'];
    $result = pg_query($conn,"SELECT * FROM districts WHERE amphur_id = $id ORDER BY district_name");
    echo '<option value="" selected disabled>กรุณาเลือก</option>';
    while($row=pg_fetch_assoc($result)){
      echo '<option value='.$row['district_code'].'>'.$row['district_name'].'</option>';
    }
  }
if (isset($_POST['function']) && $_POST['function'] == 'sub_districts') {

    $id = $_POST['id'];
    // echo "<script>alert('".$id."')</script>";
    $result = pg_query($conn,"SELECT * FROM zipcodes WHERE district_code = '$id' ORDER BY zipcode");
    // echo '<option value="" selected disabled>กรุณาเลือก</option>';
    while($row=pg_fetch_assoc($result)){
      echo '<option value='.$row['zipcode'].'>'.$row['zipcode'].'</option>';
    }
  }
?>
