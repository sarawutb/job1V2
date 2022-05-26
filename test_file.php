<input id="s" type="file" name="fileupload" />
<button id="upload-button" onclick="uploadFile()"> Upload </button>

<script>
async function uploadFile() {
    let formData = new FormData();
    formData.append("file", xx.files[0]);
    await fetch('upload.php', {
      method: "POST",
      body: formData
    });
    alert('The file has been uploaded successfully.');
}
</script>
