<?php
    $mdp = password_hash($mdp,PASSWORD_DEFAULT);
    
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
    
    //requete préparée :
    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdp) VALUES(:pseudo,:mdp)');
    
    $req->execute(array(
	'pseudo' => $pseudo,
	'mdp' => $mdp,
	));

    $req->closeCursor();

    //passage à la page index
    require('../vue/index.php');
    ?> 

</body>
</html>


