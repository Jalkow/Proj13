<?php
require_once "config.php";
$sql = "SELECT * FROM mentions";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));

?>

<form id="modify-mentions" method="POST" action="sendModifyMentions.php" enctype="multipart/form-data">
    <h3>Modifier accueil</h3>
    <div class="input-field">
        <label>Titre :</label>
        <input type="text" name="title" value="<?php echo $oldpage['title'] ?>">
    </div>
    <div class="input-field">
        <label>Texte :</label>
        <input type="text" name="text" value="<?php echo $oldpage['text'] ?>">
    </div>
    <div class="input-field">
        <label>Image :</label>
        <input type="file" name="logo">
    </div>
    <button class="btn btn-warning" type="submit" name="action">Modify</button>
</form>