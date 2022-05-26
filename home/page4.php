  <div id="showpage">
    <div class="card mt-4">
      <div class="card-body">
        <form action="/action_page.php">
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
              <!-- <div class="row mt-3">
                <div class="col-sm-1 mt-2">
                    <label for="text">ลำดับ 2</label>
                </div>
                <div class="col-sm-11">
                  <textarea type="text" class="form-control" name="detail" placeholder="รายละเอียดข้อมูลผู้ขอรับสิทธิ"></textarea>
                </div>
              </div>
              <div class="row mt-3" id="div1">
                <div class="col-sm-1 mt-2">
                    <label for="text">ลำดับ 3</label>
                </div>
                <div class="col-sm-11">
                  <textarea type="text" class="form-control" name="detail" placeholder="รายละเอียดข้อมูลผู้ขอรับสิทธิ"></textarea>
                </div>
              </div> -->

            </div>

            <center>
              <button type="button" onclick="addinput()" class="btn btn-secondary mt-3">เพิ่ม</button>
            </center>
        </div>
    </div>
    <div class="row mt-3 mb-5">
        <div class="col-sm-6">
            <button type="button" onclick="backpage3()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
        </div>
        <div class="col-sm-6">
            <button type="button" onclick="nextpage5()" class="btn btn-primary btn-lg btn-block">ถัดไป</button>
        </div>
    </div>
  </form>
</div>
<script type="text/javascript">

</script>
