<?php 
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>LOGIHABITAT</title>
  <!-- css pour pop up -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="../app/css/main.css">
  <!-- js pour la pop up -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../app/js/main.js"></script>
</head>

<style>
    
/* Style the active link (or home/logo) */
.active {
  color: #2f00fe;
}
#icon{
  width:120px; 
  height:27px; 
  background-image:url('../LOGIHABITAT1.png');
  margin:0px; 
  padding:10px; 
  background-size: cover;
  font-size: large;
  cursor: pointer;
}
.font {
    width: 100px;
    height: 100px;
    color: #2f00fe;  
}
.menuheight{
    height: 50px;
}
.form1 {
    width: 300px;
    height: 50px;
    border-radius: 10px;
    padding: 10px;
}
#search {
  font-size: 20px;
  background-color: #2f00fe;
  color: #ffffff;
  text-align: center;
  height: 50px;
  width: 70px;
  border-radius: 10px;
  padding: 10px;
  text-decoration: none;
  list-style-type: none;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

#menu {              
  padding:0;                  
  background-color: rgb(255, 255, 255);     
  list-style-type: none ;
  width: 100%;
}
.menu1 { 
  padding: 20px;
  display: flex; 
  justify-content: space-around; 
  width: 400px;
  cursor: pointer;
}
#element{
  color: #000;
  font-family: Arial, Helvetica, sans-serif;
  list-style-type: none ;
  text-decoration: none;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
}
.menu1 a:hover {
  color: #2a27ed; 
}
  /* Hide the links inside the navigation menu (except for logo/home) */
  .topnav #myLinks {
    display: none;
  }
  
  /* Style navigation menu links */
  .topnav a {
    color: #000;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    display: block;
  }
  
  /* Style the hamburger menu */
  .topnav a.icon {
    background: #ffffff;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
  }
  
  /* Add a grey background color on mouse-over */
  .topnav a:hover {
    background-color: rgb(255, 255, 255);
    color: black;
  }
  
  /* Style the active link (or home/logo) */
  .active {
    background-color:#ffffff;
    color: white;
  }

#top1{
      justify-content: center;
      display: flex;
  }
  #icon{
    width:150px; 
    height:27px; 
    background-image:url('../LOGIHABITAT1.png');
    margin:0px; 
    padding:10px; 
    background-size: cover;
    font-size: large;
}
#tope{
  display: none;
}

#first-div{
    display: flex;
    background-color: #ffffff;
    height: 20px;
}
#logo{
    height: 50px;
    width: 150px;
}
#menu{
    display: flex;
    justify-content: space-between;
    text-align: center;
}
.first{
    width: auto;
    height: 550px;
    background-image: url(../home-background.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-color: rgba(255, 255, 255, 0.6);
    background-size: cover;
}
#title{
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    text-shadow: 3px 3px 9px black;
}
#form1{
    display: block;
    font-size: 20px;
    color: white;
    text-shadow: 3px 3px 9px black;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 10px;
}
#form{
    display: flex;
    justify-content: space-around;
    width: 600px;
    height: 300px;
}
#second{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(0, 0, 0);
}
#maison{
    display: flex;
    justify-content: space-around;
    text-decoration:none;
    list-style-type: none ;
}
#maisonvendre {
    height: 300px;
    width: 300px;
    background-image: url(../maison\ a\ vendre1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#villalouer {
    height: 300px;
    width: 300px;
    background-image: url(../villa\ à\ louer.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#appartlouer {
    height: 300px;
    width: 300px;
    background-image: url(../appart.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#chambrelouer {
    height: 300px;
    width: 300px;
    background-image: url(../chambre\ a\ louer\ 2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.input-box input{
  height: 50%;
  width: 250px;
  padding: 0 15px;
  font-size: 17px;
  color: rgb(255, 255, 255);
  border-bottom-width: 2.5px;
  border-radius: 8px;
  background-color: #2f00fe;
  cursor: pointer;
}
.input-box{
  height: 100px;
}
.paragraphe{
    text-align: center;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    color: #070707;
}
.paragraphe1{
  text-align: center;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  color: #070707;
  text-decoration: none;
}
#title1{
    font-size: 30px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: rgb(0, 0, 0);
    text-align: center;
}
#commentaire{
  display: flex;
  justify-content: space-around;
  animation: fondu 15s ease-in-out infinite both;
}
/* */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

/* UTILITIES */
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}

/* NAVBAR STYLING STARTS */
.navbar {
  width: 100%;
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: #fff;
 color: #fff;
 position: fixed;
top: 0
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color:#2f00fe;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}

/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}
/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.menu { 
 display:none;
 position: absolute;
 background-color:teal;
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}
.menu li:hover {
 display: inline-block;
 background-color:#4c9e9e;
 transition: 0.3s ease;
}
.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
}


  
  /* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks {
    display: none;
}
  
  /* Style navigation menu links */
