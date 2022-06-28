<?php
// require('../connect/connect.php');
session_start();
$_SESSION['page'] = 1;
header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/controller.php';
$database = new Database();
$db = $database->getConnection();
$items = new Employee($db);
$items->userid = $_GET['userid'];
$stmt = $items->getListUpdate();

$data = json_decode($stmt);
foreach ($data->data as $row) {
    $name1_th = $row->name1_th;
    $lname1_th = $row->lname1_th;
    $name1_en = $row->name1_en;
    $lname1_en = $row->lname1_en;
    $title1_th = $row->title1_th;
    $title1_en = $row->title1_en;
    $housenumber1 = $row->housenumber1;
    $group1 = $row->group1;
    $road1 = $row->road1;
    $alley1 = $row->alley1;
    $province1 = $row->province1;
    $district1 = $row->district1;
    $sub_district1 = $row->sub_district1;
    $zip_code1 = $row->zip_code1;
    $phone1 = $row->phone1;
    $email1 = $row->email1;
    $other1 = $row->other1;
    $type_data = $row->type_data;
    $other_text = null;
    $file1 = $row->name_file1;
    $file2 = $row->name_file2;
    $path_file = $row->name_path;
    $name2_th = $row->name2_th;
    $lname2_th = $row->lname2_th;
    $name2_en = $row->name2_en;
    $lname2_en = $row->lname2_en;
    $title2_th = $row->title2_th;
    $title2_en = $row->title2_en;
    $housenumber2 = $row->housenumber2;
    $group2 = $row->group2;
    $road2 = $row->road2;
    $alley2 = $row->alley2;
    $province2 = $row->province2;
    $district2 = $row->district2;
    $sub_district2 = $row->sub_district2;
    $zip_code2 = $row->zip_code2;
    $phone2 = $row->phone2;
    $email2 = $row->email2;
    $other2 = $row->other2;

    $list_type = explode(",", $row->list_type);
    // print_r($list_type);
}
// session_destroy();
?>
<div class="container mt-1 mb-5">
    <div class="card-body">
        <div class="card mt-4">
            <div class="card-body">
                <h3>1. ข้อมูลใบร้องขอ</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-2">
                            <label>คำนำหน้า (ไทย)</label>
                            <font color="red"><b> *</b></font>
                            <select class="form-control" name="gender1_th" id="gender1_th" onchange="genders1_th()">
                                <option value="" disabled selected>กรุณาเลือก</option>
                                <?php
                                $result = pg_query("SELECT * FROM cen_title_name");
                                while ($row = pg_fetch_assoc($result)) {
                                ?>
                                    <option value="<?= $row['id'] ?>" <?php if ($title1_th == $row['id']) {
                                                                            echo "selected";
                                                                        } ?>><?= $row['title_name_th'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <form id="form_input_name1_th">
                                <label for="name">ชื่อ (ไทย)</label>
                                <font color="red"><b> *</b></font>
                                <input type="text" pattern="^[ก-๏\s]+$" onblur="inputname1_th()" class="form-control" id="name1_th" placeholder="" name="name1_th" value="<?= $name1_th ?>" required>
                                <!-- <font color="red"id="inputname1_th"></font> -->
                                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรภาษาไทย</b></div>
                            </form>
                        </div>
                        <div class="col-sm-5">
                            <form id="form_input_lastname1_th">
                                <label for="lastname">นามสกุล (ไทย)</label>
                                <font color="red"><b> *</b></font>
                                <input type="text" class="form-control" id="lastname1_th" name="lastname1_th" value="<?= $lname1_th ?>" required>
                                <!-- <font color="red"id="inputlastname1_th"></font> -->
                                <div class="invalid-feedback">
                                    <b color="red">กรุณากรอกเป็นอักษรภาษาไทย</b>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label>คำนำหน้า (อังกฤษ)</label>
                                <font color="red"><b> *</b></font>
                                <select class="form-control" name="gender1_en" id="gender1_en" onchange="genders1_en()">
                                    <option value="" disabled selected>กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query("SELECT * FROM cen_title_name");
                                    while ($row = pg_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?= $row['id'] ?>" <?php if ($title1_en == $row['id']) {
                                                                                echo "selected";
                                                                            } ?>><?= $row['title_name_en'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <form id="form_input_name1_en">
                                    <label for="name">ชื่อ (อังกฤษ)</label>
                                    <font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputname1_en()" class="form-control" id="name1_en" placeholder="" name="name1" value="<?= $name1_en ?>" required>
                                    <!-- <font color="red"id="inputname1_en"></font> -->
                                    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกเป็นอักษรอังกฤษ</b>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-5">
                                <form id="form_input_lastname1_en">
                                    <label for="lastname">นามสกุล (อังกฤษ)</label>
                                    <font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputlastname1_en()" class="form-control" id="lastname1_en" placeholder="" name="lastname1" value="<?= $lname1_en ?>" required>
                                    <!-- <font color="red"id="inputlastname1_en"></font> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกเป็นอักษรอังกฤษ</b>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <form id="form_input_housenumber1">
                                    <label for="name">บ้านเลขที่</label>
                                    <font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[0-9\s]+$" onblur="input_housenumber1()" class="form-control" id="housenumber1" placeholder="" name="housenumber1" value="<?= $housenumber1 ?>" required>
                                    <!-- <font color="red"id=""></font> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกบ้านเลขที่</b>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-2">
                                <form id="form_input_group1">
                                    <label for="name">หมู่</label>
                                    <font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[0-9\s]+$" onblur="input_group1()" class="form-control" id="group1" placeholder="" name="group1" oninput="group1Number1(this)" value="<?= $group1 ?>" required>
                                    <!-- <font color="red"id=""></font> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกหมู่</b>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-2">
                                <label for="name">ตรอก/ซอย</label>
                                <input type="text" onblur="" class="form-control" id="road1" placeholder="" name="road1" value="<?= $road1 ?>">
                                <font color="red" id=""></font>
                            </div>
                            <div class="col-sm-2">
                                <label for="name">ถนน</label>
                                <input type="text" onblur="" class="form-control" id="alley1" placeholder="" name="alley1" value="<?= $alley1 ?>">
                                <font color="red" id=""></font>
                            </div>
                            <div class="col-sm-4">
                                <label>จังหวัด</label>
                                <font color="red"><b> *</b></font>
                                <select class="form-control" name="province1" id="province1" onchange="provinces1()">
                                    <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query("SELECT * FROM provinces ORDER BY province_name");
                                    while ($row = pg_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?= $row['province_id'] ?>" <?php if ($province1 == $row['province_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $row['province_name'] ?></option>
                                    <?php } ?>
                                </select>
                                <font color="red" id=""></font>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>อำเภอ</label>
                                <font color="red"><b> *</b></font>
                                <select class="form-control" name="district1" id="district1" onchange="districts1()">
                                    <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query("SELECT * FROM amphures WHERE province_id = $province1 ORDER BY amphur_name");
                                    while ($row = pg_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?= $row['amphur_id'] ?>" <?php if ($district1 == $row['amphur_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $row['amphur_name'] ?></option>
                                    <?php } ?>
                                </select>
                                <font color="red" id=""></font>
                            </div>
                            <div class="col-sm-4">
                                <label>ตำบล</label>
                                <font color="red"><b> *</b></font>
                                <select class="form-control" name="sub_district1" id="sub_district1" onchange="sub_districts1()">
                                    <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query("SELECT * FROM districts WHERE amphur_id = $district1 ORDER BY district_name");
                                    while ($row = pg_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?= $row['district_code'] ?>" <?php if ($sub_district1 == $row['district_code']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $row['district_name'] ?></option>
                                    <?php } ?>
                                </select>
                                <!-- <div id="amphures">

                        </div> -->
                                <font color="red" id=""></font>
                            </div>
                            <div class="col-sm-4">
                                <label for="zip_code">รหัสไปรษณีย์</label>
                                <font color="red"><b> *</b></font>
                                <select class="form-control" id="zip_code1" name="zip_code1">
                                    <option selected value="<?= $zip_code1 ?>"><?= $zip_code1 ?></option>
                                </select>
                                <font color="red" id=""></font>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <form id="form_input_phone1">
                                    <label for="phone">เบอร์โทรศัพท์ที่ติดต่อได้</label>
                                    <font color="red"><b> *</b></font>
                                    <input maxlength="10" pattern="^[0-9\s]+$" type="text" onblur="inputphone1()" class="form-control" id="phone1" name="phone1" oninput="validateNumber1(this)" value="<?= $phone1 ?>" required>
                                    <!-- <font color="red"id="inputphone1"></font> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง</b>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <form id="form_input_email1">
                                    <label for="email">อีเมล์</label>
                                    <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" onblur="inputemail1()" class="form-control" id="email1" name="email1" value="<?= $email1 ?>" required>
                                    <!-- <font color="red"id="inputemail1"></font> -->
                                    <div class="invalid-feedback">
                                        <b color="red">กรุณากรอกอีเมลให้ถูกต้อง</b>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">ระบุรายละเอียดอื่นๆ (ถ้ามี)</label>
                            <textarea class="form-control" rows="5" id="other1" name="other1" placeholder="รายละเอียดอื่นๆ (ถ้ามี)"><?= $other1 ?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" onclick="checktype1()" id="type1" <?php if ($type_data == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    ผู้ยื่นดำร้องเป็นบุคคลเดียวกับเจ้าของข้อมูล
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" onclick="checktype2()" id="type2" <?php if ($type_data == 2) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    ผู้ยื่นคำร้องเป็นผู้รับมอบอำนาจจากเจ้าของข้อมูล
                                </label>
                            </div>
                        </div>
                        <div id="page2" <?php if ($type_data == 1) {
                                            echo "hidden";
                                        }
                                        ?>>

                        </div>
                    </div>
                    <h3>2. เอกสารพิสูจน์ตัวตน</h3>
                    <div class="form-group">
                        <?php
                        if ($file1 != null) {
                            $ext = pathinfo($file1, PATHINFO_EXTENSION);
                            $allowed = array('jpg', 'jpeg', 'png', 'jpeg', 'gif');
                            if (in_array($ext, $allowed)) {
                        ?>
                                <div class="text-center" id="view_img">
                                    <img src="../uploads/<?= $path_file ?>/<?= $file1 ?>" class="img-thumbnail" height="auto" alt="สำเนาบัตรประจำตัวประชาชน">
                                </div>
                            <?php
                            } else {
                            ?>
                                <div id="view_pdf">
                                    <object data="../uploads/<?= $path_file ?>/<?= $file1 ?>" width="100%" height="600px"></object>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <label for="email">สำเนาบัตรประจำตัวประชาชน(กรณีเป็นคนไทย)</label>
                        <font color="red">*ขนาดไม่เกิน 5 mb</font>
                        <div class="custom-file">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <div class="custom-file">
                                        <!-- <input lang="th" class="custom-file-input" required="" onchange="select_file1()" type="file" name="file1" id="input_file1" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"> -->
                                        <input lang="th" class="custom-file-input" onchange="select_file1()" type="file" name="file1" id="input_file1" accept="image/*" capture="camera">
                                        <label class="custom-file-label" data-browse="แนบเอกสาร" for="Label">
                                            <div class="fileinput custom-file-display-name" id="show_file1"><?= $file1 ?></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <em onclick="clear_file1()" class="fa fa-trash btn-action ml-4" style="font-size: 25px"></em>
                                </div>
                            </div>
                            <font color="red" id="report_file1"></font>
                        </div>
                    </div>
                    <div class="form-group">

                        <?php
                        if ($file2 != null) {
                            $ext = pathinfo($file2, PATHINFO_EXTENSION);
                            $allowed = array('jpg', 'jpeg', 'png', 'jpeg', 'gif');
                            if (in_array($ext, $allowed)) {
                        ?>
                                <div class="text-center" id="view_img">
                                    <img src="../uploads/<?= $path_file ?>/<?= $file2 ?>" class="img-thumbnail" height="auto" alt="สำเนาบัตรประจำตัวประชาชน">
                                </div>
                            <?php
                            } else {
                            ?>
                                <div id="view_pdf">
                                    <object data="../uploads/<?= $path_file ?>/<?= $file2 ?>" width="100%" height="600px"></object>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <label for="email">สำเนาหนังสือเดินทาง(กรณีต่างชาติ)</label>
                        <font color="red">*ขนาดไม่เกิน 5 mb</font>
                        <div class="custom-file">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <div class="custom-file">
                                        <!-- <input lang="th" class="custom-file-input" required="" onchange="select_file2()" type="file" name="file2" id="input_file2" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"> -->
                                        <input lang="th" class="custom-file-input" onchange="select_file2()" type="file" name="file2" id="input_file2" accept="image/*" capture="camera">
                                        <label class="custom-file-label" data-browse="แนบเอกสาร" for="Label">
                                            <div class="fileinput custom-file-display-name" id="show_file2"><?= $file2 ?></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <em onclick="clear_file2()" class="fa fa-trash btn-action ml-4" style="font-size: 25px"></em>
                                </div>
                            </div>
                            <font color="red" id="report_file2"></font>
                        </div>
                    </div>
                    <h3>3. ประเภทของการขอใช้สิทธิ</h3>
                    <div class="form-group">
                        <label for="address">โปรดระบุว่าท่านต้องการใช้สิทธิในเรื่องใด</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="1" <?php if (in_array("1", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked1()"> สิทธิในการขอถอนความยินยอม</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="2" <?php if (in_array("2", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked2()"> สิทธิในการขอเข้าถึง และ/หรือขอรับสำเนาข้อมูลส่วนบุคคล</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="3" <?php if (in_array("3", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked3()"> สิทธิในการขอแก้ไขข้อมูลส่วนบุคคลให้ถูกต้อง สมบูรณ์ และเป็นปัจจุบัน</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="4" <?php if (in_array("4", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked4()"> สิทธิในการขอลบ ทำลายข้อมูลส่วนบคคล หรือทำให้ไม่สามารถระบุตัวตนของเจ้าของข้อมูลส่วนบุคคลได้</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="5" <?php if (in_array("5", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked5()"> สิทธิคัดค้านการประมวลผลข้อมูลส่วนบุคคล</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="6" <?php if (in_array("6", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked6()"> สิทธิ์ในการขอให้ระงับการใช้ข้อมูลส่วนบุคคล</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="request" value="7" <?php if (in_array("7", $list_type)) {
                                                                                        echo "checked";
                                                                                    } ?> onclick="checked7()"> สิทธิในการส่งหรือโอนย้ายข้อมูล</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="checkbox_other" onclick="other_text()" name="request" value="8" <?php if (in_array("8", $list_type)) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>&nbsp;อื่นๆ (ระบุ)</label>
                            <?php
                            $result = pg_query("SELECT * FROM cen_type_other WHERE id_cen_form1 = $_GET[userid]");
                            while ($row = pg_fetch_assoc($result)) {
                                $other_text = $row['other_text'];
                            }
                            ?>
                            <textarea rows="6" <?php if (!in_array("8", $list_type)) {
                                                    echo "disabled";
                                                } ?> id="text_other" class="form-control ml-2" type="text" name="text_request" width="100%" value=""><?= $other_text ?></textarea>

                        </div>
                    </div>
                    <h3>4. รายละเอียดข้อมูลของบุคคลที่ขอใช้สิทธิ</h3>
                    <div class="form-group mt-5">
                        <div class="row" id="div1">
                            <div class="col-sm-1 mt-2">
                                <label for="text">ลำดับ 1</label>
                            </div>
                            <div class="col-sm-11">
                                <textarea type="text" class="form-control" id="test00" name="detail" placeholder="รายละเอียดข้อมูลผู้ขอรับสิทธิ"></textarea>
                            </div>
                        </div>
                        <center>
                            <button type="button" onclick="addinput()" class="btn btn-secondary mt-3">เพิ่ม</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-sm-6">
                <a href="../manager"><button type="button" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button></a>
            </div>
            <div class="col-sm-6">
                <button type="submit" id="" onclick="update()" class="btn btn-primary btn-lg btn-block">บันทึก</button></a>
                <!-- <button name="page1" type="submit" class="btn btn-primary btn-lg btn-block">ถัดไป</button> -->
            </div>
        </div>
    </div>
</div>
<script>
    function update() {
        $.ajax({
            type: "POST",
            url: "../api/update.php?gender1_th=1&name1_th=1234&lastname1_th=1234&gender1_en=1&name1_en=1234&lastname1_en=1234&housenumber1=22&group1=22&road1=123&alley1=123&province1=58&district1=809&sub_district1=730310&zip_code1=73120&other1=12345&type=on&file1=&file2=&request=1&request=2&request=3&request=4&request=5&request=6&detail=",
            // data: {id:id_amphures,function:'amphures'},
            success: function(data) {
                // $('#district1').html(data);
                location.href = "../manager/";
            }
        });
    }
</script>