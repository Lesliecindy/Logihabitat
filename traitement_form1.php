<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $send=$conn->prepare('insert into message (nom,email,comment)
                            values(:nom,:email,:comment)');
    $send->execute(array('nom'=>$_POST['nom'],'email'=>$_POST['email'],'comment'=>$_POST['comment']));
    // vérifier si la requête d'insertion a réussi
    if($send){
      echo 'Donnees inserees avec succes';
      //header('location: logihabitat.php');
    }else{
      echo "Echec de l'operation d'insertion";
    }
?>