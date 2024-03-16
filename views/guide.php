<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guide</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="assets/images/logo.png">
    
</head>
<body>


    <div class="container-fluid">
        
    <?php require_once("themes/includes/header.php"); ?>
        <h3 class="text-success text-center">Guide complet</h3>
        <div class="row mt-5 ml-3">
            <div class="col-md-8">
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="assets/images/img1.jpg" width="80" height="50" class="mr-3" alt="...">
                        <div class="media-body">
                        <h3 class="mt-0 mb-1 text-warning">Creer un compte</h3>
                        <p><big>Pour pouvoir publier un produit ou service, vous devrez vous connectez d'abord. Ensuite, remplire le formulaire d'inscription</big></p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img src="assets/images/img2.jpg" width="80" height="50" class="mr-3" alt="...">
                        <div class="media-body">
                        <h3 class="mt-0 mb-1 text-warning">Vendre un article</h3>
                        <p><big>Il faut bien détailler la description de ton produit ou service pour bien le vendre. L'image du produit ou service doit etre aussi claire et visible.</big></p>
                        </div>
                    </li>
                    <li class="media">
                        <img src="assets/images/img3.jpg" width="80" height="50" class="mr-3" alt="...">
                        <div class="media-body">
                        <h3 class="mt-0 mb-1 text-warning">Faire une recherche</h3>
                        <p><big>Le client a la possibilité de faire une recherche s'il ne trouve pas son besoin avec la barre de <b>recherche par catégorie</b>.</big></p>
                        </div>
                    </li>
                    <li class="media">
                        <img src="assets/images/img4.jpg" width="80" height="50" class="mr-3" alt="...">
                        <div class="media-body">
                        <h3 class="mt-0 mb-1 text-warning">Contacter un vendeur</h3>
                        <p><big>Le client, une fois trouver un produit voulu, peut contacter le vendeur à travers son numéro de contacte via <b>Whatsapp</b> ou <b>Téléphonique</b>.</big></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
            <a href="?page=shop" type="button" class="btn btn-outline-warning">Retour</a>
            </div>
        </div>

        <?php require_once("themes/includes/footer.php"); ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>