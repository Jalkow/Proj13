<form id="add-news" method="post" action="sendAddNews.php" enctype= "multipart/form-data">
  <h3>Add news</h3>
  <div class="input-field">
    <input id="picture" type="text" name='Picture' />
    <label >Add img path</label>
  </div>
  <div class="input-field">
    <input id="title" type="text" name="Title">
    <label >Write article's title</label>
  </div>
  <div class="input-field">
    <input id="description" type="text" name="Description">
    <label >Write article's description</label>
  </div>

  <div class="modal-footer">
    <a onclick="document.getElementById('add-news').submit()"class="modal-close waves-effect waves-red btn-flat ">Create</a>
  </div>
</form>
