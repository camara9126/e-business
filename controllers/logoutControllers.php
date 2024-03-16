<?php
   
    // supression de la variable
    unset($_SESSION['user']);

    // destruction 
    session_destroy();
    return header('Location:?page=shop');

?>