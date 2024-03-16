<?php

     $titre= 'Mes Annonces';

      if (isset($_GET["etat"]) && $_GET["etat"] == "add") {
            require_once("views/ajoutform.php"); 
      }            
     
     require_once("partials/entete.php"); 

     require_once("views/produitform.php");
 
     require_once("partials/pied.php");
?>