<?php
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

echo $_GET['lastname1_th'];

// $data = json_decode(file_get_contents("php://input"));

// $item->id = $_GET['id'];
// $item->name1_th = $_GET['name1_th'];
// $item->lastname1_th = $_GET['lastname1_th'];
// $item->name1_en = $_GET['name1_en'];
// $item->lastname1_en = $_GET['lastname1_en'];
// $item->gender1_th = $_GET['gender1_th'];
// $item->gender1_en = $_GET['gender1_en'];
// $item->housenumber1 = $_GET['housenumber1'];
// $item->group1 = $_GET['group1'];
// $item->road1 = $_GET['road1'];
// $item->alley1 = $_GET['alley1'];
// $item->province1 = $_GET['province1'];
// $item->district1 = $_GET['district1'];
// $item->sub_district1 = $_GET['sub_district1'];
// $item->zip_code1 = $_GET['zip_code1'];
// $item->phone1 = $_GET['phone1'];
// $item->email1 = $_GET['email1'];
// $item->name1_th = $_GET['name1_th'];
// $item->other1 = $_GET['other1'];
// $item->type_data = $_GET['type_data'];
// $item->name1_th = $_GET['name2_th'];
// $item->lastname2_th = $_GET['lastname2_th'];
// $item->name2_en = $_GET['name2_en'];
// $item->lastname2_en = $_GET['lastname2_en'];
// $item->gender2_th = $_GET['gender2_th'];
// $item->gender2_en = $_GET['gender2_en'];
// $item->housenumber2 = $_GET['housenumber2'];
// $item->group2 = $_GET['group2'];
// $item->road2 = $_GET['road2'];
// $item->alley2 = $_GET['alley2'];
// $item->province2 = $_GET['province2'];
// $item->district2 = $_GET['district2'];
// $item->sub_district2 = $_GET['sub_district2'];
// $item->zip_code2 = $_GET['zip_code2'];
// $item->phone2 = $_GET['phone2'];
// $item->email2 = $_GET['email2'];
// $item->name2_th = $_GET['name2_th'];
// $item->other2 = $_GET['other2'];
// $item->file1 = $_GET['file1'];
// $item->file2 = $_GET['file2'];
// $item->name_path = $_GET['name_path'];
// $item->request = $_GET['request'];
// $item->detail = $_GET['detail'];
// $item->text_request = $_GET['text_request'];

// if ($item->updateEmployee()) {
//     echo json_encode("Employee data updated.");
// } else {
//     echo json_encode("Data could not be updated");
// }
