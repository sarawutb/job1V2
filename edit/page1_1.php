<?php
require('../connect/connect.php');
$title2_th = $_GET['title2_th'];
$title2_en = $_GET['title2_en'];
$name2_th = $_GET['name2_th'];
$name2_en = $_GET['name2_en'];
$lastname2_th = $_GET['lname2_th'];
$lastname2_en = $_GET['lname2_en'];
$housenumber2 = $_GET['housenumber2'];
$group2 = $_GET['group2'];
$road2 = $_GET['road2'];
$alley2 = $_GET['alley2'];
$province2 = $_GET['province2'];
$district2 = $_GET['district2'];
$sub_district2 = $_GET['sub_district2'];
$zip_code2 = $_GET['zip_code2'];
$phone2 = $_GET['phone2'];
$email2 = $_GET['email2'];
$other2 = $_GET['other2'];
?>
    <div class="form-group">
                          <div class="row">
                              <div class="col-sm-2">
                                <label>คำนำหน้า</label>
                                <select class="form-control" name="gender2_th" id="gender2_th" onchange="genders2_th()">
                                <option value="" disabled selected >กรุณาเลือก</option>
                                  <?php
                                  $result = pg_query($conn,"SELECT * FROM cen_title_name");
                                  while($row=pg_fetch_assoc($result)){
                                  ?>
                                  <option value="<?=$row['id']?>" <?php if($title2_th==$row['id']){echo "selected";}?>><?=$row['title_name_th']?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="col-sm-5">
                                <form id="form_input_name2_th">
                                  <label for="name">ชื่อ (ไทย)</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[ก-๏\s]+$" onblur="inputname2_th()" class="form-control" id="name2_th" placeholder="" name="name2_th" value="<?=$name2_th?>" required>
                                  <font color="red"id="inputname2_th"></font>
                                  <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรภาษาไทย</b></div>
                                </form>
                              </div>
                              <div class="col-sm-5">
                                <form id="form_input_lastname2_th">
                                  <label for="lastname">นามสกุล (ไทย)</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[ก-๏\s]+$" onblur="inputlastname2_th()" class="form-control" id="lastname2_th" placeholder="" name="lastname2_th" value="<?=$lastname2_th?>" required>
                                  <!-- <font color="red"id="inputlastname2_th"></font> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรภาษาไทย</b></div>
                                </form>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="row">
                              <div class="col-sm-2">
                                <label>คำนำหน้า (อังกฤษ)</label><font color="red"><b> *</b></font>
                                <select class="form-control" name="gender2_en" id="gender2_en" onchange="genders2_en()">
                                <option value="" disabled selected >กรุณาเลือก</option>
                                  <?php
                                  $result = pg_query($conn,"SELECT * FROM cen_title_name");
                                  while($row=pg_fetch_assoc($result)){
                                  ?>
                                  <option value="<?=$row['id']?>" <?php if($title2_en==$row['id']){echo "selected";}?>><?=$row['title_name_en']?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="col-sm-5">
                                <form id="form_input_name2_en">
                                  <label for="name">ชื่อ (อังกฤษ)</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputname2_en()" class="form-control" id="name2_en" placeholder="" name="name2_en" value="<?=$name2_en?>" required>
                                  <!-- <font color="red"id="inputname2_en"></font> -->
                                  <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรอังกฤษ</b></div>
                                </form>
                              </div>
                              <div class="col-sm-5">
                                <form id="form_input_lastname2_en">
                                  <label for="lastname">นามสกุล (อังกฤษ)</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputlastname2_en()" class="form-control" id="lastname2_en" placeholder="" name="lastname2_en" value="<?=$lastname2_en?>" required>
                                  <!-- <font color="red"id="inputlastname2_en"></font> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรอังกฤษ</b></div>
                                </form>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="row">
                              <div class="col-sm-2">
                                <form id="form_input_housenumber2">
                                  <label for="name">บ้านเลขที่</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[0-9\s]+$" onblur="input_housenumber2()" class="form-control" id="housenumber2" placeholder="" name="housenumber2" value="<?=$housenumber2?>" required>
                                  <!-- <font color="red"id=""></font> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกบ้านเลขที่</b></div>
                                </form>
                              </div>
                              <div class="col-sm-2">
                                <form id="form_input_group2">
                                  <label for="name">หมู่</label><font color="red"><b> *</b></font>
                                  <input type="text" pattern="^[0-9\s]+$" onblur="input_group2()" class="form-control" id="group2" placeholder="" name="group2" oninput="group1Number2(this)" value="<?=$group2?>" required>
                                  <!-- <font color="red"id=""></font> -->
                                  <div class="invalid-feedback"><b color="red">กรุณากรอกหมู่</b></div>
                                </form>
                              </div>
                              <div class="col-sm-2">
                                  <label for="name">ตรอก/ซอย</label>
                                  <input type="text" onblur="" class="form-control" id="road2" placeholder="" name="road2" value="<?=$road2?>" >
                                  <font color="red"id=""></font>
                              </div>
                              <div class="col-sm-2">
                                  <label for="name">ถนน</label>
                                  <input type="text" onblur="" class="form-control" id="alley2" placeholder="" name="alley2" value="<?=$alley2?>" >
                                  <font color="red"id=""></font>
                              </div>
                              <div class="col-sm-4">
                                  <label>จังหวัด</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="province2" id="province2" onchange="provinces2()">
                                    <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query($conn,"SELECT * FROM provinces ORDER BY province_name");
                                    while($row=pg_fetch_assoc($result)){
                                    ?>
                                    <option value="<?=$row['province_id']?>" <?php if($province2==$row['province_id']){echo "selected";}?>><?=$row['province_name']?></option>
                                    <?php } ?>
                                  </select>
                                  <font color="red"id=""></font>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="row">
                              <div class="col-sm-4">
                                  <label for="lastname">อำเภอ</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="district2" id="district2" onchange="districts2()">
                                    <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query($conn,"SELECT * FROM amphures WHERE province_id = $province2 ORDER BY amphur_name");
                                    while($row=pg_fetch_assoc($result)){
                                    ?>
                                    <option value="<?=$row['amphur_id']?>" <?php if($district2==$row['amphur_id']){echo "selected";}?>><?=$row['amphur_name']?></option>
                                    <?php } ?>
                                  </select>
                                  <font color="red"id=""></font>
                              </div>
                              <div class="col-sm-4">
                                  <label for="lastname">ตำบล</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="sub_district2" id="sub_district2" onchange="sub_districts2()">
                                      <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                      <?php
                                      $result = pg_query($conn,"SELECT * FROM districts WHERE amphur_id = $district2 ORDER BY district_name");
                                      while($row=pg_fetch_assoc($result)){
                                      ?>
                                      <option value="<?=$row['district_code']?>" <?php if($sub_district2==$row['district_code']){echo "selected";}?>><?=$row['district_name']?></option>
                                      <?php } ?>
                                    </select>
                                  <font color="red"id=""></font>
                              </div>
                              <div class="col-sm-4">
                                  <label for="zip_code">รหัสไปรษณีย์</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="zip_code2" id="zip_code2">
                                    <!-- <option disabled="disabled" selected value="">กรุณาเลือก</option> -->
                                    <option selected value="<?=$zip_code2?>"><?=$zip_code2?></option>
                                  </select>
                                  <font color="red"id=""></font>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6">
                            <form id="form_input_phone2">
                            <label for="phone">เบอร์โทรศัพท์ที่ติดต่อได้</label><font color="red"><b> *</b></font>
                            <input maxlength="10" pattern="^[0-9\s]+$" type="text" onblur="inputphone2()" class="form-control" id="phone2" name="phone2" oninput="validateNumber2(this)" value="<?=$phone2?>" required>
                            <!-- <font color="red"id="inputphone2"></font> -->
                            <div class="invalid-feedback"><b color="red">กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง</b></div>
                          </form>
                          </div>
                          <div class="col-sm-6">
                            <form id="form_input_email2">
                            <label for="email">อีเมล์</label><font color="red"><b> *</b></font>
                            <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" onblur="inputemail2()" class="form-control" id="email2" name="email2" value="<?=$email2?>" required>
                            <!-- <font color="red"id="inputemail2"></font> -->
                            <div class="invalid-feedback"><b color="red">กรุณากรอกอีเมลให้ถูกต้อง</b></div>
                          </form>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="address">ระบุรายละเอียดอื่นๆ (ถ้ามี)</label>
                          <textarea class="form-control" rows="5" id="other2" name="other2" placeholder="รายละเอียดอื่นๆ (ถ้ามี)"><?=$other2?></textarea>
                      </div>
                      <!-- <div class="form-group">
                          <label for="address">ท่านเป็นเจ้าของข้อมูลใช่หรือไม่</label><font color="red"><b> *</b></font>
                          <div class="checkbox">
                              <label><input type="checkbox" name="remember"> ผู้ยื่นดำร้องเป็นบุคคลเดียวกับเจ้าของข้อมูล</label>
                          </div>
                          <div class="checkbox">
                              <label><input type="checkbox" name="remember"> ผู้ยื่นคำร้องเป็นผู้รับม่อบอำนาจจากเจ้าของข้อมูล</label>
                          </div>
                      </div> -->
<!-- <script type="text/javascript">

</script> -->
