<?php session_start()?>

<?php
   require('../classe/modele.php');
    
    //test si les champs sont vides :
    if ($_POST['pseudo'] == NULL OR $_POST['mdp'] == NULL )
    {
        $_SESSION["erreur"] = "rentrez bien toutes les case";
        header('Location: ../vue/inscription.php');
        exit();
    }
    //test si les 2 mdp correspondent
    elseif ($_POST['mdp'] !== $_POST['mdp_verif'])
    {
        $_SESSION["erreur"] = "les mots de passe ne correspondent pas";
        header('Location: ../vue/inscription.php');
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

        //on vérifie les doublons
        $reponse = $bdd->prepare('SELECT pseudo FROM utilisateur WHERE pseudo =?');
        $reponse->execute([htmlspecialchars($_POST['pseudo'])]);

        //on récupère l'objet qui repond à la condition == $test
        $doublon = $reponse->fetch();     
        
        // on test la condition
        if ($doublon) // il a bien trouvé une instance en double
            {
                echo "doublon ";
                $_SESSION["erreur"] = "ce pseudo existe déjà";
                header('Location: ../vue/inscription.php');
                exit();
            } 
            else // pas de doublon on peut continuer avec la BDD
            {
                require('../traitement/bdd.php');
                //$perso = new User($_POST['pseudo'],$_POST['mdp']);
            }
    }
    ?>




    <!--
        function valid_data($data) {
        $data = trim($data); <!-- a revoir 
        $data = stripslashes($data); <!-- enleve  les / si y en a 2 d\'affilé
        $data = htmlentities($data);<!-- htmlspecialchars
        return $data;
    }-->

