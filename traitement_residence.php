<?php

    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');

    $send=$conn->prepare('insert into residences (type,prix,description,adresse,categorie)
                            values(:type,:prix,:description,:adresse,:categorie)');
    $send->execute(array('type'=>$_POST['type'],'prix'=>$_POST['prix'],'description'=>$_POST['description'],'adresse'=>$_POST['adresse'],'categorie'=>$_POST['categorie']));
    // vérifier si la requête d'insertion a réussi
    if($send){
      header('location: image.php');
    }else{
      echo "Echec de l'operation d'insertion";
    }

?>