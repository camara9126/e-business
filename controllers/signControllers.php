<?php

if (isset($_POST['Valider'])) {

    extract($_POST);

    $new= inscription($prenom,$nom,$matricule,$email,$tel,$uasbc);

    if ($new) {
        $_SESSION["new"]= $new;
        return header('Location: ?page=paiement');
    } else {
        require_once("controllers/shopControllers.php");
    }

} 

    require_once("partials/headerlogin.php");

    require_once("views/sign.php");
    
    require_once("partials/footerlogin.php");
    
?>