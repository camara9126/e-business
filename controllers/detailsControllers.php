<?php


    if(isset($_GET["id"])){
        
        $p= produitById($_GET['id']);

    }

    require_once("views/details.php");

?>