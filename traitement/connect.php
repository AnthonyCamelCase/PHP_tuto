<?php session_start()?>

<?php
    require('../classe/modele.php');
    
    //sécuriser
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST["mdp"]);


    //test si les champs sont vides :
    if ($pseudo == NULL OR $mdp == NULL )
    {
        $_SESSION["erreur"] = "rentrez bien toutes les case";
        header('Location: ../vue/connexion.php');
        exit();
    }
    else
    {
        // on récupère une BDD
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

        //on récupère le pseudo dans la BDD
        $reponse = $bdd->prepare('SELECT mdp FROM utilisateur WHERE pseudo =?');
        $reponse->execute([$pseudo]);
        $user = $reponse->fetchObject();
        $reponse->closeCursor();

        if ($reponse)
        {
            if(password_verify($mdp,$user->mdp ))
            {
                $_SESSION['perso'] = new User($pseudo,'','','',$mdp);
                require('../vue/message.php');
            }
            else
            {
                $erreur = "vous vous êtes trompé encore";
                require('../vue/connexion.php');
                exit();
            }
        }
        else
        {
            $erreur = "vous vous êtes trompé re";
            header('Location: ../vue/connexion.php');
            exit();
        }
        
    }