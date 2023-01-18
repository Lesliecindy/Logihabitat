<?php 
	$conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
	$sql = 'SELECT info_id, info_titre, info_contenu FROM infos';
	$req = $db->prepare($sql);
	$req->execute() or die(print_r($req->errorInfo()));
	$row = $req->fetch();

 // Fichier : ajax_request.php
 //define index of column
    $columns = array(
        0 =>'info_titre', 
        1 => 'info_contenu'
    );
    $error = true;
    $colVal = '';
    $colIndex = $rowId = 0;

    $msg = array('status'=>!$error, 'msg'=>'Echec lors de l\'enregistrement !');

    if(isset($_POST)){
        if(isset($_POST['val']) && !empty($_POST['val']) && $error) {
          $colVal = $_POST['val'];
          $error = false;
          
        } else {
          $error = true;
        }
        if(isset($_POST['index']) && $_POST['index'] >= 0 &&  $error) {
          $colIndex = $_POST['index'];
          $error = false;
        } else {
          $error = true;
        }
        if(isset($_POST['id']) && $_POST['id'] > 0 && $error) {
          $rowId = $_POST['id'];
          $error = false;
        } else {
          $error = true;
        }

        if(!$error) {
            $sql = "UPDATE infos SET ".$columns[$colIndex]." = '".$colVal."' WHERE info_id='".$rowId."'";
            $req = $db->prepare($sql);
            $req->execute() or die(print_r($req->errorInfo()));
            $msg = array('status'=>!$error, 'msg'=>'Saisie enregistrée avec success !');
        }
    }

    // send data as json format
    echo json_encode($msg);
?>



