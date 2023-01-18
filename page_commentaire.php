<div class="sales-boxes" >
<div class="recent-sales box">
            <div class="title">Tous les commentaires</div><br>
            <?php
  try  //Connection a la bdd
  {
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $conn->query('select * from comments');
  
      echo '<center><div class="liste" ><table id="table">';
      echo '<tr>';
      echo '<th class="thliste">Nom</th>';
      echo '<th class="thliste">Commentaires</th>';
      echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr > ';
    echo '<td class="tdliste">' . $donnees['nom'] . '</td>';
    echo '<td class="tdliste">' . $donnees['comment'] . '</td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
        <br>
        <div class="btn">
                <div class="button">
                        <a href="#">Publier</a>
                </div>
                <div class="button">
                        <a href="#">Supprimer</a>
                </div>
        </div>
</div>
</div>