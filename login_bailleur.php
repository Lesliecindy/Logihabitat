<?php

$conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');

$email ="";
    $nom = $_POST['nom'];
    $pass = $_POST['mot_de_passe'];

    $qry=$conn->prepare("select * from bailleur");
    $qry->execute();
    while($row = $qry->fetch()){

        if( $row['nom']==$nom && $row['mot_de_passe']==$pass){
            $findnom = $row['nom'];
            $email= $row['email'];
            $id_bailleur = $row['id_bailleur'];
        }

    }
    $qry->closeCursor();
    if( $email != ""){
        header('location: dashboard_bailleur.php');
    }else{
        header('location: connexion_bailleur.php');
    }


?>