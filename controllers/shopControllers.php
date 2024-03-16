
<?php

    if (isset($_GET["etat"]) && $_GET["etat"] == "add") {
        
        return header('Location:?page=contact');
    }

   
    require_once("views/boutique.php");

?>




