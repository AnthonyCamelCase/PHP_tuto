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
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    <?php
            $nom = "Anthony"; //affecter a la variable nom votre prenom
            $team = ["benoit","mathilde","stephanie"];
            $metier = [
                "benoit" => "dev",
                "mathilde" => "UI/UX",
                "stephanie" => "product owner"
            ];
            $ma_verite = true;
            $calcul = 5 + 25;                            
    ?>
</head>
<body>
   <nav></nav>   <!--ici liens vers la page remember -->
        <a href="remember.php">Remember page</a>
<!-- afficher la phrase suivante : bonjour a tous, je m'appelle ...${nom} -->
        <p> Bonjour à tous, je m'appelle <?= $nom ?></p>
<!-- faire a tableau afficher les valeur de l'array $team -->
<table>
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Métier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($metier as $prenom=>$prof)
                        {
                            echo"<tr>;
                                    <td> $prenom</td>;
                                    <td> $prof</td>   ;  
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



<!-- faire un condition de comparaison sur $ma_verite
si true 
faire afficher <h1>vraix</h1>
sinon afficher <h1>faux</h1> -->



<!-- faire un condition de comparaison sur $calcul
si le resultat entre 15 et 45 
<h1>all good <h1>
si le resultat est inferieur a 15
<H1>not so good <h1>
sinon 
<h1>too high<H1>
-->



    
    <!-- Le pied de page -->
    
    <?php include("pied.php"); ?>
    

    </body>
</html>