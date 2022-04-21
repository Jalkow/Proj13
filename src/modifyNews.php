<form id="modify-news" method="post" action="sendModifyNews.php" >
    <h3>Modify news</h3>
    <div class="input-field">
        <label >Article to modify</label>
        <input id="modal_article" type="text" name="Title">
    </div>
    <div class="input-field">
        <label >New article's title</label>
        <input id="modal_article" type="text" name="NewTitle">
    </div>
    <div class="input-field">
        <label >Img path</label>
        <input id="modal_article" type="text" name='Picture' />
    </div>
    <div class="input-field">
        <label >Article's description</label>
        <input id="modal_article_description" type="text" name="Description">
    </div>
    <button class="btn btn-warning" type="submit" name="action">Modify</button>
</form>