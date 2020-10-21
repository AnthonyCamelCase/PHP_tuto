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
        ?>
        <?php
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
        print_r($coordonnees)
        ?>
    </p>

    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>

    

</body>

</html>