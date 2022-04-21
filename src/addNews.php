<form id="add-news" method="post" action="sendAddNews.php" enctype= "multipart/form-data">
  <h3>Add news</h3>
  <div class="input-field">
    <label >Add img path</label>
    <input class="modal_article" type="text" name='Picture' />
  </div>
  <div class="input-field">
    <label >Write article's title</label>
    <input class="modal_article" type="text" name="Title">
  </div>
  <div class="input-field">
    <label >Write article's description</label>
    <input class="modal_article_description" type="text" name="Description">
  </div>
  <div class="modal-footer">
    <a class="btn btn-success" onclick="document.getElementById('add-news').submit()"class="modal-close waves-effect waves-red btn-flat ">Create</a>
  </div>
</form>
