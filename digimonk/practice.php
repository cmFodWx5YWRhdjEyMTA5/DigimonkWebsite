<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<form enctype="multipart/form-data">
  <input type="file" id="image" name="image" accept="Image/*" />
  <input type="submit" id="submit" name="" value="Upload" />
</form>

<script>
$('#submit').click(function (event) {
    event.preventDefault()
   var file = $('#image').get(0).files[0];
   var formData = new FormData();
   formData.append('file', file);
   $.ajax({
       url: 'save_career.php',
       //Ajax events
       beforeSend: function (e) {
         alert('Are you sure you want to upload document.');
       },
       success: function (e) {
        //alert(e);
         alert('Upload completed');
       },
       error: function (e) {
         alert('error ' + e.message);
       },
       // Form data
       data: formData,
       type: 'POST',
       //Options to tell jQuery not to process data or worry about content-type.
       cache: false,
       contentType: false,
       processData: false
    });
    return false;
});
</script>