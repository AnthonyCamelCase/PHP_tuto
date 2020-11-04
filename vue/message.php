<?php session_start()?>
<?php
        //vérification avant accès à la page
        if ($_SESSION['perso'])
        {  
        }
        else
        {
            header('Location: ../vue/connexion.php');
            exit();
        }
    ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
        <link rel="stylesheet" href="../css/tableau.css">
</head>
 
<body>
 
    <!-- L'en-tête -->
    
    <?php include("../template/tete.php"); ?>
    
    <!-- Le menu -->
    
    <?php include("../template/menu.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Espace membre</h1>
        
        <p>
            Bienvenue sur votre fiche !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>

    <div>
    

    <?php

    //on récupère une BDD : avec test try catch
    $dsn = 'mysql:host=localhost;dbname=user;'; 
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
    $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo=?');
    $reponse->execute($perso->getPseudo);
    $donnees = $reponse->fetchObject();
    ?>
    
    <?php
    //afficher le résultat de la requete
    
    { ?>
        <!--on affiche les infos de chaque user -->
        <table>
            <thead>
                <tr>
                    <th colspan="3">Pseudo :<?= $perso->getPseudo()?></th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td>Prénom</td>
                    <td><?= $perso->getPrenom()?></td>
                    <td><button>Modifier</button></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><?= $perso->getNom()?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?= $perso->getAge()?></td>
                </tr>
                <tr>
                    <td>Mot de passe hashé</td>
                    <td><?= $perso->getMdp()?></td>
                </tr>
            </tbody>
        </table>
        <br> 
        <!--on ferme le traitement de la requete -->
        <button><a href='../traitement/deleteInstance.php?id=<?= $donnees['id']?>'>Delete</a></button>
        <br><br><br><br>
    <?php      
    }?>
        
    <?php
    // on ferme le traitement de la requete
    $reponse->closeCursor();
    ?>
    </div>

    <!-- Le pied de page -->

    <?php include("../template/pied.php"); ?>

</body>
</html>