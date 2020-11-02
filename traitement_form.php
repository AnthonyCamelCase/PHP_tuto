<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
     
</head>
 
<body>
    
    <?php
   require('modele.php');
    
    //recupération des données formulaires :
    if ($_POST['prenom'] == NULL OR $_POST['nom'] == NULL OR $_POST['age']== NULL)
    {
        $_SESSION["erreur"] = "Remplissez bien nom et prénom ou l'age";
        header('Location: index.php');
        exit();
    }
    else
    {
        $perso = new User($_POST['prenom'],$_POST['nom'],$_POST['age']);
    }
    
    require('traitement.php');

    ?>
    <!-- function valid_data($data) {
        $data = trim($data); <!-- a revoir 
        $data = stripslashes($data); <!-- enleve  les / si y en a 2 d\'affilé
        $data = htmlentities($data);<!-- htmlspecialchars
        return $data;
    }-->

</body>
</html>