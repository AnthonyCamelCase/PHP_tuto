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
    
    //requete préparée :
    $req = $bdd->prepare('INSERT INTO utilisateur(prenom,nom,age) VALUES(:prenom,:nom,:age)');
    
    $req->execute(array(
	'prenom' => $perso->getPrenom(),
	'nom' => $perso->getNom(),
	'age' => $perso->getAge(),
	));

    //passage à la page message
    require('message.php')
    ?> 

    <!-- function valid_data($data) {
        $data = trim($data); <!-- a revoir 
        $data = stripslashes($data); <!-- enleve  les / si y en a 2 d\'affilé
        $data = htmlentities($data);<!-- htmlspecialchars
        return $data;
    }-->

</body>
</html>


