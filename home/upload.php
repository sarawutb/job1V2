<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_GET["name1"])) {
  $type1 = end(explode('.',$_FILES['file']['name']));
  $filename1 = date("dmY_his")."_01.".$type1;
  $_SESSION["name_path"] = date("dmY");

  $location = "../uploads/".date("dmY")."/".$filename1;
  if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) {
    echo 'Success';
    $_SESSION["file1"] = $filename1;
  } else {
    alert("อัพโหลดเอกสารล้มเหลว");
  }
}
if (isset($_GET["name2"])) {
  $type2 = end(explode('.',$_FILES['file']['name']));
  $filename2 = date("dmY_his")."_02.".$type2;

  $location = "../uploads/".date("dmY")."/".$filename2;
  if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) {
    echo 'Success';
    $_SESSION["file2"] = $filename2;
  } else {
    alert("อัพโหลดเอกสารล้มเหลว");
  }
}

// if ($_GET["file1"] != null) {
//   $type1 = end(explode('.',$_GET["file1"]));
//   $_SESSION["file1"] = generateRandomString(30).".".$type1;
// }else{
//   $_SESSION["file1"] = null;
// }
//
// $type2 = end(explode('.',$_GET["file2"]));
// if ($_GET["file2"] != null) {
//   $_SESSION["file2"] = generateRandomString(30).".".$type2;
// }else{
//   $_SESSION["file2"] = null;
// }

?>
