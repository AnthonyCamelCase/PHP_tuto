<?php

class User
{

    private $_prenom;
    private $_nom;
    private $_age;
   
    public function __construct($prenom, $nom, $age){
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
    }
    //getter
    public function getPrenom(){
        return $this->_prenom;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getAge(){
        return $this->_age;
    }

    //setter
    private function setPrenom($prenom)
    {
        if (empty($prenom))
        {
            header('Location: index.php?erreurNom= True');
            exit();  
        }
        else
        {
        $this->_prenom = htmlspecialchars($prenom);
        }
    }

    private function setNom($nom)
    {
         if (empty($nom))
        {
            header('Location: index.php?erreurNom= True');
            exit();      
        }
        else
        {
        $this->_nom = htmlspecialchars($nom);
        }
        
    }

    private function setAge($age)
    {
        $this->_age = htmlspecialchars($age);
    }

};

