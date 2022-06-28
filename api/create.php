<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/contornler.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);

// $data = json_decode(file_get_contents("php://input"));
$item->name1_th = $_SESSION['name1_th'];
$item->lastname1_th = $_SESSION['lastname1_th'];
$item->name1_en = $_SESSION['name1_en'];
$item->lastname1_en = $_SESSION['lastname1_en'];
$item->gender1_th = $_SESSION['gender1_th'];
$item->gender1_en = $_SESSION['gender1_en'];
$item->housenumber1 = $_SESSION['housenumber1'];
$item->group1 = $_SESSION['group1'];
$item->road1 = $_SESSION['road1'];
$item->alley1 = $_SESSION['alley1'];
$item->province1 = $_SESSION['province1'];
$item->district1 = $_SESSION['district1'];
$item->sub_district1 = $_SESSION['sub_district1'];
$item->zip_code1 = $_SESSION['zip_code1'];
$item->phone1 = $_SESSION['phone1'];
$item->email1 = $_SESSION['email1'];
$item->name1_th = $_SESSION['name1_th'];
$item->other1 = $_SESSION['other1'];
$item->type_data = $_SESSION['type_data'];
$item->name1_th = $_SESSION['name2_th'];
$item->lastname2_th = $_SESSION['lastname2_th'];
$item->name2_en = $_SESSION['name2_en'];
$item->lastname2_en = $_SESSION['lastname2_en'];
$item->gender2_th = $_SESSION['gender2_th'];
$item->gender2_en = $_SESSION['gender2_en'];
$item->housenumber2 = $_SESSION['housenumber2'];
$item->group2 = $_SESSION['group2'];
$item->road2 = $_SESSION['road2'];
$item->alley2 = $_SESSION['alley2'];
$item->province2 = $_SESSION['province2'];
$item->district2 = $_SESSION['district2'];
$item->sub_district2 = $_SESSION['sub_district2'];
$item->zip_code2 = $_SESSION['zip_code2'];
$item->phone2 = $_SESSION['phone2'];
$item->email2 = $_SESSION['email2'];
$item->name2_th = $_SESSION['name2_th'];
$item->other2 = $_SESSION['other2'];
$item->file1 = $_SESSION['file1'];
$item->file2 = $_SESSION['file2'];
$item->name_path = $_SESSION['name_path'];
$item->request= $_SESSION['request'];
$item->detail = $_SESSION['detail'];
$item->text_request = $_SESSION['text_request'];

if ($item->createData()) {
    echo 'Employee created successfully.';
    header('Location:../home/index.php');
} else {
    echo 'Employee could not be created.';
}
?>
