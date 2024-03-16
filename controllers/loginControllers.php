<?php

    if (isset($_POST['connecter'])) {

        extract($_POST);

        $user= login($matricule, $mdp);

        if ($user) {
           $_SESSION["user"]= $user; //utilisateur connecté

           if ($user->matricule == "202100383") {

                return header("Location: ?admin=home");

           } else {
                return header('location:?page=home');
           }
            
        } else{
            $erreur='ERREUR:  veuillez finaliser notre abonnement pour vous connecté !';
        }
    }
    require_once("partials/headerlogin.php"); 

    require_once("views/login.php");

    require_once("partials/footerlogin.php");
?>