.topnav a {
    color: #000;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    display: block;
}
  
  /* Style the hamburger menu */
.topnav a.icon {
    background: #ffffff;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
} 
  #icon{
    width:180px; 
    height: 50px;px; 
    background-image:url('../LOGIHABITAT1.png');
    margin:0px; 
    padding:10px; 
    background-size: cover;
    font-size: large;
}
  .flex{
    display: flex;
  }
  .between{
    justify-content: space-evenly;
  }
  .titre{
    width: 300px;
    height: 100px;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
  
  }
  #logo2{
    background-image: url('../LOGIHABITAT1.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width:180px; 
    height:50px; 
    margin-left: auto;
    margin-right: auto;
}
#last{
  font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
}
#last1{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
    display: flex;
    justify-content: space-evenly;
    color: #ffffff;
    background-color: rgb(10, 10, 10);
}
#services{
    width: 200px;
    margin-left: auto;
    margin-right: auto;
}
#lien{
    width: 180px;
    margin-left: auto;
    margin-right: auto;
}
#contact{
    width: 220px;
    margin-left: auto;
    margin-right: auto;
}
#follow{
    width: 180px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
#last2{
    width: 100%;
    height: 50px;
    display: flex;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    justify-content: space-around;
    color: #ffffff;
    background-color: rgb(10, 10, 10);
}
#lien{
  list-style-type: none ;
  text-decoration: none;
  color: #ffffff;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
}
#comment{
  list-style-type: none ;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
}
.between{
  cursor: pointer;
}

