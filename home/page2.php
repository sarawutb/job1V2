<?php
date_default_timezone_set("Asia/Bangkok");
if (!file_exists("../uploads/".date("dmY"))) {
  $flgCreate = mkdir("../uploads/".date("dmY"));
}
?>
<div id="showpage">
      <div class="card mt-4">
        <div class="card-body">
            <form action="/action_page.php">
              <h3>2. เอกสารพิสูจน์ตัวตน</h3>
                <div class="form-group">
                  <label for="email">สำเนาบัตรประจำตัวประชาชน(กรณีเป็นคนไทย)</label> <font color="red">*ขนาดไม่เกิน 5 mb</font>
                  <div class="custom-file">
                    <div class="form-row align-items-center">
                      <div class="col"><div class="custom-file">
                        <!-- <input lang="th" class="custom-file-input" required="" onchange="select_file1()" type="file" name="file1" id="input_file1" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"> -->
                        <input lang="th" class="custom-file-input" required="" onchange="select_file1()" type="file" name="file1" id="input_file1" accept="image/*,application/pdf,image/x-eps" capture="camera">
                        <label  class="custom-file-label" data-browse="แนบเอกสาร" for="Label">
                          <div class="fileinput custom-file-display-name" id="show_file1"></div>
                        </label>
                      </div>
                      </div>
                    <div class="col-auto">
                      <em onclick="clear_file1()" class="fa fa-trash btn-action ml-4" style="font-size: 25px"></em>
                    </div>
                  </div>
                  <font color="red"id="report_file1"></font>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">สำเนาหนังสือเดินทาง(กรณีต่างชาติ)</label> <font color="red">*ขนาดไม่เกิน 5 mb</font>
                  <div class="custom-file">
                    <div class="form-row align-items-center">
                      <div class="col"><div class="custom-file">
                        <!-- <input lang="th" class="custom-file-input" required="" onchange="select_file2()" type="file" name="file2" id="input_file2" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"> -->
                        <input lang="th" class="custom-file-input" required="" onchange="select_file2()" type="file" name="file2" id="input_file2" accept="image/*" capture="camera">
                        <label  class="custom-file-label" data-browse="แนบเอกสาร" for="Label">
                          <div class="fileinput custom-file-display-name" id="show_file2"></div>
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      <em onclick="clear_file2()" class="fa fa-trash btn-action ml-4" style="font-size: 25px"></em>
                    </div>
                  </div>
                  <font color="red"id="report_file2"></font>
                  </div>
                </div>

<script type="text/javascript">
  // var input_file1 = document,getElementById("input_file1");
  function clear_file1() {
    console.log("OK1");
    document.getElementById("input_file1").value = null;
    document.getElementById("show_file1").innerHTML = null;
  }
  function clear_file2() {
    console.log("OK2");
    document.getElementById("input_file2").value = null;
    document.getElementById("show_file2").innerHTML = null;
  }
</script>

            <div class="form-group">
              <label>หมายเหตุ: หนังสือมอบอำนาจจะต้องมีลักษณะดังนี้</label>
                <div class="ml-5 mr-5">
                      <p class="mb-0">1) เนื้อดวามอย่างน้อยระบุ "ให้อำนาจผู้ยื่นคำร้องในการดำเนินการติดต่อร้อง
                        ขอให้ผู้ควบคุมข้อมูลดำเนินการอนุญาตให้เข้าถึงข้อมูลส่วนบุคคลหรือทำ
                        สำเนาข้อมูลส่วนบุคคล เปิดเผยการได้มาซึ่งข้อมูลส่วนบุคคลที่เจ้าของข้อมูล
                        ส่วนบุคคลผู้มอบอำนาจไม่ได้ให้ความยินยอม รวมถึงดำเนินการที่เกี่ยวข้องจน
                        เสร็จการ</p>
                      <p class="mb-5">2) มีการลงนามโดยผู้มอบอำนาจและผู้รับมอบอำนาจอย่างชัดเจน</p>
                </div>
                <label>&emsp;&emsp; บริษัทฯ ขอสงวนสิทธิในการสอบถามข้อมูล หรือเรียกเอกสารเพิ่มเติม
                          จากผู้ยื่นคำร้อง หากข้อมูลที่ได้รับไม่สามารถแสดงให้เห็นอย่างชัดเจนได้ว่าผู้
                          ยื่นคำร้องเป็นเจ้าของข้อมูล หรือมีอำนาจในการยืนคำร้องขอดังกล่าว บริษัทฯ
                          ขอสงวนสิทธิในการปฏิเสธคำร้องขอของท่าน
                </label>
                <center>
                  <label class="mt-3">
                    <input onclick="check_page()" id="success_page" type="checkbox">
                    ยอมรับ
                  </label>
                </center>
            </div>
        </div>
      </div>

          <div class="row mt-3 mb-5">
              <div class="col-sm-6">
                  <button type="button" onclick="backpage1()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
              </div>
              <div class="col-sm-6">
                  <button type="button" onclick="nextpage3()" id="btn_next_page" disabled class="btn btn-primary btn-lg btn-block">ถัดไป</button>
              </div>
          </div>

        </form>
</div>
