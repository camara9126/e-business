

    <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $titre ?></h1>
</div>

<div class="row">
    <div class="card col-md-7">
        <?php if (isset($message)) : ?>
        <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
            <strong><?= $message ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
    </div>
</div>
    
    <!-- Content Row -->
    <!-- <div class="card shadow mb-4 m-auto col-md-12"> -->
        <div class="card-header py-2 m-auto bg-success">
            <div class="row">
                <div class="col-md-10 text-md-right  mr-0">
                    <a href="?page=new&etat=add" class="btn btn-warning">Ajouter</a>
                </div>
            </div>
        </div>
        <!-- <div class="card-body"> -->
            <div class="table-responsive mt-2 mb-3">
                <table class="table table-bordered bg-white" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Quantité stock</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pub as $p): ?>
                        <?php if($p->id_etudiant == $_SESSION['user']->id): ?>
                        <tr>
                            <td><?= $p->nom ?></td>
                            <td><?= $p->prix ?></td>
                            <td><?= $p->stock ?></td>
                            <td>
                                <a href="<?= "images/.".$p->image ?>">
                                    <img src="<?= "images/.".$p->image ?>" width="179px" height="170px" class="img-thumbnail" />
                                </a>
                            </td>
                            <td><?= $p->description ?></td>
                            <td><?= $p->contact ?></td>
                            <td>
                                <a href="?page=new&etat=add&id=<?= $p->id ?>" class="btn btn-outline-info btn-round btn-sm" title="modifié">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href="?page=new&delete=<?= $p->id ?>" title="supprimé">
                                    <i class="fas fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                        <?php endif; ?>
                       <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>
        <!-- </div>   -->


</div>
