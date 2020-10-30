<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
     
</head>
 
<body>

    <?php 
    if ($_POST['prenom'] == NULL OR $_POST['nom'] == NULL)
    {
        $_SESSION["erreur"] = "Remplissez bien nom et prénom";
        header('Location: index.php');
        exit();
    }
    $_SESSION["prenom"] = htmlspecialchars($_POST['prenom']);
    $_SESSION["nom"]= htmlspecialchars($_POST['nom']);  
    ?>

    <?php header('Location: message.php');
    exit();      
    ?>
</body>
</html>