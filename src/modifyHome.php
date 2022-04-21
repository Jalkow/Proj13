<?php
require_once "config.php";
$sql = "SELECT * FROM accueil";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));

?>

<form id="modify-home" method="POST" action="sendModifyHome.php" enctype="multipart/form-data">
    <h3>Modifier accueil</h3>
    <div class="input-field">
        <label>Image parallax :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Logo jeu :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Titre 1er paragraphe</label>
        <input id="modal_article" type="text" name="title1" value="<?php echo $oldpage['title1'] ?>">
    </div>
    <div class="input-field">
        <label>1er paragraphe</label>
        <input id="modal_article_description" type="text" name="paragraph1" value="<?php echo $oldpage['paragraph1'] ?>">
    </div>
    <div class="input-field">
        <label>Image 1er paragraphe :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Titre 2nd paragraphe</label>
        <input id="modal_article" type="text" name="title2" value="<?php echo $oldpage['title2'] ?>">
    </div>
    <div class="input-field">
        <label>2nd paragraphe</label>
        <input id="modal_article_description" type="text" name="paragraph2" value="<?php echo $oldpage['paragraph2'] ?>">
    </div>
    <div class="input-field">
        <label>Image 2nd paragraphe :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Titre 3eme paragraphe</label>
        <input id="modal_article" type="text" name="title3" value="<?php echo $oldpage['title3'] ?>">
    </div>
    <div class="input-field">
        <label>3eme paragraphe</label>
        <input id="modal_article_description" type="text" name="paragraph3" value="<?php echo $oldpage['paragraph3'] ?>">
    </div>
    <div class="input-field">
        <label>Image 3eme paragraphe :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Image bg paragraphes :</label>
        <input type="file" name="images[]">
    </div>
    <button class="btn btn-warning" type="submit" name="action">Modify</button>
</form>