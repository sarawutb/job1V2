<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/contornler.php';
    $database = new Database();
    $db = $database->getConnection();
    $items = new Employee($db);
    $items->userid = $_GET['userid'];
    $stmt = $items->getListUpdate();

    // $data = json_decode($stmt);

    //$this->id_cen_form1;
    print_r($stmt);
    
    // foreach ($data->data as $row) {
    //     print_r($row->name1_th);
    //     print_r("\n");
    // }

    // if($stmt == true){
    //     $employeeArr = array();
    //     $employeeArr["success"] = http_response_code();
    //     $employeeArr["massage"] = null;
    //     $employeeArr["data"] = array();
    //     $result = pg_query($stmt);
    //     while ($row = pg_fetch_assoc($result)) {
    //         extract($row);
    //         $e = array(
    //             "id_cen_form1" => $id_cen_form1,
    //             "name1_th" => $name1_th,
    //             "lname1_th" => $lname1_th,
    //             "name1_en" => $name1_en,
    //             "lname1_en" => $lname1_en,
    //             "title1_th" => $title1_th,
    //             "title1_en" => $title1_en,
    //             "housenumber1" => $housenumber1,
    //             "group1" => $group1,
    //             "road1" => $road1,
    //             "alley1" => $alley1,
    //             "province1" => $province1,
    //             "district1" => $district1,
    //             "sub_district1" => $sub_district1,
    //             "phone1" => $phone1,
    //             "email1" => $email1,
    //             "other1" => $other1,
    //             "date" => $date,
    //             "time" => $time,
    //             "type_data" => $type_data,
    //             "status" => $status
    //         );
    //         array_push($employeeArr["data"], $e);
    //      }
    //     echo json_encode($employeeArr);
    // }
    // else{
    //     http_response_code(404);
    //     echo json_encode(
    //         array(
    //             "error" => http_response_code(),
    //             "message" => "No record found."
    //             )
    //     );
    // }
