<div class="sales-boxes" >
        <div class="recent-sales box">
            <div class="title">Recement publié</div><br>
            <?php
  try  //Connection a la bdd
  {
    $conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $conn->query('select * from residences');
  
      echo '<center><div class="liste" ><table id="table">';
      echo '<tr>';
      echo '<th class="thliste">Type</th>';
      echo '<th class="thliste">Description</th>';
      echo '<th class="thliste">Prix</th>';
      echo '<th class="thliste">Adresse</th>';
      echo '<th class="thliste">Categorie</th>';
      echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr > ';
    echo '<td class="tdliste">' . $donnees['type'] . '</td>';
    echo '<td class="tdliste">' . $donnees['description'] . '</td>';
    echo '<td class="tdliste">' . $donnees['prix'] . '</td>';
    echo '<td class="tdliste">' . $donnees['adresse'] . '</td>';
    echo '<td class="tdliste">' . $donnees['categorie'] . '</td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
        <br>
        <div class="btn">
              <div class="button">
                <a href="#">Supprimer</a>
        </div>

</div>