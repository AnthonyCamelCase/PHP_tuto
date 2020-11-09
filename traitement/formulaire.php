
<?php  
    require("../classe/CRUDManager.php");
    $a = new CRUDManager;
    $a->inscription();
    ?>

    <!--
        function valid_data($data) {
        $data = trim($data); <!-- a revoir 
        $data = stripslashes($data); <!-- enleve  les / si y en a 2 d\'affilé
        $data = htmlentities($data);<!-- htmlspecialchars
        return $data;
    }-->