<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $send=$conn->prepare('insert into client(nom,email,adresse_client,numero,mot_de_passe)
                            values(:nom,:email,:adresse_client,:numero,:mot_de_passe)');
    $send->execute(array('nom'=>$_POST['nom'],'email'=>$_POST['email'],'adresse_client'=>$_POST['adresse_client'],'numero'=>$_POST['numero'],'mot_de_passe'=>$_POST['mot_de_passe']));
    if($send){
        echo 'Donnees inserees avec succes';
        header('location: dashboard_client.php');
      }else{
        echo "Echec de l'operation d'insertion";
      }
?>