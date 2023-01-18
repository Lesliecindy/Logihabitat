<?php
	$conn=new PDO ('mysql:host=localhost;dbname=logihabitat','root','');

	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Type</th>
				<th>Prix</th>
				<th>Description</th>
                <th>Adresse</th>
				<th>Categorie</th>

			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $conn->prepare("select * from `residences` where `type` LIKE '%$keyword%' or `categorie` LIKE '%$keyword%' or `adresse` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['type']?></td>
				<td><?php echo $row['prix']?></td>
				<td><?php echo $row['description']?></td>
                <td><?php echo $row['adresse']?></td>
                <td><?php echo $row['categorie']?></td>
			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
                <th>Type</th>
				<th>Prix</th>
				<th>Description</th>
                <th>Adresse</th>
				<th>Categorie</th>
			</tr>
		</thead>
	</table>
<?php
	}
?>
