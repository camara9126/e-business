<?php
  require_once("themes/header.php");

if(isset($_POST["editer"])){
    extract($_POST);
    if(editCategorie($_GET["id"],$nom)){
        // return header("Location:?page=categorie");
        unset($_GET["type"]);
    }
}

if(isset($_GET["delete"])){
    if(deletecategorie($_GET["delete"])){
        unset($_GET["type"]);
    }
}

if(isset($_POST["ajouter"])){
    extract($_POST);
    if(ajoutcategorie($nom)){
        unset($_GET["type"]);
    }
}

if(isset($_GET["type"])){
    if(isset($_GET["id"])){
        $categorie = getCategorieById($_GET["id"]);
    }
    require_once("views/adAjoutCategorie.php");
}else{
    require_once("views/adCategorie.php");
}
?>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="col-md-8 card-title mb-0">
                                <h2 style="color:black;">Catégories</h2>
                            </div>
                            <div class="col-md-4 text-right ">
                                <a href="?admin=categorie&type=add" class="btn btn-success">Ajouter</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-arrow-none">
                    <div class="mt-2">

                        <h4>La liste des catégories</h4>
                        <table class="table table-bordered mt-3">
                            <thead class="card-header">
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($categorie as $categorie): ?>
                                <tr>
                                    <th><?= $categorie->id ?></th>    
                                    <td><?= $categorie->nom; ?></td>
                                    <td>
                                        <a href="?admin=adCategorie&type=edit&id=<?= $categorie->id; ?>"
                                            class="btn btn-dark btn-sm" style="border-radius: 25px;">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="?admin=adCategorie&delete=<?= $categorie->id; ?>"
                                            class="btn btn-danger btn-sm" style="border-radius: 25px;">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>