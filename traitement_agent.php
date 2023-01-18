<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $send=$conn->prepare('insert into  administrateur(nom_admin,mot_de_passe,tel_admin)
                            values(:nom_admin,:mot_de_passe,:tel_admin)');
    $send->execute(array('nom_admin'=>$_POST['nom_admin'],'mot_de_passe'=>$_POST['mot_de_passe'],'tel_admin'=>$_POST['tel_admin']));
    if($send){
        echo 'Donnees inserees avec succes';
        header('location: dashboard_admin.php');
      }else{
        echo "Echec de l'operation d'insertion";
      }
?>