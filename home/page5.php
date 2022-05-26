  <div id="showpage">
  <form action="data_send_session.php" method="post">
    <div class="card mt-4">
      <div class="card-body">
          <h3>5. ข้อสงวนสิทธิของผู้ควบคุมข้อมูล</h3>
            <div class="form-group">
              <label for="text">&emsp;&emsp; บริษัทฯ ขอแจ้งให้ท่านทราบว่า หากเกิดกรณีดังต่อไปนี้ บริษัทฯ อาจจำเป็นต้องปฏิเสธคำร้องขอของท่าน</label>
              <ul>
                <li>ท่านไม่สามารถแสดงให้เห็นอย่างชัดเจนได้ว่าผู้ยื่นดำร้องเป็นเจ้าของข้อมูลหรือมีอำนาจในการยื่นคำร้องขอดังกล่าว</li>
                <li>บริษัทฯ ไม่มีข้อมูลส่วนบุคคลของท่าน</li>
                <li>บริษัทฯ ไม่สามารถให้ท่านเข้าถึงข้อมูล ทำสำเนา หรือ เปิดเผยการ
                    ได้มาซึ่งข้อมูลส่วนบุคคลได้ เนื่องจากเป็นการปฏิบัติตามกฎหมาย
                    หรือคำสั่งศาล และการปฏิบัติตามคำขอนั้นจะส่งผลกระทบที่อาจ
                    ก่อให้เกิดความเสียหายต่อสิทธิและเสรีภาพของบุคคลอื่น อาทิ การ
                    เปิดเผยข้อมูลนั้นเป็นการเปิดเผยข้อมูลส่วนบุคคลของบุคคลที่สาม
                    ด้วย หรือ เป็นการเปิดเผยทรัพย์สินทางปัญญา หรือ ความลับทางการ
                    ค้าของบุคคลที่สามนั้น</li>
                <li>เหตุในการปฏิเสธอีนตามที่ พ.ร.บ. คุ้มครองข้อมูลส่วนบคคล พ.ศ.
                    2562 และประกาศที่เกี่ยวข้องกำหนดไว้ และบริษัทฯ สามารถใช้
                    เหตุดังกล่าวได้ตามกฎหมาย</li>
              </ul>
              <label for="text">&emsp;&emsp; ทั้งนี้ เมื่อพิจารณาเหตุผลในการร้องขอตามสิทธิของท่านเรียบร้อยแล้ว
                  บริษัทฯ จะแจ้งผลในการพิจารณาให้ท่านทราบและดำเนินการที่เกี่ยวข้อง
                  ภายใน 30 วันนับแต่วันที่ได้รับคำร้องขอ</label>
            </div>
            <h3>6. การรับทราบและยินยอม</h3>
            <label for="text">&emsp;&emsp; ท่านเข้าใจดีว่าการตรวจสอบเพื่อยืนยันอำนาจ และตัวตน นั้นเป็นการจำเป็น
                            อย่างยิ่ง เพื่อพิจารณาดำเนินการตามสิทธิที่ท่านร้องขอ และบริษัทฯ อาจขอ
                            ข้อมูลเพิ่มเติมจากท่าน เพื่อการตรวจสอบดังกล่าวเพื่อให้การดำเนินการ
                            อนุญาตให้เข้าถึง การทำสำเนา หรือการเปิดเผยการได้มาของข้อมูลเป็นไปได้
                            อย่างถูกต้องครบถ้วนต่อไป</label>
            <center>
              <label class="mt-5">ในการนี้ ท่านจึงได้ลงนามไว้ เพื่อเป็นหลักฐาน <input onclick="check_page()" id="success_page" type="checkbox" name="remember"> ยอมรับ</label>
            </center>
        </div>
    </div>
    <div class="row mt-3 mb-5">
        <div class="col-sm-6">
            <button type="button" onclick="backpage4()" class="btn btn-secondary btn-lg btn-block">ย้อนกลับ</button>
        </div>
        <div class="col-sm-6">
            <button type="submit" name="save_data" id="btn_next_page" disabled class="btn btn-primary btn-lg btn-block">ยืนยัน</button>
        </div>
    </div>
  </form>
</div>


<script type="text/javascript">
function backpage4(){
      $.ajax({
       url: "page4.php",
       data:"",
       success: function(result){
       $("#showpage").html(result);
    }});
}
// function nextpage4(){
//   $.ajax({
//       url: "page4.php",
//       data:"",
//       success: function(result){
//       $("#showpage").html(result);
//     }});
// }
</script>
<script type="text/javascript">
function check_page() {
  var check_page = document.getElementById("success_page");
  // var btn_next_page = document.getElementById("btn_next_page");
  if(check_page.checked == true){
    document.getElementById("btn_next_page").disabled = false;
  }else{
    document.getElementById("btn_next_page").disabled = true;
  }
}
</script>
