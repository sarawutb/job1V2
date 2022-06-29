<?php
session_start();
$_SESSION['page'] = 1;
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
  $stmt = $items->getListDataPage1Search($date_start, $date_end);
  $date = explode("-", $_POST['date_start']);
  $date_start = $date[2] . "-" . $date[1] . "-" . $date[0] + 543;
  $date = explode("-", $_POST['date_end']);
  $date_end = $date[2] . "-" . $date[1] . "-" . $date[0] + 543;
} else {
  $stmt = $items->getListDataPage1(date('Y-m-d'));
}

$data = json_decode($stmt);

?>
<div class="container-fulid" id="show">
  <div class="card-body">
    <h3>ตรวจสอบแบบฟอร์มยื่นคำร้อง</h3>
    <div class="row">
      <!-- <form action="/" method="POST" aria-multiline="true"> -->
      <div class="col-md-6">
        <div class="form-inline">
          <input style="width:200px;" class="form-control mr-2" name="date_start" id="datepicker" type="text" value="<?php if (isset($_POST['search'])) {
                                                                                                                        echo $date_start;
                                                                                                                      } else {
                                                                                                                        echo $date_now;
                                                                                                                      } ?>">
          <label>ถึง</label>
          <input style="width:200px;" class="form-control ml-2" name="date_end" id="datepicker1" type="text" value="<?php if (isset($_POST['search'])) {
                                                                                                                      echo $date_end;
                                                                                                                    } else {
                                                                                                                      echo $date_now;
                                                                                                                    } ?>">
          <button class="btn btn-primary ml-2" name="search" onclick="search_submit()">ค้นหา</button>
        </div>
      </div>
      <!-- </form> -->
      <div class="col-md-6">
        <input style="float:right;width:250px;" type="text" onchange="search_input()" class="form-control mb-2" placeholder="ค้นหา...">
      </div>
    </div>
    <table class="table table-bordered" style="height:500px" id="table">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (ไทย)</th>
          <th scope="col">ชื่อ-นามสกุลเจ้าของข้อมูล (อังกฤษ)</th>
          <th scope="col">อีเมล</th>
          <th scope="col">เบอร์โทรศัพท์</th>
          <th scope="col">วัน/เดือน/ปี</th>
          <th scope="col">เวลา</th>
          <th scope="col">สถานะ</th>
          <th scope="col">ตัวจัดการ</th>
        </tr>
      </thead>
      <tbody id="table">
        <?php
        $number = 1;
        // //for ($i=0; $i < 50; $i++) {
        // $result = pg_query($conn, "SELECT * FROM cen_form1
        //                       INNER JOIN cen_title_name on cen_form1.title1_th = cen_title_name.id
        //                       INNER JOIN cen_status on cen_form1.status = cen_status.id_status
        //                       WHERE cen_form1.status != 2");
        // while ($row = pg_fetch_assoc($result)) {
        //   $date_sql = explode("-", $row['date']);
        //   $day = $date_sql[2];
        //   $month = $date_sql[1];
        //   $year = $date_sql[0] + 543;
        //   $time = explode(".", $row['time']);
        //   $date = $day . "/" . $month . "/" . $year;


        // print_r($data);
        if (!empty($data->data)) {
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
              <td><?= $row->email1 ?></td>
              <td><?= $row->phone1 ?></td>
              <td><?= $date ?></td>
              <td><?= $time[0] ?></td>
              <td>
                <!-- Example single danger button -->
                <div class="btn-group">
                  <button type="button" class="btn btn-<?= $row->color_status ?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $row->name_status ?>
                  </button>
                  <div class="dropdown-menu">
                    <?php
                    $result1 = pg_query("SELECT * FROM cen_status");
                    $test = pg_fetch_all($result1);
                    foreach ($test as $row1) {
                    ?>
                      <a class="dropdown-item" href="#"><?= $row1['name_status'] ?></a>
                    <?php } //} 
                    ?>
                  </div>
                </div>
              </td>
              <td>
                <button type="button" class="btn btn-info">ตรวจสอบ</button>
                <a href="../edit/?userid=<?= $row->id_cen_form1 ?>"><button type="button" class="btn btn-warning"><i style="font-size:24px" class="fa">&#xf040;</i></button></a>
                <button type="button" class="btn btn-danger"><i style="font-size:24px" class="fa">&#xf1f8;</i></button>
              </td>
            </tr>
            <tr id="search_false" hidden>
              <th colspan="9">
                <center>
                  ไม่พบข้อมูล
                </center>
              </th>
            </tr>
          <?php
          }
        } else {
          ?>
          <th colspan="9">
            <center>
              ไม่พบข้อมูล
            </center>
          </th>
        <?php
        }
        ?>
      </tbody>
    </table>
    <?php if (!empty($data->data)) { ?>
      <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item">
            <a class="page-link" href="#">ย้อนกลับ</a>
          </li>
          <?php
          $count = round(count($data->data) / 2);
          for ($i = 1; $i <= $count; $i++) {
          ?>
            <li class="page-item"><a class="page-link" href="#"><?= $i; ?></a></li>
          <?php } ?>
          <li class="page-item">
            <a class="page-link" href="#">ถัดไป</a>
          </li>
        </ul>
      </nav> -->
    <?php } ?>
  </div>
</div>
<!-- Bootstrap core JS-->
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  function search_fail() {
    document.getElementById("search_false").hidden = false;
  }
  var $rows = $('#table tr');

  function search_input() {
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
          // b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        // console.log('I was closed by the timer')
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          console.log($rows.show());
          return !~text.indexOf(val);
        }).hide();
      }
    })
  };
</script>

<script src="https://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
<script src="https://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>

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

  // }
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
          // b.textContent = Swal.getTimerLeft()
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
          url: "page1.php",
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

<script>
  $(function() {
    $('table#table').each(function() {
      var currentPage = 0;
      var numPerPage = 9;
      var $table = $(this);
      $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
      });
      $table.trigger('repaginate');
      var numRows = $table.find('tbody tr').length;
      var numPages = Math.ceil(numRows / numPerPage);
      var $pager = $('<ul class="pagination justify-content-end"></ul>');
      var $previous = $('<li class="page-item"><a class="page-link" href="#">ย้อนกลับ</a></li>');
      var $next = $('<li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>');
      for (var page = 0; page < numPages; page++) {
        $('<a class="page-item page-link" href="#"></a>').text(page + 1).bind('click', {
          newPage: page
        }, function(event) {
          currentPage = event.data['newPage'];
          $table.trigger('repaginate');
          $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
      }
      $pager.insertAfter($table).find('a.page-item:first').addClass('active');
      $previous.insertBefore('a.page-item:first');
      $next.insertAfter('a.page-item:last');

      $next.click(function(e) {
        $previous.addClass('clickable');
        $pager.find('.active').next('.page-item.clickable').click();
      });
      $previous.click(function(e) {
        $next.addClass('clickable');
        $pager.find('.active').prev('.page-item.clickable').click();
      });
      $table.on('repaginate', function() {
        $next.addClass('clickable');
        $previous.addClass('clickable');

        setTimeout(function() {
          var $active = $pager.find('.page-item.active');
          if ($active.next('.page-item.clickable').length === 0) {
            $next.removeClass('clickable');
          } else if ($active.prev('.page-item.clickable').length === 0) {
            $previous.removeClass('clickable');
          }
        });
      });
      $table.trigger('repaginate');
    });
  });
</script>

</html>