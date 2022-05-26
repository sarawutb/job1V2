  <div id="showpage">
    <div class="card mt-4">
      <div class="card-body">
        <form action="/action_page.php">
          <h3>3. ประเภทของการขอใช้สิทธิ</h3>
            <div class="form-group">
              <label for="address">โปรดระบุว่าท่านต้องการใช้สิทธิในเรื่องใด</label>
                <div class="checkbox">
                  <label><input type="checkbox" name="request" value="1" onclick="checked1()"> สิทธิในการขอถอนความยินยอม</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="request" value="2" onclick="checked2()"> สิทธิในการขอเข้าถึง และ/หรือขอรับสำเนาข้อมูลส่วนบุคคล</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="request" value="3" onclick="checked3()"> สิทธิในการขอแก้ไขข้อมูลส่วนบุคคลให้ถูกต้อง สมบูรณ์ และเป็นปัจจุบัน</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="request" value="4" onclick="checked4()"> สิทธิในการขอลบ ทำลายข้อมูลส่วนบคคล หรือทำให้ไม่สามารถระบุตัวตนของเจ้าของข้อมูลส่วนบุคคลได้</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="request" value="5" onclick="checked5()"> สิทธิคัดค้านการประมวลผลข้อมูลส่วนบุคคล</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="request" value="6" onclick="checked6()"> สิทธิ์ในการขอให้ระงับการใช้ข้อมูลส่วนบุคคล</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="request" value="7" onclick="checked7()"> สิทธิในการส่งหรือโอนย้ายข้อมูล</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" id="checkbox_other" onclick="other_text()" name="request" value="8">&nbsp;อื่นๆ (ระบุ)</label>
                    <textarea rows="6" disabled id="text_other" oninput="input_other_type()" class="form-control ml-2" type="text" name="text_request" value=""></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-6">
            <button type="button" onclick="backpage2()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
        </div>
        <div class="col-sm-6">
            <button type="button" id="page4" disabled onclick="nextpage4()" class="btn btn-primary btn-lg btn-block">ถัดไป</button>
        </div>
    </div>
  </form>
</div>
