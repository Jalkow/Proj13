<form id="modify-news" method="post" action="sendModifyNews.php" >
    <h3>Modify news</h3>
    <div class="input-field">
    <select name="Title">
        <option value="user" disabled selected>Choose article to delete</option>
        
        <?php $sql = "SELECT news_title FROM actu";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $article = $pre->fetchAll(PDO::FETCH_ASSOC);

        foreach($article as $article){ ?>
            <option name ="Title" value=<?php echo $article['news_title'] ?>><?php echo $article['news_title'] ?></option>
        <?php } ?>
    </select>
    </div>
    <div class="input-field">
        <label >New article's title</label>
        <input class="form-control" type="text" name="NewTitle">
    </div>
    <div class="input-field">
        <label >Img path</label>
        <input class="form-control" type="text" name='Picture' />
    </div>
    <div class="input-field">
        <label >Article's description</label>
        <input class="form-control" type="text" name="Description">
    </div>
    <div class="modal-footer">
        <a class="btn btn-warning" onclick="document.getElementById('modify-news').submit()"class="modal-close waves-effect waves-red btn-flat ">Modify</a>
    </div>
</form>