<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
</head>
 
<body>
 
    <!-- L'en-tête -->
    
    <?php include("tete.php"); ?>
    
    <!-- Le menu -->
    
    <?php include("menu.php"); ?>
    
    <!-- Le corps -->


    </div>
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    <?php
            #$nom = "Anthony";
            $_SESSION['nom'] = $nom = "Anthony";
 //affecter a la variable nom votre prenom
            $team = ["benoit","mathilde","stephanie"];
            $_SESSION['metier']=$metier = [
                "benoit" => "dev",
                "mathilde" => "UI/UX",
                "stephanie" => "product owner"
            ];
            $ma_verite = true;
            $calcul = 5 + 25;                            
    ?>


<body>
<nav>
 <!--ici liens vers la page remember -->
        <a href="remember.php">Remember page</a>
</nav>  
<!-- afficher la phrase suivante : bonjour a tous, je m'appelle ...${nom} -->
    <p> Bonjour à tous, je m'appelle <?= $nom ?></p>
<!-- faire a tableau afficher les valeur de l'array $team -->
<table>
        <tr>
            <th>Prenom</th>
            <th>Métier</th>
        </tr>
    <tbody>
        <?php
            foreach ($metier as $prenom=>$prof)
            {
                echo"<tr>
                    <td> $prenom</td>
                    <td> $prof</td>    
                    </tr>";
            }
        ?>
    </tbody>
</table>


    <h1>la team</h1>
    <p>composition</p>
<!-- faire un template d'afficher suivante : 
benoit notre dev
mathilde notre UI/UX
stephanie notre product owner 
DON'T HARDCODE
-->

    <ul>la team again</ul>
<!-- faire de meme mais avec un liste a puce 
DON'T HARDCODE
 -->
    <ul>
    <?php
        foreach ($metier as $prenom=>$prof)
        {
            echo "<li> $prenom a pour métier $prof</li>";
        }
    ?>   
    </ul>


<!-- faire un condition de comparaison sur $ma_verite
si true 
faire afficher <h1>vraix</h1>
sinon afficher <h1>faux</h1> -->

    <div>
        <?php
            if ($ma_verite == True)
            {
                echo "<h1>vrai</h1> <br><br>";
            }
            else
            {
                echo "<h1>faux</h1>  <br><br>";
            }
        ?>
    </div>

<!-- faire un condition de comparaison sur $calcul
si le resultat entre 15 et 45 
<h1>all good <h1>
si le resultat est inferieur a 15
<H1>not so good <h1>
sinon 
<h1>too high<H1>
-->
    <div>

    <?php
    if ($calcul <= 15)
    {
        echo "<h1>not so good <h1>";
    }
    elseif ($calcul <= 45)
    {
        echo "<h1>not so good <h1>";
    }
    else 
    {
        echo "<h1>not so good <h1>";
    }
    ?>

    </div>

    <div>
    <?php
    if (isset($_SESSION["erreur"]))
    {
        echo "<h2>",$_SESSION['erreur'],"</h2>";
    }
    ?>
    <form action="traitement.php" method="post">
    <label for="pren">Votre prénom :</label><input type="text" name="prenom" id="pren">
    <label for="name">Votre nom :</label><input type="text" name="nom" id="name">
    <input type="submit" value="gogogo">

    

    </form>
    
    </div>
    <!-- Le pied de page -->
    
    <?php include("pied.php"); ?>
</body>
</html>