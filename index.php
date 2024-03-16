<?php 

    session_start();

    require_once("models/bdd.php");

        $user= user();
        $categorie= categorie();
        $pub= produits();
        
        if (isset($_GET["page"])) {
            switch($_GET["page"]) {
                case "home": //tableau de bord
                    require_once("controllers/homeControllers.php");
                    break;
                case "login": //connexion
                    require_once("controllers/loginControllers.php");
                    break;
                case "paiement": //paiement
                    require_once("controllers/paiementControllers.php");
                    break;                    
                case "logout": //deconnexion
                    require_once("controllers/logoutControllers.php");
                    break;
                case "new": //nouveau produit
                    require_once("controllers/ajoutControllers.php");
                    break;
                case "categorie": //categorie produit
                        require_once("controllers/categorieControllers.php");
                        break;
                case "search": //modifier un produit
                        require_once("controllers/searchControllers.php");
                        break;
                case "sign": //inscription
                        require_once("controllers/signControllers.php");
                        break;
                case "shop": //page accueil
                        require_once("controllers/searchControllers.php");
                        break;
                case "profil": //profil
                        require_once("controllers/profilControllers.php");
                        break;
                case "password": //mot de passe
                    require_once("controllers/passwordControllers.php");
                    break;
                case "details": //details
                        require_once("controllers/detailsControllers.php");
                        break;
                case "editer": //edtier produit
                    require_once("controllers/editControllers.php");
                    break;
                case "annonce": //contact
                    require_once("controllers/produitControllers.php");
                    break;
                case "info": //info service
                    require_once("views/info.php");
                    break;
                case "autre": //ajout categorie 
                    require_once("controllers/autreControllers.php");
                    break;
                case "apropos": //apropos 
                    require_once("views/apropos.php");
                    break;
                case "guide": //comment ca marche 
                    require_once("views/guide.php");
                    break;
                case "catliste": // liste categories 
                    require_once("controllers/catlisteControllers.php");
                    break;
                case "donaide": // don & aide
                    require_once("views/donaide.php");
                    break;
                case "admin": // don & aide
                    require_once("controllers/adminControllers.php");
                    break;
                default:
                    unset($_GET["page"]);
                    return header("Location:index.php");
                    break;
            }
        } elseif (isset($_GET["admin"])) {
            require_once("themes/header.php");

            switch ($_GET["admin"]) {
                case 'home':
                    require_once("views/adHome.php");
                    break;
                case 'categorie':
                    require_once("views/adCategorie.php");
                    break;
                case 'produit':
                    require_once("views/adProduit.php");
                    break;
                case 'client':
                    require_once("views/adUser.php");
                    break;
                    case 'password':
                        require_once("views/adPassword.php");
                        break;
        } 
        require_once("themes/footer.php");
         }else {
            require_once("controllers/shopControllers.php");
        } 


?>
