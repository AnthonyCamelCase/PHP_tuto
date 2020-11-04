<?php session_start()?>
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

    </div>
    <h2>Connexion :</h2>
    <div>
    <?php
    if (isset($erreur))
    {
        echo "<h2>",$erreur,"</h2>";
    }
    ?>
    <form action="../traitement/connect.php" method="post">
    <label for="pseudo">Votre pseudo : </label><input type="text" name="pseudo" id="pseudo"><br><br>
    <label for="mdp">Votre mot de passe : </label><input type="password" name="mdp" id="mdp"><br><br>
    <input type="submit" value="se connecter">   
    </form>
    
    </div>
    <!-- Le pied de page -->
    
    <?php include("../template/pied.php"); ?>
</body>
</html>