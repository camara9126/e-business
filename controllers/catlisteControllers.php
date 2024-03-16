<?php

if (isset($_POST['ajout'])) {

    extract($_POST);
    
    if (ajoutcategorie($id, $nom)) {
         return header('Location:?page=new');
    }
}



require_once("partials/entete.php"); 

require_once("views/catliste.php");

require_once("partials/pied.php");

?>