<?php
// session_start();
include_once '../config/database.php';
class Employee
{
    // Connection
    private $conn;
    // Table
    // private $db_table = "Employee";
    private $db_cen_form1 = "cen_form1";
    private $db_cen_form2 = "cen_form2";
    private $db_cen_file = "cen_file";
    private $db_cen_type = "cen_type";
    private $db_cen_detail = "cen_detail";
    // Columns
    // public $id;
    // public $name;
    // public $email;
    // public $age;
    // public $designation;
    // public $created;
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // GET ALL
    // public function getEmployees()
    // {
    //     $result = ("SELECT id, name, email, age, designation, created FROM " . $this->db_table . "");
    //     return $result;
    // }
    public function getListDataPage1($date_now)
    {
        $result = ("SELECT * FROM " . $this->db_cen_form1 . "
        INNER JOIN cen_title_name on " . $this->db_cen_form1 . ".title1_th = cen_title_name.id
        INNER JOIN cen_status on " . $this->db_cen_form1 . ".status = cen_status.id_status
        WHERE " . $this->db_cen_form1 . ".status != 2 AND date='".$date_now."' ORDER BY id_cen_form1 limit 2 OFFSET 1");
        // return $result;

        if ($result == true) {
            $employeeArr = array();
            $employeeArr["success"] = http_response_code();
            $employeeArr["massage"] = null;
            $employeeArr["data"] = array();
            $result = pg_query($result);
            while ($row = pg_fetch_assoc($result)) {
                extract($row);
                $e = array(
                    "id_cen_form1" => $id_cen_form1,
                    "name1_th" => $name1_th,
                    "lname1_th" => $lname1_th,
                    "name1_en" => $name1_en,
                    "lname1_en" => $lname1_en,
                    "title1_th" => $title1_th,
                    "title1_en" => $title1_en,
                    "housenumber1" => $housenumber1,
                    "group1" => $group1,
                    "road1" => $road1,
                    "alley1" => $alley1,
                    "province1" => $province1,
                    "district1" => $district1,
                    "sub_district1" => $sub_district1,
                    "phone1" => $phone1,
                    "email1" => $email1,
                    "other1" => $other1,
                    "date" => $date,
                    "time" => $time,
                    "type_data" => $type_data,
                    "status" => $status,
                    "title_name_th" => $title_name_th,
                    "title_name_en" => $title_name_en,
                    "name_status" => $name_status,
                    "color_status" => $color_status

                );
                array_push($employeeArr["data"], $e);
            }
            //echo json_encode($employeeArr);
            return json_encode($employeeArr);
        } else {
            http_response_code(404);
            echo json_encode(
                array(
                    "error" => http_response_code(),
                    "message" => "No record found."
                )
            );
        }
    }
    public function getListDataPage1Search($date_start,$date_end)
    {
        $result = ("SELECT * FROM " . $this->db_cen_form1 . "
        INNER JOIN cen_title_name on " . $this->db_cen_form1 . ".title1_th = cen_title_name.id
        INNER JOIN cen_status on " . $this->db_cen_form1 . ".status = cen_status.id_status
        WHERE " . $this->db_cen_form1 . ".status != 2 AND date between '".$date_start."' AND '".$date_end."' 
        -- ORDER BY id_cen_form1 limit 2 OFFSET 1");
        // return $result;

        if ($result == true) {
            $employeeArr = array();
            $employeeArr["success"] = http_response_code();
            $employeeArr["massage"] = null;
            $employeeArr["data"] = array();
            $result = pg_query($result);
            while ($row = pg_fetch_assoc($result)) {
                extract($row);
                $e = array(
                    "id_cen_form1" => $id_cen_form1,
                    "name1_th" => $name1_th,
                    "lname1_th" => $lname1_th,
                    "name1_en" => $name1_en,
                    "lname1_en" => $lname1_en,
                    "title1_th" => $title1_th,
                    "title1_en" => $title1_en,
                    "housenumber1" => $housenumber1,
                    "group1" => $group1,
                    "road1" => $road1,
                    "alley1" => $alley1,
                    "province1" => $province1,
                    "district1" => $district1,
                    "sub_district1" => $sub_district1,
                    "phone1" => $phone1,
                    "email1" => $email1,
                    "other1" => $other1,
                    "date" => $date,
                    "time" => $time,
                    "type_data" => $type_data,
                    "status" => $status,
                    "title_name_th" => $title_name_th,
                    "title_name_en" => $title_name_en,
                    "name_status" => $name_status,
                    "color_status" => $color_status

                );
                array_push($employeeArr["data"], $e);
            }
            //echo json_encode($employeeArr);
            return json_encode($employeeArr);
        } else {
            http_response_code(404);
            echo json_encode(
                array(
                    "error" => http_response_code(),
                    "message" => "No record found."
                )
            );
        }
    }
    public function getListDataPage2Search($date_start,$date_end)
    {
        $result = ("SELECT * FROM " . $this->db_cen_form1 . "
        INNER JOIN cen_title_name on " . $this->db_cen_form1 . ".title1_th = cen_title_name.id
        INNER JOIN cen_status on " . $this->db_cen_form1 . ".status = cen_status.id_status
        WHERE " . $this->db_cen_form1 . ".status = 2 AND date between '".$date_start."' AND '".$date_end."'");
        // return $result;

        if ($result == true) {
            $employeeArr = array();
            $employeeArr["success"] = http_response_code();
            $employeeArr["massage"] = null;
            $employeeArr["data"] = array();
            $result = pg_query($result);
            while ($row = pg_fetch_assoc($result)) {
                extract($row);
                $e = array(
                    "id_cen_form1" => $id_cen_form1,
                    "name1_th" => $name1_th,
                    "lname1_th" => $lname1_th,
                    "name1_en" => $name1_en,
                    "lname1_en" => $lname1_en,
                    "title1_th" => $title1_th,
                    "title1_en" => $title1_en,
                    "housenumber1" => $housenumber1,
                    "group1" => $group1,
                    "road1" => $road1,
                    "alley1" => $alley1,
                    "province1" => $province1,
                    "district1" => $district1,
                    "sub_district1" => $sub_district1,
                    "phone1" => $phone1,
                    "email1" => $email1,
                    "other1" => $other1,
                    "date" => $date,
                    "time" => $time,
                    "type_data" => $type_data,
                    "status" => $status,
                    "title_name_th" => $title_name_th,
                    "title_name_en" => $title_name_en,
                    "name_status" => $name_status,
                    "color_status" => $color_status

                );
                array_push($employeeArr["data"], $e);
            }
            //echo json_encode($employeeArr);
            return json_encode($employeeArr);
        } else {
            http_response_code(404);
            echo json_encode(
                array(
                    "error" => http_response_code(),
                    "message" => "No record found."
                )
            );
        }
    }
    public function getListDataPage2($date_now)
    {
        $result = ("SELECT * FROM " . $this->db_cen_form1 . "
        INNER JOIN cen_title_name on " . $this->db_cen_form1 . ".title1_th = cen_title_name.id
        INNER JOIN cen_status on " . $this->db_cen_form1 . ".status = cen_status.id_status
        WHERE " . $this->db_cen_form1 . ".status = 2 AND date='".$date_now."'");
        // return $result;

        if ($result == true) {
            $employeeArr = array();
            $employeeArr["success"] = http_response_code();
            $employeeArr["massage"] = null;
            $employeeArr["data"] = array();
            $result = pg_query($result);
            while ($row = pg_fetch_assoc($result)) {
                extract($row);
                $e = array(
                    "id_cen_form1" => $id_cen_form1,
                    "name1_th" => $name1_th,
                    "lname1_th" => $lname1_th,
                    "name1_en" => $name1_en,
                    "lname1_en" => $lname1_en,
                    "title1_th" => $title1_th,
                    "title1_en" => $title1_en,
                    "housenumber1" => $housenumber1,
                    "group1" => $group1,
                    "road1" => $road1,
                    "alley1" => $alley1,
                    "province1" => $province1,
                    "district1" => $district1,
                    "sub_district1" => $sub_district1,
                    "phone1" => $phone1,
                    "email1" => $email1,
                    "other1" => $other1,
                    "date" => $date,
                    "time" => $time,
                    "type_data" => $type_data,
                    "status" => $status,
                    "title_name_th" => $title_name_th,
                    "title_name_en" => $title_name_en,
                    "name_status" => $name_status,
                    "color_status" => $color_status

                );
                array_push($employeeArr["data"], $e);
            }
            //echo json_encode($employeeArr);
            return json_encode($employeeArr);
        } else {
            http_response_code(404);
            echo json_encode(
                array(
                    "error" => http_response_code(),
                    "message" => "No record found."
                )
            );
        }
    }
    // GET DATA update
    public function getListUpdate()
    {
        $this->userid = htmlspecialchars(strip_tags($this->userid));
        $result = ("SELECT * FROM " . $this->db_cen_form1 . "
        INNER JOIN cen_title_name on " . $this->db_cen_form1 . ".title1_th = cen_title_name.id
        INNER JOIN cen_form2 on " . $this->db_cen_form1 . ".id_cen_form1 = cen_form2.id_cen_form1
        INNER JOIN cen_status on " . $this->db_cen_form1 . ".status = cen_status.id_status
        INNER JOIN cen_file on " . $this->db_cen_form1 . ".id_cen_form1 = cen_file.id_cen_form1
        INNER JOIN cen_type on " . $this->db_cen_form1 . ".id_cen_form1 = cen_type.id_cen_form1
        INNER JOIN cen_detail on " . $this->db_cen_form1 . ".id_cen_form1 = cen_detail.id_cen_form1
        WHERE " . $this->db_cen_form1 . ".id_cen_form1 = $this->userid");
        // return $result;

        if ($result == true) {
            $employeeArr = array();
            $employeeArr["success"] = http_response_code();
            $employeeArr["massage"] = null;
            $employeeArr["data"] = array();
            $result = pg_query($result);
            while ($row = pg_fetch_assoc($result)) {
                extract($row);
                $e = array(
                    "id_cen_form1" => $id_cen_form1,
                    "name1_th" => $name1_th,
                    "lname1_th" => $lname1_th,
                    "name1_en" => $name1_en,
                    "lname1_en" => $lname1_en,
                    "title1_th" => $title1_th,
                    "title1_en" => $title1_en,
                    "housenumber1" => $housenumber1,
                    "group1" => $group1,
                    "road1" => $road1,
                    "alley1" => $alley1,
                    "province1" => $province1,
                    "district1" => $district1,
                    "sub_district1" => $sub_district1,
                    "zip_code1" => $zip_code1,
                    "phone1" => $phone1,
                    "email1" => $email1,
                    "other1" => $other1,
                    "date" => $date,
                    "time" => $time,
                    "type_data" => $type_data,
                    "status" => $status,
                    "title_name_th" => $title_name_th,
                    "title_name_en" => $title_name_en,
                    "name_status" => $name_status,
                    "color_status" => $color_status,
                    "id_cen_form2" => $id_cen_form2,
                    "name2_th" => $name2_th,
                    "lname2_th" => $lname2_th,
                    "name2_en" => $name2_en,
                    "lname2_en" => $lname2_en,
                    "title2_th" => $title2_th,
                    "title2_en" => $title2_en,
                    "housenumber2" => $housenumber2,
                    "group2" => $group2,
                    "road2" => $road2,
                    "alley2" => $alley2,
                    "province2" => $province2,
                    "district2" => $district2,
                    "sub_district2" => $sub_district2,
                    "zip_code2" => $zip_code2,
                    "phone2" => $phone2,
                    "email2" => $email2,
                    "other2" => $other2,
                    "name_file1" => $name_file1,
                    "name_file2" => $name_file2,
                    "name_path" => $name_path,
                    "list_type" => $list_type,

                );
                array_push($employeeArr["data"], $e);
            }
            return json_encode($employeeArr);
        } else {
            http_response_code(404);
            echo json_encode(
                array(
                    "error" => http_response_code(),
                    "message" => "No record found."
                )
            );
        }
    }
    // CREATE
    public function createData()
    {
        $this->name1_th = htmlspecialchars(strip_tags($this->name1_th));
        $this->lastname1_th = htmlspecialchars(strip_tags($this->lastname1_th));
        $this->name1_en = htmlspecialchars(strip_tags($this->name1_en));
        $this->lastname1_en = htmlspecialchars(strip_tags($this->lastname1_en));
        $this->gender1_th = htmlspecialchars(strip_tags($this->gender1_th));
        $this->gender1_en = htmlspecialchars(strip_tags($this->gender1_en));
        $this->housenumber1 = htmlspecialchars(strip_tags($this->housenumber1));
        $this->group1 = htmlspecialchars(strip_tags($this->group1));
        $this->road1 = htmlspecialchars(strip_tags($this->road1));
        $this->alley1 = htmlspecialchars(strip_tags($this->alley1));
        $this->province1 = htmlspecialchars(strip_tags($this->province1));
        $this->district1 = htmlspecialchars(strip_tags($this->district1));
        $this->sub_district1 = htmlspecialchars(strip_tags($this->sub_district1));
        $this->zip_code1 = htmlspecialchars(strip_tags($this->zip_code1));
        $this->phone1 = htmlspecialchars(strip_tags($this->phone1));
        $this->email1 = htmlspecialchars(strip_tags($this->email1));
        $this->other1 = htmlspecialchars(strip_tags($this->other1));
        $this->type_data = htmlspecialchars(strip_tags($this->type_data));
        $this->name2_th = htmlspecialchars(strip_tags($this->name2_th));
        $this->lastname2_th = htmlspecialchars(strip_tags($this->lastname2_th));
        $this->name2_en = htmlspecialchars(strip_tags($this->name2_en));
        $this->lastname2_en = htmlspecialchars(strip_tags($this->lastname2_en));
        $this->gender2_th = htmlspecialchars(strip_tags($this->gender2_th));
        $this->gender2_en = htmlspecialchars(strip_tags($this->gender2_en));
        $this->housenumber2 = htmlspecialchars(strip_tags($this->housenumber2));
        $this->group2 = htmlspecialchars(strip_tags($this->group2));
        $this->road2 = htmlspecialchars(strip_tags($this->road2));
        $this->alley2 = htmlspecialchars(strip_tags($this->alley2));
        $this->province2 = htmlspecialchars(strip_tags($this->province2));
        $this->district2 = htmlspecialchars(strip_tags($this->district2));
        $this->sub_district2 = htmlspecialchars(strip_tags($this->sub_district2));
        $this->zip_code2 = htmlspecialchars(strip_tags($this->zip_code2));
        $this->phone2 = htmlspecialchars(strip_tags($this->phone2));
        $this->email2 = htmlspecialchars(strip_tags($this->email2));
        $this->other2 = htmlspecialchars(strip_tags($this->other2));
        $this->file1 = htmlspecialchars(strip_tags($this->file1));
        $this->file2 = htmlspecialchars(strip_tags($this->file2));
        $this->name_path = htmlspecialchars(strip_tags($this->name_path));
        $this->request = htmlspecialchars(strip_tags($this->request));
        $this->detail = htmlspecialchars(strip_tags($this->detail));
        $this->text_request = htmlspecialchars(strip_tags($this->text_request));

        $sqlQuery1 = "INSERT INTO " . $this->db_cen_form1 . " VALUES (DEFAULT ,
                                            '$this->name1_th',
                                            '$this->lastname1_th',
                                            '$this->name1_en',
                                            '$this->lastname1_en',
                                            '$this->gender1_th',
                                            '$this->gender1_en',
                                            '$this->housenumber1',
                                            '$this->group1',
                                            '$this->road1',
                                            '$this->alley1',
                                            '$this->province1',
                                            '$this->district1',
                                            '$this->sub_district1',
                                            '$this->zip_code1',
                                            '$this->phone1',
                                            '$this->email1',
                                            '$this->other1',
                                            DEFAULT,
                                            DEFAULT,
                                            '$this->type_data',
                                            DEFAULT
                                          );";
        $sqlQuery2 = "INSERT INTO " . $this->db_cen_form2 . " VALUES (DEFAULT,
                                            '$this->name2_th',
                                            '$this->lastname2_th',
                                            '$this->name2_en',
                                            '$this->lastname2_en',
                                            '$this->gender2_th',
                                            '$this->gender2_en',
                                            '$this->housenumber2',
                                            '$this->group2',
                                            '$this->road2',
                                            '$this->alley2',
                                            '$this->province2',
                                            '$this->district2',
                                            '$this->sub_district2',
                                            '$this->zip_code2',
                                            '$this->phone2',
                                            '$this->email2',
                                            '$this->other2',
                                            (SELECT MAX(id_cen_form1) FROM " . $this->db_cen_form1 . ")
                                          );";
        $sqlQuery3 = "INSERT INTO " . $this->db_cen_file . " VALUES (DEFAULT,
                                            '$this->file1',
                                            '$this->file2',
                                            '$this->name_path',
                                            (SELECT MAX(id_cen_form1) FROM " . $this->db_cen_form1 . ")
                                          );";
        $sqlQuery4 = "INSERT INTO " . $this->db_cen_type . " VALUES (DEFAULT,
                                            '$this->request',
                                            (SELECT MAX(id_cen_form1) FROM " . $this->db_cen_form1 . ")
                                          );";
        $arr_detail = explode(",", $this->detail);
        for ($i = 0; $i < count(explode(",", $this->detail)); $i++) {
            $sqlQuery5 = "INSERT INTO " . $this->db_cen_detail . " VALUES (DEFAULT,
                                            '$arr_detail[$i]',
                                            (SELECT MAX(id_cen_form1) FROM " . $this->db_cen_form1 . ")
                                        );";
        }

        if ($this->text_request != "") {
            $sqlQuery6 = "INSERT INTO cen_type_other VALUES (DEFAULT,
                                              '$this->text_request',
                                              (SELECT MAX(id_cen_form1) FROM " . $this->db_cen_form1 . ")
                                        );";
            pg_query($sqlQuery6);
        }
        if (pg_query($sqlQuery1) && pg_query($sqlQuery2) && pg_query($sqlQuery3) && pg_query($sqlQuery4) && pg_query($sqlQuery5)) {
            return true;
        }
        return false;
    }
    // READ single
    public function getSingleEmployee()
    {
        $sqlQuery = "SELECT
                        id, 
                        name, 
                        email, 
                        age, 
                        designation, 
                        created
                      FROM
                        " . $this->db_table . "
                    WHERE 
                       id = ?
                    LIMIT 0,1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $dataRow['name'];
        $this->email = $dataRow['email'];
        $this->age = $dataRow['age'];
        $this->designation = $dataRow['designation'];
        $this->created = $dataRow['created'];
    }
    // UPDATE
    public function updateEmployee()
    {
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->designation = htmlspecialchars(strip_tags($this->designation));
        $this->created = htmlspecialchars(strip_tags($this->created));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $sqlQuery = "UPDATE " . $this->db_table . "
                    SET
                    name = '$this->name',
                    email = '$this->email',
                    age = '$this->age',
                    designation = '$this->designation',
                    created = '$this->created'
                    WHERE id = '$this->id'";
        if (pg_query($sqlQuery)) {
            return true;
        }
        return false;
    }
    // DELETE
    function deleteEmployee()
    {
        $this->id = htmlspecialchars(strip_tags($this->id));

        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = '$this->id'";
        if (pg_query($sqlQuery)) {
            return true;
        }
        return false;
    }
}
