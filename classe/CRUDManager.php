<?php session_start()?>

<?php
require_once ('DB.php');
require_once ('User.php');

class CRUDManager extends DB
{
    public function inscription()
    {   
        //sécuriser la donnée :
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST["mdp"]);
        $mdp_verif = htmlspecialchars($_POST["mdp_verif"]);
        
        //test si les champs sont vides :
        if ($pseudo == NULL OR $mdp == NULL )
        {
            $erreur = "rentrez bien toutes les case";
            header('Location: ../vue/inscription.php');
            exit();
        }
        //test si les 2 mdp correspondent : 
        elseif ($mdp !== $mdp_verif)
        {
            $erreur = "les mots de passe ne correspondent pas";
            header('Location: ../vue/inscription.php');
            exit();
        }
        else
        {   
            $bdd = DB::connect();
            var_dump($pseudo);
            var_dump($bdd);
            //on vérifie les doublons
            $reponse = $bdd->prepare('SELECT pseudo FROM utilisateur WHERE pseudo =?');
            
            $reponse->execute([$pseudo]);

            //on récupère l'objet qui repond à la condition == $test
            $doublon = $reponse->fetch();     
            
            // on test la condition
            if ($doublon) // il a bien trouvé une instance en double
            {
                    echo "doublon ";
                    $erreur = "ce pseudo existe déjà";
                    require('../vue/inscription.php');
                    
            } 
            else // pas de doublon on peut continuer avec la BDD
            {                   
                    $mdp = password_hash($mdp,PASSWORD_DEFAULT);          
                    //requete préparée :
                    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdp) VALUES(:pseudo,:mdp)');
                    $req->execute(array(
                    'pseudo' => $pseudo,
                    'mdp' => $mdp,
                    ));
                    $req->closeCursor();
                    require ('../vue/index.php'); 
            }    
        }
    } 
    
    public function connexion()
    {
        //sécuriser
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST["mdp"]);
        

        //test si les champs sont vides :
        if ($pseudo == NULL OR $mdp == NULL )
        {
            $erreur = "rentrez bien toutes les case";
            require('../vue/connexion.php');
            exit();
        }
        else
        {
            $bdd = $this->connect("user");

            //on récupère le pseudo dans la BDD
            $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo =?');
            $reponse->execute([$pseudo]);
            $user = $reponse->fetch();
            
            if ($reponse)
            {
                if(password_verify($mdp,$user["mdp"]))
                {
                    $_SESSION['perso']=new User($user);   
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
                require('../vue/connexion.php');
                exit();
            }
            $reponse->closeCursor();
        }
    }
}