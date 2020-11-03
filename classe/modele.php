<?php

class User
{
    private $_pseudo;
    private $_prenom;
    private $_nom;
    private $_age;
    private $_mdp;
   
    public function __construct($pseudo,$prenom, $nom, $age, $mdp){
        $this->setPseudo($pseudo);
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
        $this->setMdp($mdp);
    }
    //getter
    public function getPseudo(){
        return $this->_pseudo;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getAge(){
        return $this->_age;
    }

    public function getMdp(){
        return $this->_mdp;
    }

    //setter
    private function setPseudo($Pseudo)
    {

        if (empty($Pseudo))
        {

            header('Location: ../vue/inscription.php?erreurPseudo= True');
            exit();  
        }
        else
        {
        $this->_pseudo = htmlspecialchars($pseudo);
        }
    }

    private function setPrenom($prenom)
    {
        if (empty($prenom))
        {  
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

    private function setMdp($mdp)
    {
        
        $this->_age = password_hash(htmlspecialchars($mdp)) ;
    }

};

