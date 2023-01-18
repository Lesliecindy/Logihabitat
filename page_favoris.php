<div class="sales-boxes" >
        <div class="recent-sales box">
            <div class="title">Tous mes favoris</div><br>
            <?php
  try  //Connection a la bdd
  {
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $conn->query('select * from client');
  
      echo '<center><div class="liste" ><table id="table">';
      echo '<tr>';
      echo '<th class="thliste">Nom</th>';
      echo '<th class="thliste">Email</th>';
      echo '<th class="thliste">Password</th>';
      echo '<th class="thliste">Numero</th>';
      echo '<th class="thliste">Adresse</th>';
      echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
    echo '<td class="tdliste">' . $donnees['nom'] . '</td>';
    echo '<td class="tdliste">' . $donnees['email'] . '</td>';
    echo '<td class="tdliste">' . $donnees['mot_de_passe'] . '</td>';
    echo '<td class="tdliste">' . $donnees['numero'] . '</td>';
    echo '<td class="tdliste">' . $donnees['adresse_client'] . '</td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
<br>
        <div class="btn">
              <div class="button">
                <a href="#">Bloquer</a>
              </div>
              <div class="button">
                <a href="#">Supprimer</a>
        </div>

</div>