<form id="add-image" method="post" action="send_image.php" enctype= "multipart/form-data">
  <label>Add image</label>
  <div class="input-field" >
    <input type="file" name="newImage">
  </div>
  <label>Add image name</label>
  <div class="input-field" >
    <input type="text" name="imageName">
  </div>
  <label>Add image text that will display when image is not loaded</label>
  <div class="input-field" >
    <input type="text" name="alt">
  </div>
  <div class="modal-footer">
    <a class="btn btn-success" onclick="document.getElementById('add-image').submit()" class="modal-close waves-effect waves-red btn-flat ">Add</a>
  </div>
</form>