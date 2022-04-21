<?php
require_once "config.php";
$sql = "SELECT * FROM contact";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));

?>

<form id="modify-contact" method="POST" action="sendModifyContact.php" enctype="multipart/form-data">
    <h3>Modifier accueil</h3>
    <div class="input-field">
        <label>Titre 1er paragraphe :</label>
        <input type="text" name="text1" value="<?php echo $oldpage['text1'] ?>">
    </div>
    <div class="input-field">
        <label>Titre 2ème paragraphe :</label>
        <input type="text" name="text2" value="<?php echo $oldpage['text2'] ?>">
    </div>
    <div class="input-field">
        <label>Image 1er paragraphe :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Image 2ème paragraphe :</label>
        <input type="file" name="images[]">
    </div>
    <div class="input-field">
        <label>Numéro de téléphone : </label>
        <input type="text" name="phone" value="<?php echo $oldpage['phone'] ?>">
    </div>
    <div class="input-field">
        <label>email : </label>
        <input  type="text" name="email" value="<?php echo $oldpage['email'] ?>">
    </div>
    <div class="input-field">
        <label>email service client :</label>
        <input  type="text" name="emailSAV" value="<?php echo $oldpage['emailSAV'] ?>">
    </div>
    <div class="input-field">
        <label>lien linkedin :</label>
        <input type="text" name="linkedin" value="<?php echo $oldpage['linkedin'] ?>">
    </div>
    <button class="btn btn-warning" type="submit" name="action">Modify</button>
</form>