<?php 
         
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>residences</title>
   </head>
   <style>
     
	 .logo-details{
	   width:220px; 
	   height:200px; 
	   background-image:url('../LOGIHABITAT1.png'); 
	   background-size: contain;
	   background-repeat: no-repeat;
	   font-size: large;
	   cursor: pointer;
	 }
	 #table{
		 width:100%;
		 font-size: 22px;
		 border: solid 1px #ffffff;
		 border-collapse: collapse;
	   }
	   td
	 {
		 border: 1px solid white;
	 }
	 .sidebar{
	   height: 100%;
	   width: 100%;
	   background: #ffffff;
	   transition: all 0.5s ease;
	 }
	 #icon{
		 color: black;
		 font-size:20px;
	 }
	 #icon_admin{
		 color: black;
		 font-size: 20px;
	 }
	 .home-section{
	   position: relative;
	   background-image:url('../house-background.jpeg'); 
	   background-size: cover;
	   background-repeat: no-repeat;
	   font-size: large;
	   min-height: 80vh;
	   width: 100% ;
	 } 
	 #accueil{
	   color:#000000;
	   font-size: 35px;
	   text-decoration: none;
	   text-decoration-line:none;
	 }
	 .title{
		font-size: 24px;
		font-weight: 500;
		color: black;
		text-align: center;
		text-shadow: 0px 0px 0px black;

	}
	 .header{
		 display: flex;
		 justify-content: space-around;
		 height: 100px;
	 }
	 .home-content{
		width:100%;
		height:300px;	
		color: #ffffff; 
		text-shadow: 3px 3px 9px black;
	 }
	 
		</style>

<body>
<div class="sidebar" >
	<div class="header">
			<div class="logo-details"></div>
			<div>
				<a href="http://localhost/logihabitat/logihabitat.php">
				<i class="bx bx-home" id="accueil"></i>
				</a>
			</div>
	</div>
    
  	<div class="home-section" >
		<div class="home-content" id="connexion">
			<?php 
				include'trait_residences.php';
			?>
		</div>	
	</div>

	

</body>
</html>

