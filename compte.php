<?php
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
    $send=$conn->prepare('select * from  client');
    $send->execute();
?>