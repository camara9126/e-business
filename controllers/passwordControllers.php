<?php

    $titre= 'Mot de passe';

    if (isset($_POST['modifier'])) {
        extract($_POST);
        // var_dump($_POST);

        if (editpassword($_SESSION['user']->id, $newpassword)) {
            $message= 'Modification fait avec succes !';
            $type= 'success';
        } else{
            $message= "Erreur de modification !";
            $type= 'danger';
        }
    }

    require_once("partials/entete.php");

    require_once("views/password.php");

    require_once("partials/pied.php");

?>