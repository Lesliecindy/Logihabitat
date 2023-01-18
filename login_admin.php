<?php

    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    
    $nom = $_POST['nom_admin'];
    $pass = $_POST['mot_de_passe'];

    $qry=$conn->prepare("select * from administrateur");
    $qry->execute();
    
    $qry->closeCursor();
        header('location: dashboard_admin.php');  
                  
?>