</style>
<body>
        <nav class="navbar">
                <!-- LOGO -->
                <a id="icon" href="#"></a>
                <!-- NAVIGATION MENU -->
                <ul class="nav-links">
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                <!-- NAVIGATION MENUS -->
                <div class="menu">
                <li> <a id="element" href="http://localhost/logihabitat/logihabitat.php">Home</a></li>
                <li> <a id="element" href="http://localhost/logihabitat/select_connexion.php">Se connecter</a></li>
                <li> <a id="element" href="http://localhost/logihabitat/select_inscription.php">S'inscrire</a></li>
                </div>
                </ul>
        </nav>

    <div class="first col-12" style="justify-content:space-between; display:flex;" >
      <div class="col-1"></div>
      <div class="col-9" style="justify-content:center;">
        <div style="height: 200px;"></div>
            <div id="form1">
              <h1 id="title">Trouvez la maison de vos reves</h1> <br>
              <form method="POST" class="col-12" action="" id="test">
                <div class="flex">
            
                    <input type="search" class="type form1" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" placeholder="Recherchez votre residence..." required=""/>
                    <div style="width: 30px;"></div>
                    <button class="fa fa-search" id="search" name="search"></button>
                  
                </div>
              </form>
              <br /><br />
              <?php include'traitement_recherche.php'?>
            </div>  
        </div>      
      </div>
      <div class="col-1"></div>
    </div><br><br><br>
  <div id="second" >
            <h1 id="title1">Ajouts recents</h1><br><br>
                <div id="maison">
                <a href="http://localhost/logihabitat/formulaire_msg.php"><div id="maisonvendre"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span class="paragraphe1"> Maison à vendre: xaf 2.500.000<br>New-bell</span> </div></a>
                <a href="http://localhost/logihabitat/formulaire_msg.php"><div id="villalouer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span class="paragraphe1">Villa à louer: xaf 500.000/mois<br>Bastos</span></div></a>
                <a href="http://localhost/logihabitat/formulaire_msg.php"><div id="appartlouer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span class="paragraphe1">Appart à louer: xaf 75.000/mois<br>Odza</span></div></a>
                <a href="http://localhost/logihabitat/formulaire_msg.php"><div id="chambrelouer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span class="paragraphe1">Chambre: xaf 25.000/mois <br>Ekie</span></div></a>
                </div><br><br><br><br>
                <div id="commentaire">
                      <div class="col4"></div>
                      <div class="input-box button">
                          <a href="http://localhost/logihabitat/formulaire_commentaire.php">
                            <input type="button" value="Voir plus">
                          </a>    
                      </div>
                      <div class="col4" ></div>
                </div>                  
  </div>                  
                    <br><br>
            <h1 id="title1">Commentaires recents</h1><br>
                    <div id="commentaire">
                        <div class=".col1"></div>
                        <div class="listing-footer">
                            <a href="#" id="comment"><i class="fa fa-user"></i> Kristen Berry</a><br>
                            <span class="paragraphe1">Besoin d'un studio a Oyom abang</span><br>
                            <span><i class="fa fa-calendar-o"></i> Il y a 3 jours</span>
                        </div>
                        <div class="listing-footer">
                            <a href="#" id="comment"><i class="fa fa-user"></i> Jason Doe</a><br>
                            <span class="paragraphe1">Chambre moderne a Akwa</span><br>
                            <span><i class="fa fa-calendar-o"></i> Il y a une semaine</span>
                        </div>
                        <div class="listing-footer">
                            <a href="#" id="comment"><i class="fa fa-user"></i> Maryline</a><br>
                            <span class="paragraphe1">Recherche d'un appartement a Simbock</span><br>
                            <span ><i class="fa fa-calendar-o"></i> Il y a 2 semaines</span>
                        </div>
                        <div class=".col1"></div>
                    </div><br><br><br>
                    <div id="commentaire">
                      <div class="col4"></div>
                      <div class="input-box button">
                          <a href="http://localhost/logihabitat/formulaire_commentaire.php">
                            <input type="button" value="Ajouter un commentaire">
                          </a>    
                      </div>
                      <div class="col4" ></div>
                    </div>                  
                    <br><br><br>
                    <div id="last">
                                <div id="logo2"></div><br><br>
                            <div class="flex-sm" id="last1">
                                <div id="services">
                                    <h1>NOS SERVICES</h1>
                                    <p id="lien">Vente de terrains</p>
                                    <p id="lien">Vente et location de maison</p>
                                    <p id="lien">Location d'appartements</p>
                                    <p id="lien">Location de chambres</p>
                                </div>
                                <div id="lien">
                                    <h1>LIENS UTILES</h1>
                                    <li>
                                        <a href="http://localhost/logihabitat/logihabitat.php" id="lien">Home</a>
                                    </li>
                                    <li>
                                    <a href="http://localhost/logihabitat/selection_connexion.php" id="lien">Se connecter</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/logihabitat/selection_inscription.php"id="lien">S'inscrire</a>
                                    </li>
                                </div>
                                <div id="contact">
                                    <h1>CONTACTEZ-NOUS</h1>
                                    <p id="lien">Cabaret la reserve Etoa-Meki, Yaounde</p>
                                    <p id="lien">+237691808947</p>
                                    <p id="lien">logihabitat.@gmailcom</p>
                                </div>
                                <div id="follow">
                                    <h1>SUIVEZ-NOUS</h1>
                                    <div class="between">
                                        <i class="fa fa-google-plus-official"
                                            style="font-size:28px;color:#ffffff;padding: 0px 10px 0px 0px;"></i>
                                        <i class="fa fa-twitter-square"
                                            style="font-size:28px;color:#ffffff;padding: 0px 10px 0px 0px;"></i>
                                        <i class="fa fa-facebook-square"
                                            style="font-size:28px;color:#ffffff;padding: 0px 10px 0px 0px;"></i>
                                        <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="last2">
                            <div>
                                <p>Privacy Policy © LOGIHABITAT2022</p>
                            </div>
                        </div>      
                    </div>     
  </body>
</html>