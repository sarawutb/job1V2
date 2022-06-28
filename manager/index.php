<?php include('../ui/header_admin.php'); ?>
<?php 
if (empty($_SESSION['page'])) {
  $_SESSION['page'] = 1;
}
?>
<div id="show">

</div>
<?php include('../ui/footer_admin.php'); ?>
<script type="text/javascript">
  var action_page = <?=$_SESSION['page']?>;
  var element = document.getElementById('page_<?= $_SESSION['page'] ?>');
  $.ajax({
    url: "page" + action_page + ".php?",
    data: "",
    success: function(result) {
      $("#show").html(result);
      element.classList.add('active');
    }
  });

  function page1() {
    var element1 = document.getElementById('page_1');
    var element2 = document.getElementById('page_2');
    $.ajax({
      url: "page1.php?",
      data: "",
      success: function(result) {
        $("#show").html(result);
        // element1.classList.add('active');
        // element2.classList.remove('active');
      }
    });
  }

  function page2() {
    var element1 = document.getElementById('page_1');
    var element2 = document.getElementById('page_2');
    $.ajax({
      url: "page2.php?",
      data: "",
      success: function(result) {
        $("#show").html(result);
        // element2.classList.add('active');
        // element1.classList.remove('active');
      }
    });
  }
</script>