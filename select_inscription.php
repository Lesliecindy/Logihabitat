<?php 
         
?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../selection_connexion/css/main.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

   </head>
   <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  align-items: center;
  justify-content: space-around;
  width: auto;
  height: 500px;
  background-image:url('../appartment-background.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
}
#icon{
    font-size: 80px;
    justify-content: center;
}
#text{
    text-decoration: none;
    color: black;
    font-size: 25px;
}
.wrapper{
  position: relative;
  justify-content: space-around;
  max-width: 430px;
  text-align: center;
  width: 200px;
  height: 150px;
  background: #fff;
  border-radius: 30px;
  box-shadow: 0 5px 10px rgb(0, 0, 0);
}
.content{
  display: flex;
  align-items: center;
  justify-content: space-around;
  background: #2f00fe;
  width:600px;
  height:350px;
  border-radius: 20px;

}
.all{
  min-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
#texte{
    text-decoration: none;
    color: #000000;
    font-size: 20px;
    margin-top:25%;

}
.flex{
  display: flex;
  text-align: center;
  justify-content: space-around;
}

   </style>

<body>
    <div class="all">
     <div></div>
     <div class="content">

        <div class="wrapper">
            <i id="icon" class='bx bx-user-circle'></i>
            <a href="http://localhost/logihabitat/inscription.php"><h2 id="text">Client</h2></a>
        </div>
        <div class="wrapper">
            <div></div>
            <i id="icon" class='bx bx-user-circle'></i>
            <a href="http://localhost/logihabitat/inscription_bailleur.php"><h2 id="text">Bailleur</h2></a>
        </div>

     </div>
     <div></div> 

    </div>
     
    <div class="flex">
      <div>
      <a href="http://localhost/logihabitat/inscription_admin.php">
          <span id="texte">Inscription agent</span>
        </a>
      </div>
      <div>
        <a href="http://localhost/logihabitat/logihabitat.php">
            <span id="texte">Retour au menu</span>   
        </a>   
      </div>
    </div>
</body>
</html>