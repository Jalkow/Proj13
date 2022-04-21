
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
    }
}

print_r($newImages);
?>