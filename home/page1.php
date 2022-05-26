<?php
require('../connect/connect.php');
session_start();
?>
  <div id="nextpage2">
            <div class="card mt-4">
                <div class="card-body">
                        <h3>1. ข้อมูลใบร้องขอ</h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                  <label>คำนำหน้า (ไทย)</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="gender1_th" id="gender1_th" onchange="genders1_th()">
                                  <option value="" disabled selected >กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query($conn,"SELECT * FROM cen_title_name");
                                    while($row=pg_fetch_assoc($result)){
                                    ?>
                                    <option value="<?=$row['id']?>" ><?=$row['title_name_th']?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-sm-5">
                                  <form id="form_input_name1_th">
                                    <label for="name">ชื่อ (ไทย)</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[ก-๏\s]+$" onblur="inputname1_th()" class="form-control" id="name1_th" placeholder="" name="name1_th" required>
                                    <!-- <font color="red"id="inputname1_th"></font> -->
                                    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                    <div class="invalid-feedback"><b color="red">กรุณากรอกเป็นอักษรภาษาไทย</b></div>
                                  </form>
                                </div>
                                <div class="col-sm-5">
                                  <form id="form_input_lastname1_th">
                                    <label for="lastname">นามสกุล (ไทย)</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[ก-๏\s]+$" onblur="inputlastname1_th()" class="form-control" id="lastname1_th" placeholder="" name="lastname1_th" required>
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
                                  <label>คำนำหน้า (อังกฤษ)</label><font color="red"><b> *</b></font>
                                  <select class="form-control" name="gender1_en" id="gender1_en" onchange="genders1_en()">
                                  <option value="" disabled selected >กรุณาเลือก</option>
                                    <?php
                                    $result = pg_query($conn,"SELECT * FROM cen_title_name");
                                    while($row=pg_fetch_assoc($result)){
                                    ?>
                                    <option value="<?=$row['id']?>" ><?=$row['title_name_en']?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-sm-5">
                                  <form id="form_input_name1_en">
                                    <label for="name">ชื่อ (อังกฤษ)</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputname1_en()" class="form-control" id="name1_en" placeholder="" name="name1" required>
                                    <!-- <font color="red"id="inputname1_en"></font> -->
                                    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                    <div class="invalid-feedback">
                                    <b color="red">กรุณากรอกเป็นอักษรอังกฤษ</b>
                                </div>
                                  </form>
                                </div>
                                <div class="col-sm-5">
                                  <form id="form_input_lastname1_en">
                                    <label for="lastname">นามสกุล (อังกฤษ)</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[a-zA-Z\s]+$" onblur="inputlastname1_en()" class="form-control" id="lastname1_en" placeholder="" name="lastname1" required>
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
                                    <label for="name">บ้านเลขที่</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[0-9\s]+$" onblur="input_housenumber1()" class="form-control" id="housenumber1" placeholder="" name="housenumber1" required>
                                    <!-- <font color="red"id=""></font> -->
                                    <div class="invalid-feedback">
                                    <b color="red">กรุณากรอกบ้านเลขที่</b>
                                    </div>
                                  </form>
                                </div>

                                <div class="col-sm-2">
                                  <form id="form_input_group1">
                                    <label for="name">หมู่</label><font color="red"><b> *</b></font>
                                    <input type="text" pattern="^[0-9\s]+$" onblur="input_group1()" class="form-control" id="group1" placeholder="" name="group1" oninput="group1Number1(this)" required>
                                    <!-- <font color="red"id=""></font> -->
                                    <div class="invalid-feedback">
                                    <b color="red">กรุณากรอกหมู่</b>
                                    </div>
                                  </form>
                                </div>
                                <div class="col-sm-2">
                                    <label for="name">ตรอก/ซอย</label>
                                    <input type="text" onblur="" class="form-control" id="road1" placeholder="" name="road1" >
                                    <font color="red"id=""></font>
                                </div>
                                <div class="col-sm-2">
                                    <label for="name">ถนน</label>
                                    <input type="text" onblur="" class="form-control" id="alley1" placeholder="" name="alley1" >
                                    <font color="red"id=""></font>
                                </div>
                                <div class="col-sm-4">
                                    <label>จังหวัด</label><font color="red"><b> *</b></font>
                                    <select class="form-control" name="province1" id="province1" onchange="provinces1()">
                                      <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                      <?php
                                      $result = pg_query($conn,"SELECT * FROM provinces ORDER BY province_name");
                                      while($row=pg_fetch_assoc($result)){
                                      ?>
                                      <option value="<?=$row['province_id']?>" ><?=$row['province_name']?></option>
                                      <?php } ?>
                                    </select>
                                    <font color="red"id=""></font>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>อำเภอ</label><font color="red"><b> *</b></font>
                                    <select disabled="disabled" class="form-control" name="district1" id="district1" onchange="districts1()">
                                      <option selected value="">กรุณาเลือก</option>
                                    </select>
                                    <font color="red"id=""></font>
                                </div>
                                <div class="col-sm-4">
                                    <label>ตำบล</label><font color="red"><b> *</b></font>
                                    <select disabled="disabled" class="form-control" name="sub_district1" id="sub_district1" onchange="sub_districts1()">
                                      <option disabled="disabled" selected value="">กรุณาเลือก</option>
                                      <!-- <div id="amphures">

                                      </div> -->
                                    </select>
                                    <font color="red"id=""></font>
                                </div>
                                <div class="col-sm-4">
                                    <label for="zip_code">รหัสไปรษณีย์</label><font color="red"><b> *</b></font>
                                    <select class="form-control" disabled="disabled" id="zip_code1" name="zip_code1">
                                      <!-- <option disabled="disabled" selected value="">กรุณาเลือก</option> -->
                                    </select>
                                    <font color="red"id=""></font>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6">
                            <form id="form_input_phone1">
                              <label for="phone">เบอร์โทรศัพท์ที่ติดต่อได้</label><font color="red"><b> *</b></font>
                              <input maxlength="10" pattern="^[0-9\s]+$" type="text" onblur="inputphone1()" class="form-control" id="phone1" name="phone1" oninput="validateNumber1(this)" required >
                              <!-- <font color="red"id="inputphone1"></font> -->
                              <div class="invalid-feedback">
                              <b color="red">กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง</b>
                              </div>
                            </form>
                            </div>
                            <div class="col-sm-6">
                            <form id="form_input_email1">
                              <label for="email">อีเมล์</label>
                              <input type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" onblur="inputemail1()" class="form-control" id="email1" name="email1" required>
                              <!-- <font color="red"id="inputemail1"></font> -->
                              <div class="invalid-feedback">
                              <b color="red">กรุณากรอกอีเมลให้ถูกต้อง</b>
                              </div>
                            </form>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">ระบุรายละเอียดอื่นๆ (ถ้ามี)</label>
                            <textarea class="form-control" rows="5" id="other1" name="other1" placeholder="รายละเอียดอื่นๆ (ถ้ามี)"></textarea>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" onclick="checktype1()" id="type1" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              ผู้ยื่นดำร้องเป็นบุคคลเดียวกับเจ้าของข้อมูล
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" onclick="checktype2()" id="type2" value="2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                              ผู้ยื่นคำร้องเป็นผู้รับมอบอำนาจจากเจ้าของข้อมูล
                            </label>
                          </div>
                        </div>
                        <!-- <script>
                                   var ele = document.getElementsByTagName('input');

                                   for(i = 0; i < ele.length; i++) {

                                       if(ele[i].type="type") {

                                           if(ele[i].checked)
                                               document.getElementById("page2").innerHTML
                                                       += ele[i].name + " Value: "
                                                       + ele[i].value + "<br>";
                                       }
                                   }
                           </script> -->
                        <div id="page2" hidden>

                        </div>
                    </div>
                    </div>
                  </div>
                  </div>
                        <div class="row mt-3 mb-5">
                            <div class="col-sm-6">
                                <button type="button" onclick="backhome()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" id="next_page2" onclick="nextpage2()" class="btn btn-primary btn-lg btn-block">ถัดไป</button>
                                <!-- <button name="page1" type="submit" class="btn btn-primary btn-lg btn-block">ถัดไป</button> -->
                            </div>
                        </div>
                  </div>


<script type="text/javascript" src="js/radio_page1_home.js"></script>
<script type="text/javascript">
