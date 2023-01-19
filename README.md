# Logihabitat

LOGIHABITAT est une application dont le but est de faciliter la recherche de résidences en location ou en vente. Pour ce faire, elle propose un espace membre à partir duquel des agents immobiliers peuvent s’enregistrer afin de pouvoir ajouter des résidences dans l’application. Ces résidences seront alors visibles par le grand public, et pourront susciter de l’intérêt et permettre à l’agent immobilier de faire des placements intéressants. Par ailleurs, il est aussi possible pour tout individu de s’enregistrer dans l’application, afin de renseigner ses préférences quant aux résidences qu’il recherche. Ainsi, si une résidence correspondant à ces critères est enregistrée, il sera notifié.


# Installation

Pour Déploier Logihabitat en local: 
- Installer le server local XAMPP
- Dans le dossier systeme de XAMPP déposé le dossier logihabitat cloner sur git https://github.com/Lesliecindy/Logihabitat
- Lancer XAMPP Control Panel et activer les module Apache et MySQL
- Sur la barre d'adresse du navigateur entrer "localhost" pour ouvrir le gestionnaire du serveur local
- Cliquer sur PHPMyadmin 
- Creer la base de donnée "logihabitat" puis importer le fichier .sql contenu dans le dossier
- Demarrer l'application Web en entrant sur la barre d'adress " localhost/Logihabitat "


# Différents acteurs et rôles

Un acteur représente une unité active intervenant dans le fonctionnement du système.
•	Agents immobilier : ils ont pour tâche la publication des résidences sur l’application, modification des publications, la suppression et la gestion des comptes.
•	Les bailleurs: ils enregistrent les résidences. 
•	Les clients : Consulte les résidences, gèrent leurs espaces respectifs 

# MODELISATION DU SYSTEME

Pour l’étude de notre système le langage de modélisation que nous avons utilisé est UML (Unified Modeling Language). UML est un langage de modélisation unifié destiné à l’architecture, la conception et la mise en œuvre de systèmes logiciels complexes. Il se compose de différents types de diagrammes entre autre le diagramme de cas d’utilisation et le diagramme de classe. 

1.	Diagramme de cas d’utilisation

![alt text](../Logihabitat/conception/Diagramme%201.png)


2. Diagramme de classe

![alt text](../Logihabitat/conception/Diagramme%202.png)

# Interfaces

Home_page

![alt text](../Logihabitat/conception/Front_accueil.png)

1. sign in

![alt text](../Logihabitat/conception/login.png)

2. login_client

![alt text](../Logihabitat/conception/sign%20in.png)

3. login_admin

![alt text](../Logihabitat/conception/login_admin.png)

4. Dashboard_client

![alt text](../Logihabitat/conception/Dashboard_client.png)

5. Dashboard_admin

![alt text](../Logihabitat/conception/Dashboard.png)