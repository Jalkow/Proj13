
<?php
require_once "config.php";
$sql = "SELECT * FROM accueil";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));


$newImages = [];

$newImages[] = $oldpage['parallax_img'];
$newImages[] = $oldpage['parallax_logo'];
$newImages[] = $oldpage['image1'];
$newImages[] = $oldpage['image2'];
$newImages[] = $oldpage['image3'];
$newImages[] = $oldpage['paragraph_bg'];

for($i = 0; $i <6; $i++){
    if($_FILES['images']['name'][$i] != ""){
        $newImages[$i] = $_FILES['images']['name'][$i];
        $destination = "img/".$_FILES['images']['name'][$i];
        $source = $_FILES['images']['tmp_name'][$i];
        if(!file_exists($destination)){
            if(!move_uploaded_file($source,$destination)){
                trigger_error("failed to move ".$source." to ".$destination);
                return;
            }
        }
    }
}

$sql = "UPDATE accueil 
        SET parallax_img = :parallax_img, parallax_logo = :parallax_logo, title1 = :title1,
            paragraph1 = :paragraph1, image1 = :image1, title2 = :title2,
            paragraph2 = :paragraph2, image2 = :image2, title3 = :title3,
            paragraph3 = :paragraph3, image3 = :image3, paragraph_bg = :paragraph_bg";

$databinded = array(
                ':parallax_img' => $newImages[0],
                ':parallax_logo' => $newImages[1],
                ':title1' => $_POST['title1'],
                ':paragraph1' => $_POST['paragraph1'],
                ':image1' => $newImages[2],
                ':title2' => $_POST['title2'],
                ':paragraph2' => $_POST['paragraph2'],
                ':image2' => $newImages[3],
                ':title3' => $_POST['title3'],
                ':paragraph3' => $_POST['paragraph3'],
                ':image3' => $newImages[4],
                ':paragraph_bg' => $newImages[5]
);

$pre = $pdo->prepare($sql);
if(!$pre->execute($databinded)){
    trigger_error("PDO errorInfo: ".$pdo->errorInfo());
    return;
}

header('Location:index.php');
?>