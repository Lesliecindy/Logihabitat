<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $nom = $_POST['nom'];
    $send=$conn->prepare('select from message where nom='%$nom%'');
    // vérifier si la requête d'insertion a réussi
    if($send){
      echo 'Donnees inserees avec succes';
      //header('location: logihabitat.php');
    }else{
      echo "Echec de l'operation d'insertion";
    }
?>