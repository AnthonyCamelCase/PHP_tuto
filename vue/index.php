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
    <h2>Formulaire user :</h2>
    <div>
    <?php
    if (isset($_SESSION["erreur"]))
    {
        echo "<h2>",$_SESSION['erreur'],"</h2>";
    }
    ?>
    <form action="../traitement/formulaire.php" method="post">
    <label for="pren">Votre prénom : </label><input type="text" name="prenom" id="pren"><br><br>
    <label for="name">Votre nom : </label><input type="text" name="nom" id="name"><br><br>
    <label for="age">Votre age : </label><input type="number" name="age" id="age"><br><br>
    <input type="submit" value="gogogo">   
    </form>
    
    </div>
    <!-- Le pied de page -->
    
    <?php include("../template/pied.php"); ?>
</body>
</html>