<?php
    require_once("themes/header.php");
?>

<div class="card mt-3 mb-4">

    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-8">
                    <h2 style="color:black;">Produits</h2>
                </div>
                <div class="col-md-4 text-right">
                    <a href="?admin=produit&type=add" class="btn btn-success btn-xm">Ajouter</a>
                </div>
            </div>
            <div class="dropdown dropdown-arrow-none">
                <div class="mt-2">
                    <h3>La liste des produits</h3>
                    <table class="table table-bordered">
                        <thead class="card-header">
                            <tr>
                                <th>Nom</th>
                                <th>Prix unitaire</th>
                                <th>Description</th>
                                <th>Q.Stock</th>
                                <th>Catégorie</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pub as $produit): ?>
                            <tr>
                                <td><?= ucfirst($produit->nom); ?></td>
                                <td><?= $produit->prix; ?></td>
                                <td><?= ucfirst($produit->description); ?></td>
                                <td><?= $produit->stock; ?></td>
                                <td><?= $produit->categorie_id; ?></td>
                                <td>
                                    <a href="<?= "images/.".$produit->image ?>">
                                        <img src="<?= "images/.".$produit->image ?>" width="70" height="50" class="img-thumbnail" />
                                    </a>
                                </td>
                                <td>
                                    <a href="?admin=adProduit&type=add&id=<?=$produit->id; ?>" class="btn btn-dark btn-sm"
                                        style="border-radius: 25px;">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="?admin=adProduit&delete=<?=$produit->id; ?>" class="btn btn-danger btn-sm"
                                        style="border-radius: 25px;">
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