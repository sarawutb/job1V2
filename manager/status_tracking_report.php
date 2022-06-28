<!-- Main Content -->

<?php
include "function.php";
?>

<script type='text/javascript'>
  //<![CDATA[
  $(function() {
    function openPrintWindow(url, name, specs) {
      var printWindow = window.open(url, name, specs);
      var printAndClose = function() {
        if (printWindow.document.readyState == 'complete') {
          clearInterval(sched);
          printWindow.print();
          printWindow.close();

        }
      }
      var sched = setInterval(printAndClose, 200);
    };
    jQuery(document).ready(function($) {
      $(".test").on("click", function(e) {

        var myUrl = $(this).attr('data-url');
        // alert(myUrl);
        e.preventDefault();
        openPrintWindow(myUrl, "to_print", "width=700,height=400,_blank");
      });
    });

  }); //]]>
</script>
<div class="main-content">
  <section class="section">
    <!-- <div class="section-header">
      <h5 style="color: #000">รายงานติดตามสถานะการจัด-จ่ายสินค้า
      </h5>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">รายงานติดตามสถานะการจัด-จ่ายสินค้า</a></div>
      </div>
    </div> -->
    <div class="card chat-box card-info">
      <!-- <div class="card-header">
        <h4><i class="fas fa-circle text-info mr-2" title="Online" data-toggle="tooltip"></i> รายงานติดตามสถานะการจัด-จ่ายสินค้า</h4>
      </div> -->
      <div class="card-body">

        <?php
        $date1 = date('d-m-Y');
        $dateArrr1 = explode('-', $date1);
        $date_1 = ($dateArrr1[0]) . '/' . $dateArrr1[1] . '/' . ($dateArrr1[2] + 543);
        ?>
        <?php
        $code_branch = $this->session->userdata['branch_code'];
        // echo $aa;
        // echo $this->session->userdata['is_add'];
        // echo $this->session->userdata['is_display'];
        // echo $this->session->userdata['menuid'];
        ?> <?php

            if (isset($_POST['submit'])) {
              if (empty($get_search)) { ?> <div class="col-xs-12">
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> ไม่พบข้อมูล
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            </div>
        <?php }
            } ?>
        <form action="<?php echo base_url('Delivery_report/status_tracking_report') ?>" method="post" enctype="multipart/form-data">
          <div class="row ">
            <div class="col-xl-2 col-lg-4 col-md-6 col-12">
              <label for="text">วันที่ </label>
              <input type="text" name="date_start" id="datepicker" class="form-control form-control-sm" value="<?php if(!empty($date_start)){echo $date_start;}else{echo $date_1;}?>" required />
              <!-- <input class="form-control" type="date" name="date_start" required value="<?php echo date('Y-m-d') ?>"> -->
              <div class="invalid-feedback">
                วันที่
              </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 col-12">
              <label for="text">ถึงวันที่วันที่ </label>
              <input type="text" name="date_end" id="datepicker1" class="form-control form-control-sm" value="<?php if(!empty($date_end)){echo $date_end;}else{echo $date_1;}?>" required />
              <!-- <input class="form-control" type="date" name="date_end" required value="<?php echo date('Y-m-d') ?>"> -->
              <div class="invalid-feedback">
                ถึงวันที่วันที่
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <label for="text">ที่เก็บสินค้า</label><?php
                if(!empty($shelf_code)){
                  // print_r($shelf_code);
                 // foreach ($shelf_code as $val_shelf_code) {
                 // //if($val_shelf_code->code == $r3->shelf_code){
                 //   // print_r($shelf_code);
                 // //}
                 //  }
                }
              ?>
              <select name="shelf_code[]" class="form-control" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                <?php
                $query1 = $this->db->query("SELECT DISTINCT a.shelf_code ,
(SELECT DISTINCT s.name_1 FROM ic_shelf s WHERE s.code = a.shelf_code LIMIT 1 ) AS name_1
FROM siri_wms_user_map a
LEFT JOIN ic_shelf s on a.shelf_code = s.code
where a.wh_code='$code_branch' ORDER BY a.shelf_code");
                foreach ($query1->result() as $r3) {  ?>
                  <!-- เลือกเวลาค้นหา -->
                  <!-- <option
                  <?php
                    if(!empty($shelf_code)){
                      if($shelf_code == 'all'){
                        echo "selected";
                      }else{
                        foreach ($shelf_code as $val_shelf_code) {
                          if($val_shelf_code->code == $r3->shelf_code){
                          echo "selected";
                           }
                         }
                      }

                    }
                  ?>  value="<?php echo $r3->shelf_code; ?>"><?php echo $r3->shelf_code; ?>,<?php echo $r3->name_1; ?></option> -->
                <option value="<?php echo $r3->shelf_code; ?>"><?php echo $r3->shelf_code; ?>,<?php echo $r3->name_1; ?></option>
                <?php  }  ?>
              </select>
              <!-- <label for="text">คลังสินค้า </label> -->
              <input class="form-control form-control-sm" hidden type="text" name="wh_code" value="<?php echo $code_branch  ?>" readonly>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 col-12">
              <label for="text">สถานะใบจัด </label>
              <select name="status_doc[]" class="form-control " multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="5" onchange="console.log(this.selectedOptions)">
                <option value="รอจัด">รอจัด</option>
                <option value="กำลังจัด">กำลังจัด</option>
                <option value="จัดเสร็จ รอจ่าย">จัดเสร็จ รอจ่าย</option>
                <!-- <option value="จ่ายสินค้าแล้ว">จ่ายสินค้าแล้ว</option> -->
                <!-- <option value="ปิดใบจัด">ปิดใบจัด</option> -->
              </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 col-12">
              <label class="d-block">ประเภทการส่ง</label>
              <input class="form-check-input" type="radio" name="send_type" value="" id="exampleRadios1" checked>
              <label class="form-check-label" for="exampleRadios1">
                <small>ทั้งหมด</small>
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="form-check-input" type="radio" name="send_type" value="1" id="exampleRadios2">
              <label class="form-check-label" for="exampleRadios2">
                <small>รับเอง</small>
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!-- <div class="form-check"> -->
              <input class="form-check-input" type="radio" name="send_type" value="2" id="exampleRadios3">
              <label class="form-check-label" for="exampleRadios3">
                <small>ส่งให้</small>
              </label>
              <!-- </div> -->
            </div>
            <div class="col-xl-1 col-lg-4 col-md-6 col-12">
              <a onClick="window.location.reload();" class="btn btn-sm" data-toggle="tooltip" title="รีเฟรช">
                <i style="font-size:24px" class="fa">&#xf021;</i>
              </a>
            </div>
          </div>
          <div class="row mb-4">
            <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <label for="text">สาขา </label>
              <input class="form-control" type="text" name="code_branch" value="<?php echo $code_branch  ?>" readonly>
            </div> -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <!-- <select class="form-control select2" name="shelf_code[]" multiple="multiple">
                <option disabled="" value="">เลือก</option>
                <?php
                $query1 = $this->db->query("SELECT * from ic_shelf where whcode = '$code_branch' ORDER BY code");
                foreach ($query1->result() as $r3) {
                ?>
                  <option value="<?php echo $r3->code; ?>"><?php echo $r3->code; ?>,<?php echo $r3->name_1; ?></option>
                <?php
                }
                ?>
              </select> -->
            </div>
            <div class=" col-xl-4 col-lg-4 col-md-6 col-12">
              <!-- <select class="form-control select2" name="status_doc[]" multiple="multiple"> -->
            </div>
            <!-- <div class=" col-xl-4 col-lg-4 col-md-6 col-12">
              <label class="d-block">ประเภทการส่ง</label>
              <input class="form-check-input" type="radio" name="send_type" value="" id="exampleRadios1" checked>
              <label class="form-check-label" for="exampleRadios1">
                ทั้งหมด
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="form-check-input" type="radio" name="send_type" value="1" id="exampleRadios2">
              <label class="form-check-label" for="exampleRadios2">
                รับเอง
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check">
              <input class="form-check-input" type="radio" name="send_type" value="2" id="exampleRadios3">
              <label class="form-check-label" for="exampleRadios3">
                ส่งให้
              </label>
              </div>
            </div> -->
          </div>
          <div class="row ">
            <div class="col-xl-1 col-lg-4 col-mx-6 col-12">
              <button class="btn btn-dark block " type="submit" name="submit"> <i class="fas fa-search"></i> ค้นหา</button>
            </div>
            <?php
            if (!empty($get_search)) {
            ?>
              <div class="col-xl-4 col-lg-4 col-mx-6 col-12">
                <b>&nbsp; &nbsp; จากวันที่ :
                  <code><?php echo $date_start; ?></code> &nbsp; ถึงวันที่ &nbsp; <code><?php echo $date_end; ?></code>
                </b>
              </div>
              <div class="col-xl-3 col-lg-4 col-mx-6 col-12">
                <b> &nbsp; &nbsp; สถานะใบจัด :
                  <code>
                    <?php if ($status_1 == 'all') { ?>
                      ทั้งหมด
                    <?php } else {
                    ?>
                      <?php echo $status_1 . "," ?>
                    <?php
                    } ?>
                  </code>
                </b>
              </div>
              <div class="col-xl-2 col-lg-4 col-mx-6 col-12">
                <b> ประเภทการส่ง :
                  <code>
                    <?php if ($send_type == '1') { ?>
                      รับเอง
                    <?php } else  if ($send_type == '2') {
                    ?>
                      ส่งให้
                    <?php } else { ?>
                      ทั้งหมด
                    <?php }  ?>
                  </code>
                </b>
              </div>

          </div>
        </form>
        <div class="row ">
          <div class="col-xl-1 col-lg-4 col-mx-6 col-12">
          </div>
          <div class="col-xl-11 col-lg-4 col-mx-6 col-12">
            <b>&nbsp; &nbsp; ที่เก็บสินค้า :
              <code>
                <?php if ($shelf_code == 'all') { ?>
                  ทั้งหมด
                  <?php } else {
                  foreach ($shelf_code as $sh) { ?>
                    <?php echo $sh->code . ' ~ ' . $sh->name_1 . "," ?>
                <?php }
                } ?>
              </code>
            </b>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>

    <?php
    if (!empty($get_search)) {
    ?>
      <div class="card card-success">
        <div class="card-body">
          <div class="row">
            <div class="table-responsive ">
              <table class="table table-striped dataTable" id="table1">
                <thead>
                  <tr>
                    <th class="text-nowrap text-center">ลำดับที่ </th>
                    <th class="text-nowrap text-center">วันที่เอกสาร </th>
                    <th class="text-nowrap text-center">เวลาเอกสาร </th>
                    <th class="text-nowrap text-center">ลำดับเอกสาร </th>
                    <th class="text-nowrap text-center">รหัสลูกค้า</th>
                    <th class="text-nowrap text-center">ชื่อลูกค้า</th>
                    <th class="text-nowrap text-center">สถานะใบจัด</th>
                    <th class="text-nowrap text-center">ผู้ทำรายการ</th>
                    <th class="text-nowrap text-center">ประเภทการส่ง </th>
                    <th class="text-nowrap text-center">ลำดับสินค้า </th>
                    <th class="text-nowrap text-center">รหัสสินค้า </th>
                    <th class="text-nowrap text-center">ชื่อสินค้า </th>
                    <!-- <th class="text-nowrap text-center">สาขา </th> -->
                    <th class="text-nowrap text-center">คลัง </th>
                    <th class="text-nowrap text-center">ที่เก็บ </th>
                    <th class="text-nowrap text-center">จำนวนที่ขาย </th>
                    <th class="text-nowrap text-center">จำนวนจัดได้ </th>
                    <th class="text-nowrap text-center">จำนวนจ่าย </th>
                    <th class="text-nowrap text-center">ค้างจ่าย </th>
                    <th class="text-nowrap text-center">หน่วยนับ </th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($get_search)) {
                    $i = 1;
                    foreach ($get_search as $row1) {
                      $line = $row1->line_number + 1;
                      $id = $row1->doc_no;
                  ?>
                      <tr>
                        <td class="text-center text-nowrap"><?php echo $i++; ?></td>
                        <td class="text-nowrap"><?php echo $row1->doc_datee; ?> </td>
						<!--ของเดิม <td class="text-nowrap"><?php echo thaiDate($row1->doc_datee) ?> </td> -->
                        <td class="text-nowrap"> <?php echo $row1->doc_timee; ?></td>
                        <td class="text-nowrap">
                          <?php if ($row1->status == 'จัดเสร็จ รอจ่าย') {  ?>
                            <a href="" data-toggle="modal" data-target="#exampleModal<?php echo $id; ?>"><?php echo $row1->doc_no; ?></a>
                          <?php } else { ?>
                            <?php echo $row1->doc_no; ?>
                          <?php } ?>
                        </td>
                        <td class="text-nowrap"><?php echo $row1->cust_code ?> </td>
                        <td class="text-nowrap"><?php echo $row1->name_1; ?> </td>
                        <td class=" text-center">
                          <?php if ($row1->status == 'รอจัด') { ?>
                            <span class="badge badge-danger">รอจัด</span>
                          <?php } else if ($row1->status == 'กำลังจัด') {  ?>
                            <span class="badge badge-warning">กำลังจัด</span>
                          <?php } else if ($row1->status == 'จัดเสร็จ รอจ่าย') {  ?>
                            <span class="badge badge-success mb-1">จัดเสร็จ รอจ่าย</span>
                            <!-- <a class="test btn-sm btn-dark btn" href="javascript:;" data-url="<?php echo base_url('Delivery_report/prints/' . $id); ?>"><i class="fas fa-print"></i></a>
                            <a href="<?php echo base_url('Delivery_report/prints/' . $id); ?>" onclick="window.open(this.href).print(); return false">​​​​​​​​​​​​​​​​​print</a>
                            <a href="javascript: w=window.open('<?php echo base_url('http://localhost/wms/Delivery_report/prints/' . $id); ?>'); w.window.print(); w.close(); ">​​​​​​​​​​​​​​​​​print pdf</a> -->
                            <a href="<?php echo base_url('Delivery_report/prints/' . $id); ?>" target="_blank" class=" btn-sm btn-dark btn"> <i class="fas fa-print"></i> </a>
                          <?php } ?>
                        </td>
                        <td class=" text-nowrap">
                          <?php if ($row1->status == 'กำลังจัด') {  ?>
                            <p><?php echo $row1->name_user_create ?></p>
                          <?php } else if ($row1->status == 'จัดเสร็จ รอจ่าย') {  ?>
                            <p><?php echo $row1->name_user_create ?></p>
                          <?php } else if ($row1->status == 'จ่ายสินค้าแล้ว') {  ?>
                            <p><?php echo $row1->user_name_pay ?></p>
                            <!-- <p><?php echo $row1->user_name_pay ?></p> -->
                          <?php } ?>
                        </td>
                        <!-- <td class=" text-center"><?php if ($row1->status == 1) { ?>
                            <span class="badge badge-danger">รอจัด</span>
                          <?php } else if ($row1->status == 2) {  ?>
                            <span class="badge badge-warning">กำลังจัด</span>
                            <p><?php echo $row1->name_user_create ?></p>
                          <?php } else if ($row1->status == 3) {  ?>
                            <span class="badge badge-success">จัดเสร็จ รอจ่าย</span>
                            <p><?php echo $row1->name_user_create ?></p>
                          <?php } else if ($row1->status == 4) {  ?>
                            <span class="badge badge-primary">จ่ายสินค้า </span>
                            <p><?php echo $row1->user_name_pay ?></p>
                          <?php } ?>
                        </td> -->
                        <td class=" "><?php if ($row1->send_type == 1) { ?>
                            <font color="red"> รับเอง</font>
                          <?php } else if ($row1->send_type == 2) {  ?>
                            ส่งให้
                          <?php } ?>
                        </td>
                        <td class="text-center text-nowrap"><?php echo $line ?> </td>
                        <td class=" text-nowrap"><?php echo $row1->ic_code; ?></td>
                        <td class="text-nowrap"><?php echo $row1->item_name; ?></td>
                        <!-- <td class="text-center"><?php echo $row1->branch_code; ?> ~ <?php echo $row1->name_br; ?></td> -->
                        <td class=" text-nowrap"><?php echo $row1->wh_code; ?> ~ <?php echo $row1->name_wa; ?></td>
                        <td class=" text-nowrap"><?php echo $row1->shelf_code; ?> ~ <?php echo $row1->name_se; ?></td>
                        <td class="text-right text-nowrap"><?php echo number_format($row1->qty, 2, '.', ','); ?> </td>
                        <td class="text-right text-nowrap"><?php echo number_format($row1->event_qty, 2, '.', ','); ?> </td>
                        <td class="text-right text-nowrap"><?php echo number_format($row1->pay_qty, 2, '.', ','); ?> </td>
                        <td class="text-right"><?php echo number_format($row1->diff_pay, 2, '.', ','); ?> </td>
                        <td class="text-nowrap"><?php echo $row1->unit_code; ?> ~ <?php echo $row1->name_unit; ?></td>

                      </tr>
                  <?php }
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <?php
    } ?>
  </section>
</div>

<?php
if (!empty($get_search)) {
  $i = 0;
  foreach ($get_search as $row) : $i++

?>
    <div class="modal fade" id="exampleModal<?php echo $row->doc_no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ภาพจ่ายสินค้า ลูกค้า : <code><?php echo $row->cust_code ?> ~ <?php echo $row->name_1; ?></code>
              <br> เลขที่เอกสาร : <code> <?php echo $row->doc_no ?></code>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="row">

              <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h6> รูปภาพจัดเสร็จรอจ่าย</h6>
                  </div>
                  <div class="gallery gallery-fw" data-item-height="200" data-width="200">
                    <?php
                    $query = $this->db->query("SELECT flag,image_path,doc_no,TO_CHAR(create_date_time_now, 'YYYY-MM-DD HH24:MI:SS ') as create_date_time_now FROM siri_wms_images_path WHERE doc_no = '$row->doc_no'");
                    foreach ($query->result() as $r) {
                    ?>
                      <?php if ($r->flag == 1) { ?>
                        <label for=""> วันที่ <code><?php echo $r->create_date_time_now ?></code></label>
                        <div class="gallery-item" data-image="<?php echo $r->image_path ?>" data-title="<?php echo $r->doc_no ?>" data-dismiss="modal"></div>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h6>
                      รูปภาพจ่ายสินค้า
                    </h6>
                  </div>
                  <div class="gallery gallery-fw" data-item-height="200" data-width="200">
                    <?php
                    $query1 = $this->db->query("SELECT flag,image_path,doc_no,TO_CHAR(create_date_time_now, 'YYYY-MM-DD HH24:MI:SS ') as create_date_time_now FROM siri_wms_images_path WHERE doc_no = '$row->doc_no'");
                    foreach ($query1->result() as $r1) {
                    ?>
                      <?php if ($r1->flag == 3) { ?>
                        <label for=""> วันที่ <code><?php echo $r1->create_date_time_now ?></code></label>
                        <div class="gallery-item" data-image="<?php echo $r1->image_path ?>" data-title="<?php echo $r1->doc_no ?>" data-dismiss="modal"></div>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card">
                  <div class="card-header">
                    <h6>
                      ลายเซ็นลูกค้า
                    </h6>
                  </div>
                  <div class="gallery gallery-fw" data-item-height="200" data-width="200">
                    <?php
                    $query2 = $this->db->query("SELECT flag,image_path,doc_no,TO_CHAR(create_date_time_now, 'YYYY-MM-DD HH24:MI:SS ') as create_date_time_now FROM siri_wms_images_path WHERE doc_no = '$row->doc_no'");
                    foreach ($query2->result() as $r2) {
                    ?>
                      <?php if ($r2->flag == 4) { ?>
                        <label for=""> วันที่ <code><?php echo $r2->create_date_time_now ?></code></label>
                        <div class="gallery-item" data-image="<?php echo $r2->image_path ?>" data-title="<?php echo $r2->doc_no ?>" data-dismiss="modal"></div>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">ออก</button>

          </div>

        </div>
      </div>
    </div>
  <?php endforeach  ?>
<?php } ?>
<style>
  #counter0 {
    border-width: 0px;
    border: none;
  }
</style>

<style type="text/css" media="print">
  td.a {
    font-size: 5px;
  }

  table.dataTable thead .sorting,
  table.dataTable thead .sorting_asc,
  table.dataTable thead .sorting_desc {
    background: none;
  }

  /* table.dataTable td {
    padding: 10px;
  } */
</style>

<?php $this->load->view('dist/_partials/footer'); ?>


<script type='text/javascript'>
  $(function() {
    $("#datepicker").datepicker({
      language: 'th-th',
      format: 'dd/mm/yyyy',
      autoclose: true
    })
  });
  $(function() {
    $("#datepicker1").datepicker({
      language: 'th-th',
      format: 'dd/mm/yyyy',
      autoclose: true
    })
  });
  // $(document).ready(function() {
  //   $('.datepicker').datepicker({
  //     format: 'dd/mm/yyyy',
  //     todayBtn: true,
  //     language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
  //     thaiyear: true //Set เป็นปี พ.ศ.
  //   }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน
  // });
  // setTimeout(function() {
  //   window.location.reload(1);
  // }, 5000);
</script>
<script type="text/javascript">
  $("#swal1").click(function() {
    swal({
      timer: '2500',
      icon: 'warning',
      title: 'กรุณาค้นหาเอกสารก่อน!',
      text: 'WMS HOME ONE!',

    })
  });

  function textCounter0(field, field2, maxlimit) {
    var countfield = document.getElementById(field2);
    if (field.value.length > maxlimit) {
      field.value = field.value.substring(0, maxlimit);
      return false;
    } else {
      countfield.value = maxlimit - field.value.length;
    }
  }

  <?php if ($this->session->flashdata('success')) { ?>
    iziToast.success({
      title: 'Success!',
      message: 'ปิดใบจัด สำเร็จ!.',
      position: 'topRight'
    });
  <?php } ?>
  <?php if ($this->session->flashdata('delete')) { ?>
    iziToast.success({
      title: 'Success!',
      message: 'ลบข้อมุล สำเร็จ!.',
      position: 'topRight'
    });
  <?php } ?>
  <?php if ($this->session->flashdata('warning')) { ?>
    swal({
      timer: '3000',
      icon: 'warning',
      title: 'ปิดใบจัด ไม่สำเร็จ!',
      text: 'กรุณาลองใหม่',
      // footer: '<a href="">Why do I have this issue?</a>'
    })
  <?php } ?>
</script>
<script>
  $("#toastr-e").click(function() {
    iziToast.error({
      title: 'Hello, world!',
      message: 'This awesome plugin is made by iziToast',
      position: 'topRight'
    });
  });
</script>
<style>
  tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
  }
</style>
<script type="text/javascript">
  $("#swal").click(function() {
    swal({
      timer: '2500',
      icon: 'success',
      title: 'เข้าสู่ระบบสำเร็จ!',
      text: 'WMS HOME ONE!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
  });

  $(document).ready(function() {
    $('#table1 tfoot td').each(function() {
      var title = $(this).text();
      $(this).html('<input type="text" placeholder="ค้นหา ' + title + '" />');
    });

    var table = $("#table1").DataTable({
      scrollY: "500px",
      scrollX: true,
      scrollCollapse: true,
      paging: true,
      fixedColumns: {
        left: 1,
        right: 1
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'excelHtml5',
          title: 'รายงานติดตามสถานะการจัด-จ่ายสินค้า',
          text: '<em>E</em>xcel',
          key: {
            key: 'p',
            altkey: true
          },
          className: "btn btn-primary btn-sm",
          key: {
            key: 'p',
            altkey: true
          }
        },
        {
          extend: 'print',
          title: 'รายงานติดตามสถานะการจัด-จ่ายสินค้า',
          className: "btn btn-dark btn-sm"
        },

      ],
      "columnDefs": [{
        "targets": '_all',
        "createdCell": function(td, cellData, rowData, row, col) {
          $(td).css('padding', '10px')
        }
      }],
      "pageLength": 20,
      "language": {
        "decimal": "",
        "emptyTable": "ไม่มีรายการข้อมูล",
        "info": "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "infoEmpty": "ไม่มีรายการข้อมูล",
        "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "แสดง  _MENU_ รายการ",
        "loadingRecords": "กำลังโหลดข้อมูล...",
        "processing": "กำลังประมวลผล...",
        "search": "ค้นหา:",
        "zeroRecords": "ไม่พบรายการที่ค้นหา",
        "paginate": {
          "first": "หน้าแรก",
          "last": "หน้าสุดท้าย",
          "next": "ถัดไป",
          "previous": "ก่อนหน้า"
        },
        "aria": {
          "sortAscending": ": เรียงข้อมูลจากน้อยไปมาก",
          "sortDescending": ": เรียงข้อมูลจากมากไปน้อย"
        }
      },

      // initComplete: function() {
      //   // Apply the search
      //   this.api().columns().every(function() {
      //     var that = this;

      //     $('input', this.footer()).on('keyup change clear', function() {
      //       if (that.search() !== this.value) {
      //         that
      //           .search(this.value)
      //           .draw();
      //       }
      //     });
      //   });
      // }


    });
  });
</script>
