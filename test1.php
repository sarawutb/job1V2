<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="css/style.main.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="container">
 <br>
<form id="myform1" name="form1">
<div class="form-group row">
    <label for="input_name" class="col-sm-3 col-form-label text-right">ชื่อ นามสกุล (TH)</label>
    <div class="col">
      <input type="text" class="form-control" name="input_name" id="input_name" oninput="input1()"
      value="" pattern="^[ก-๏\s]+$"  required>
      <div class="invalid-feedback">
        กรุณากรอกชื่อ นามสกุล ภาษาไทย
      </div>
    </div>
</div>
</form>
<form id="myform2" name="form1">
<div class="form-group row">
    <label for="input_name_en" class="col-sm-3 col-form-label text-right">ชื่อ นามสกุล (EN)</label>
    <div class="col">
      <input type="text" class="form-control" name="input_name_en" id="input_name_en" oninput="input2()"
       value="" pattern="^[a-zA-Z\s]+$"  required>
      <div class="invalid-feedback">
        กรุณากรอกชื่อ นามสกุล ภาษาอังกฤษ
      </div>
    </div>
</div>
</form>

 </div>

<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
function input1() {
  const input = document.getElementById("myform1");
  test(input);
}
function input2() {
  const input = document.getElementById("myform2");
  test(input);
}

     function test($input) {
       const form = $input;
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
     }


</script>

</script>
</body>
</html>
