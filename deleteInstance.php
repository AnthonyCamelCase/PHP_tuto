<?php

$id= $_GET['id'];
//on récupère une BDD : avec test try catch
$dsn = 'mysql:host=localhost;dbname=user;'; 
$user = 'root'; 
$password = ''; 
try 
{ 
    $bdddel = new PDO($dsn, $user, $password); 
} 
catch (PDOException $e) 
{ 
    echo 'Connection failed: ' . $e->getMessage(); 
}

$del = $bdddel->prepare('DELETE FROM utilisateur WHERE id >= :id');
$del->bindValue(':id',$id);
$del->execute();

$del->closeCursor(); // Termine le traitement de la requête

header('Location: message.php');
    