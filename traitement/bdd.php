<!DOCTYPE html>
<html>
<head>
     
</head>
 
<body>
    
    <?php
    //on récupère une BDD : avec test try catch
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
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = password_hash(htmlspecialchars($_POST["mdp"]));
    //requete préparée :
    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdp) VALUES(:pseudo,:mdp)');
    
    $req->execute(array(
	'pseudo' => $perso->$pseudo,
	'mdp' => $perso->$mdp,
	));

    //passage à la page message
    require('../vue/message.php');
    ?> 

    

</body>
</html>


