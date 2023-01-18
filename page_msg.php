<div class="sales-boxes" >
        <div class="recent-sales box">
            <div class="title">Messages récents</div><br>
            <?php
  try  //Connection a la bdd
  {
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $conn->query('select * from message');
  
      echo '<center><div class="liste" ><table id="table">';
      echo '<tr>';
      echo '<th class="thliste">Nom</th>';
      echo '<th class="thliste">Email</th>';
      echo '<th class="thliste">Message</th>';
      echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr > ';
    echo '<td class="tdliste">' . $donnees['nom'] . '</td>';
    echo '<td class="tdliste">' . $donnees['email'] . '</td>';
    echo '<td class="tdliste">' . $donnees['comment'] . '</td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
        <br>
        <div class="btn">
              <div class="button">
                <a href="http://localhost/logihabitat/message.php">Nouveau message</a>
        </div>

</div>