<form method="POST" action="sendDeleteNews.php">
  <div class="input-field">
    <select name="articletodelete">
        <option value="user" disabled selected>Choose article to delete</option>
        
        <?php $sql = "SELECT news_title FROM actu";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $article = $pre->fetchAll(PDO::FETCH_ASSOC);

        foreach($article as $article){ ?>
            <option name ="michel" value=<?php echo $article['news_title'] ?>><?php echo $article['news_title'] ?></option>
        <?php } ?>
    </select>
    <label>Article to delete</label>
  </div>
    <button type="submit" name="action">Delete</button>
</form>