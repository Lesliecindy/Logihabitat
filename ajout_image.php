<?php

    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');

    $file = $_FILES['image']['tmp_name'];
    $img = addslashes(file_get_contents($file));
    $send=$conn->prepare('insert into images (image)
    values(:image)');
    $send->execute(array('image'=>$_FILES['image']));
// vérifier si la requête d'insertion a réussi
if($send){
echo 'Donnees inserees avec succes';
}else{
echo "Echec de l'operation d'insertion";
}

?>