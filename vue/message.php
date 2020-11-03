
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
</head>
 
<body>
 
    <!-- L'en-tête -->
    
    <?php include("../template/tete.php"); ?>
    
    <!-- Le menu -->
    
    <?php include("../template/menu.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
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
    $reponse = $bdd->query('SELECT * FROM utilisateur');

    //afficher le résultat de la requete
    while ($donnees= $reponse->fetch())
    {
        echo " prenom : ", $donnees['prenom'],", nom : ", $donnees['nom'],", age : ", $donnees['age'];
        
        $test = $donnees['id'];

        echo "<a href='../traitement/deleteInstance.php?id=$test'>Delete</a><br><br>";     
    }
    
    // on ferme le traitement de la requete
    
    ?>
    </div>
    
<button>DELETE</button>
    <!-- Le pied de page -->

    <?php include("../template/pied.php"); ?>

</body>
</html>