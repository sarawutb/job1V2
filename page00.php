<div style="" id="loadingDiv">
  <div class="loader">Loading...</div>
</div>
<div id="showpage">
  <div class="card mt-4">
    <div class="card-body">
      <form action="/action_page.php">
        <h3>2. ข้อมูลเจ้าของข้อมูลส่วนบุคคล (กรณีผู้ยืนคำร้องเป็นผู้รับมอบอำนาจจากเจ้าของข้อมูล)</h3>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="form-control" placeholder="" name="name">
                </div>
                <div class="col-sm-6">
                    <label for="lastname">นามสกุล</label>
                    <input type="text" class="form-control" placeholder="" name="lastname">
                </div>
              </div>
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label for="phone">เบอร์โทรศัพท์ที่ติดต่อได้</label>
            <input type="number" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="email">อีเมล์</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="address">ระบุรายละเอียดอื่นๆ (ถ้ามี)</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
      </div>
    </div>

        <div class="row mt-3">
            <div class="col-sm-6">
                <button type="button" onclick="backpage1()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
            </div>
            <div class="col-sm-6">
                <button type="button" onclick="nextpage3()" class="btn btn-primary btn-lg btn-block">ถัดไป</button>
            </div>
        </div>

      </form>

</div>

<script type="text/javascript">
function backpage1(){
      $.ajax({
       url: "page1.php",
       data:"",
       success: function(result){
       $("#showpage").html(result);
    }});
}
function nextpage3(){
  $.ajax({
      url: "page3.php",
      data:"",
      success: function(result){
        $("#showpage").html(result);
    }});
}
</script>
<script type="text/javascript">
$(window).on('load', function(){
setTimeout(removeLoader, 1500); //wait for page load PLUS two seconds.
});
function removeLoader(){
  $( "#loadingDiv" ).fadeOut(500, function() {
    // fadeOut complete. Remove the loading div
    $( "#loadingDiv" ).remove(); //makes page more lightweight
});
}
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
