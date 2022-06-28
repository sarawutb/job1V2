<?php
session_start();
$_SESSION['page'] = 2;
header("Access-Control-Allow-Origin: *");
include_once '../config/database.php';
include_once '../class/controller.php';
$database = new Database();
$db = $database->getConnection();
$items = new Employee($db);
$date = explode("-", date('d-m-Y'));
$date_now = $date[0] . "-" . $date[1] . "-" . $date[2] + 543;

if (isset($_POST['search'])) {
  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $stmt = $items->getListDataPage2Search($date_start, $date_end);
  $date = explode("-", $_POST['date_start']);
  $date_start = $date[2] . "-" . $date[1] . "-" . $date[0] + 543;
  $date = explode("-", $_POST['date_end']);
  $date_end = $date[2] . "-" . $date[1] . "-" . $date[0] + 543;
} else {
  $stmt = $items->getListDataPage2(date('Y-m-d'));
}
?>
<div class="container-fulid">
  <div class="card-body">
    <h3>ประวัติทำรายการ</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="form-inline">
          <input style="width:200px;" class="form-control mr-2" type="text" id="datepicker" value="<?php if (isset($_POST['search'])) {
                                                                                                                        echo $date_start;
                                                                                                                      } else {
                                                                                                                        echo $date_now;
                                                                                                                      } ?>">
          <label>ถึง</label>
          <input style="width:200px;" class="form-control ml-2" type="text" id="datepicker1" value="<?php if (isset($_POST['search'])) {
                                                                                                                      echo $date_end;
                                                                                                                    } else {
                                                                                                                      echo $date_now;
                                                                                                                    } ?>">
          <button class="btn btn-primary ml-2" name="search" onclick="search_submit()">ค้นหา</button>
        </div>
      </div>
      <div class="col-md-6">
        <input style="float:right;width:250px;" type="text" id="search" class="form-control mb-2" placeholder="ค้นหา...">
      </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (ไทย)</th>
          <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (อังกฤษ)</th>
          <th scope="col">วัน/เดือน/ปี</th>
          <th scope="col">เวลา</th>
          <th scope="col">สถานะ</th>
          <!-- <th scope="col">ตัวจัดการ</th> -->
        </tr>
      </thead>
      <tbody id="table">
        <?php
        $number = 1;
        //for ($i=0; $i < 50; $i++) {
        // $result = pg_query($conn, "SELECT * FROM cen_form1
        //                       INNER JOIN cen_title_name on cen_form1.title1_th = cen_title_name.id
        //                       INNER JOIN cen_status on cen_form1.status = cen_status.id_status
        //                       WHERE cen_form1.status = 2");
        // while ($row = pg_fetch_assoc($result)) {
        //   $date_sql = explode("-", $row['date']);
        //   $day = $date_sql[2];
        //   $month = $date_sql[1];
        //   $year = $date_sql[0] + 543;
        //   $time = explode(".", $row['time']);
        //   $date = $day . "/" . $month . "/" . $year;
        $data = json_decode($stmt);
        foreach ($data->data as $row) {
          $date_sql = explode("-", $row->date);
          $day = $date_sql[2];
          $month = $date_sql[1];
          $year = $date_sql[0] + 543;
          $time = explode(".", $row->time);
          $date = $day . "/" . $month . "/" . $year;    
        ?>
          <tr>
          <th scope="row"><?= $number++ ?></th>
            <td><?= $row->title_name_th . $row->name1_th . " " . $row->lname1_th ?></td>
            <td><?= $row->title_name_en . " " . $row->name1_en . " " . $row->lname1_en ?></td>
            <td><?= $date ?></td>
            <td><?= $time[0] ?></td>
            <td>
              <!-- Example single danger button -->
              <div class="btn-group">
              <!-- <span class="badge badge-pill badge-<?= $row->color_status ?>"><?= $row->name_status ?></span> -->
                <button type="button" class="btn btn-<?= $row->color_status ?>">
                  <?= $row->name_status ?>
                </button>
              </div>
            </td>
            <!-- <td>
              <button type="button" class="btn btn-danger"><i style="font-size:24px" class="fa">&#xf1f8;</i></button>
            </td> -->
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  var $rows = $('#table tr');
  $('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

    $rows.show().filter(function() {
      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
      return !~text.indexOf(val);
    }).hide();
  });
</script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker-thai.js"></script>
<script src="js/locales/bootstrap-datepicker.th.js"></script>

<script type="text/javascript">
  // function demo() {
  $('#datepicker').datepicker({
    language: 'th-th',
    format: 'dd-mm-yyyy',
    autoclose: true
  });
  $('#datepicker1').datepicker({
    language: 'th-th',
    format: 'dd-mm-yyyy',
    autoclose: true
  });
  </script>

<script>
  function search_submit() {
    var date_start = document.getElementById('datepicker').value;
    var date_end = document.getElementById('datepicker1').value;

    const myArray1 = date_start.split("-");
    var date_start = (myArray1[2] - 543) + "-" + myArray1[1] + "-" + myArray1[0];

    const myArray2 = date_end.split("-");
    var date_end = (myArray2[2] - 543) + "-" + myArray2[1] + "-" + myArray2[0];


    let timerInterval
    Swal.fire({
      title: 'กำลังโหลดข้อมูล',
      // html: 'I will close in <b></b> milliseconds.',
      timer: 500,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        // console.log('I was closed by the timer')
        $.ajax({
          url: "page2.php",
          type: "POST",
          data: "date_start=" + date_start + "&date_end=" + date_end + "&search=search",
          success: function(result) {
            $("#show").html(result);
            // location.href = "../manager/";
            // element1.classList.add('active');
            // element2.classList.remove('active');
          }
        });
      }
    })

  }
</script>

</html>
