<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ceci est une page HTML de test</title>
</head>

<body>
    <h2>Page de test</h2>

    <p>
        Cette page contient <strong>uniquement</strong> du code HTML.<br />
        Voici quelques petits tests :<br/>
        <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
        <br/>
        Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>
        <br/>
        <?php
            $age_du_visiteur = 17; // La variable est créée et vaut 17
            $booleen = TRUE; // La variable est modifiée et vaut 23
            $age_du_visiteur = 9; // La variable est modifiée et vaut 55
            echo $age_du_visiteur, $booleen, $booleen;
        ?>
        <br>
        <?php
        $age = 25;

        if($age <= 12)
        {
            echo "Salut gamin !";
        }
        elseif($age <=18)
        {
            echo "Salut l'ado";
        }
        else
        {
            echo "Salut l'adulte";
        }
        ?>
        <?php
            // On crée notre array $prenoms
            $prenoms = ['François', 'Michel', 'Nicole', 'Véronique', 'Benoît'];

            // Puis on fait une boucle pour tout afficher :
            for ($numero = 0; $numero < 5; $numero++)
            {
                echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
            }
            //boucle foreach dans un array
            foreach ($prenoms as $n )
            {
                echo $n . "<br>";
            }
        ?>
        
        <?php
        //boucle foreach dans un array
            $coordonnees = array (
            'prenom' => 'François',
            'nom' => 'Dupont',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Marseille');

            foreach($coordonnees as $cle => $element)
            {
                echo "$cle : $element . <br />";
            }
        ?>

        <?php 
        //imprimer le tableau d'un coup en brut
        print_r($coordonnees)
        ?>
        <br><br>

        
        <?php
        //Liste de 10 avec boucle for
        $i=0;
        while($i<=10)
        {
            echo $i;
            $i++;
        };
        ?>

        <?php
        function ShowID($tab, $i)
        {
            echo $tab[$i],"<br><br>";
        }

        ShowID($prenoms,1);

        function Convert($value)
        {
            $value *=100;
            return $value;
        }

        $newvalue = Convert(52);
        echo $newvalue,"cm <br><br>";
        
        $valeur = 5;
        function Change()
        {
            global $valeur;
            $valeur = 10;
        }
        echo $valeur,"avant la fonction <br> ";
        Change();

        echo $valeur, "après la fonction  <br>";

        function Town($ville)
        {
            global $coordonnees;
            $coordonnees["ville"] = $ville;
        }

        Town("cocolint");
        echo $coordonnees["ville"];

        //phpspecialchars : echapper la syntaxe html
        //password_hash : créer une clé de hachage pour un mdp
        ?>

        
    </p>

    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>

    

</body>

</html>