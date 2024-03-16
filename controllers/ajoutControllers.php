<?php
    $titre= 'Ajout Produit';

    // ajout produit 
    if (isset($_POST['publier'])) {
        
            extract($_POST);
        // var_dump($_POST);
        
        

        $tmpName= $_FILES['image']['tmp_name'];
        
        $name= time().'.jpg';
        $size= $_FILES['image']['size'];
        $error= $_FILES['image']['error'];
        $tabExtension= explode('.', $name);
        $extension= strtolower(end($tabExtension));
        // tableau des extensions demandé
        $extensions= ['jpg','png','jpeg','jfif'];

        if (in_array($extension, $extensions)) {
            move_uploaded_file($tmpName, "images/.$name");
            
            $annonce= annonce($nom, $prix, $stock, $name, $description, $contact, $categorie_id, $_SESSION['user']->id);
           
            if ($annonce) {
                $_SESSION['pub']= $annonce;
                return header('location:?page=annonce');
                $message= 'Publication reussi !';
                $type= 'success';

            } else{
                $message= 'Erreur: Veuillez reessayer encore !';
                $type= 'danger';
            }
        } 
    }

    // modifier produit 
    if (isset($_POST["editer"])) {
        extract($_POST);

        $tmpName= $_FILES['image']['tmp_name'];
        
        $name= time().'.jpg';
        $size= $_FILES['image']['size'];
        $error= $_FILES['image']['error'];
        $tabExtension= explode('.', $name);
        $extension= strtolower(end($tabExtension));
        // tableau des extensions demandé
        $extensions= ['jpg','png','jpeg','jfif'];

        if (in_array($extension, $extensions)) {
            move_uploaded_file($tmpName, "images/.$name");
        
            $pbi= produitById($id_etudiant);
            
            if (editerProduit($pbi->id, $nom, $prix, $stock, $name, $description, $contact, $categorie_id, $pbi->id_etudiant)) {

                    return header("Location:?page=annonce");
            }
                
        }
    }



    
    if (isset($_GET["id"])) {
        $pbi = produitById($_GET["id"]);
    }
    
    if (isset($_GET["delete"])) {
        if (supprimerProduit($_GET["delete"])) {
          
            return header("Location:?page=annonce");
        }
    }
        
    
    require_once("partials/entete.php"); 

    require_once("views/ajoutform.php");

    require_once("partials/pied.php");

    ?>