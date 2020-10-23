<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titre = "get data"    
    ?>
    <title><?php echo $titre; ?></title>
</head>
<body>
    <!-- afficher la phrase suivante : salutation ${nom} , petits scarabée deviendra ...  -->
    <a href="index.php">Retour index</a>
    <p>
    <?php
    echo $_SESSION['nom']
    ?>
    </p>
<div>
<table>
        <tr>
            <th>Prenom</th>
            <th>Métier</th>
        </tr>
    <tbody>
        <?php
            foreach ($_SESSION["metier"] as $prenom=>$prof)
            {
                echo"<tr>
                    <td> $prenom</td>
                    <td> $prof</td>    
                    </tr>";
            }
        ?>
    </tbody>
</table></div>
</body>
</html>