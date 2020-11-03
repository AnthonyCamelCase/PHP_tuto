<?php 
    // on récupère une BDD
    $dsn = 'mysql:host=localhost;dbname=openclass;'; 
    $user = 'root'; 
    $password = ''; 
    try 
    { 
     $bdd = new PDO($dsn, $user, $password); 
    } 
    catch (PDOException $e) 
    { 
     echo 'Connection failed: ' . $e->getMessage(); 
    } 

    // on fait une requete sur cette BDD
    $reponse = $bdd->query('SELECT nom,prix FROM jeux_video');

    //afficher le résultat de la requete
    while ($donnees= $reponse->fetch())
    {
        echo " le jeu", $donnees['nom'],"coute", $donnees['prix'],"<br>";
    }

    // on ferme le traitement de la requete
    $reponse->closeCursor();
?>


