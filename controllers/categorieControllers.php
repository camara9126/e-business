<?php
    

    if (isset($_GET['nom'])) {
        $cat= categorieByNom($_GET['nom']);
            // var_dump($cat);
            // die();

    }

    require_once("views/categorie.php");


?>