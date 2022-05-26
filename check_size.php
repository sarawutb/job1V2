<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="upload" enctype="multipart/form-data" method="post">

  Upload image:
  <input id="image-file" type="file" name="file" />
  <input type="button" value="Upload" />


</form>
<script type="text/javascript">
$('#image-file').on('change', function() {
  console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MB");
});
</script>
