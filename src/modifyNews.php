<form method="POST" action="sendModifyNews.php">
    <div class="input-field">
        <select>
            <option value="user" disabled selected>Choose article to modify</option>
            
            <?php $sql = "SELECT news_title FROM actu";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $article = $pre->fetchAll(PDO::FETCH_ASSOC);


            foreach($article as $article){ ?>
                <option name ="michel" value=<?php echo $article['news_title'] ?>><?php echo $article['news_title'] ?></option>
            <?php } ?>
        </select>
    </div>
    
    <?php $sql = "SELECT * FROM actu WHERE news_title =" echo $article['news_title'] "";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $wui = $pre->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <form id="add-news" method="post" action="sendModifyNews.php" >
            <h3>Add news</h3>
            <div class="input-field">
                <label >Img path</label>
                <input id="modal_article" type="text" name='Picture' />
            </div>
            <div class="input-field">
                <label >Article's title</label>
                <input id="modal_article" type="text" name="Title">
            </div>
            <div class="input-field">
                <label >Article's description</label>
                <input id="modal_article_description" type="text" name="Description">
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" onclick="document.getElementById('add-news').submit()"class="modal-close waves-effect waves-red btn-flat ">Create</a>
            </div>
        </form>
    
    <button class="btn btn-warning" type="submit" name="action">Modify</button>
</form>