<?php include('../ui/header_admin.php'); ?>
<?php
$userid = $_GET['userid'];
?>
<div id="show">

</div>
<?php include('../ui/footer_admin.php'); ?>


<script type="text/javascript">
  var action_page = 1;
  var element = document.getElementById('page_1');
  $.ajax({
    url: "page" + action_page + ".php?",
    data: "userid=<?= $userid ?>",
    success: function(result) {
      $("#show").html(result);
      element.classList.add('active');
    }
  });

  function page1() {
    var element1 = document.getElementById('page_1');
    var element2 = document.getElementById('page_2');
    $.ajax({
      url: "../info/session.php",
      type: "POST",
      data: "page=1",
      success: function(result) {
        $("#show").html(result);
        location.href = "../manager/";
        element1.classList.add('active');
        element2.classList.remove('active');
      }
    });
  }

  function page2() {
    var element1 = document.getElementById('page_1');
    var element2 = document.getElementById('page_2');
    $.ajax({
      url: "../info/session.php",
      type: "POST",
      data: "page=2",
      success: function(result) {
        location.href = "../manager/";
        element2.classList.add('active');
        element1.classList.remove('active');
      }
    });
  }
</script>
<!-- <script type="text/javascript" src="../js/script.js"></script> -->