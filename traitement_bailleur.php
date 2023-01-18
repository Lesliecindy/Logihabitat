<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $send=$conn->prepare('insert into  bailleur (nom,telephone,adresse,mot_de_passe)
                            values(:nom,:telephone,:adresse,:mot_de_passe)');
    $send->execute(array('nom'=>$_POST['nom'],'telephone'=>$_POST['telephone'],'adresse'=>$_POST['adresse'],'mot_de_passe'=>$_POST['mot_de_passe']));
    // vérifier si la requête d'insertion a réussi
    if($send){
      echo 'Donnees inserees avec succes';
      header('location: dashboard_bail.php');
    }else{
      echo "Echec de l'operation d'insertion";
    }
?>