<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $titre ?></h1>
    </div>

    <div class="row ">
        <div class="card col-md-10">
            <div class="card-header bg-info">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="m-0 font-weight-bold text-white">Vos informations</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="?page=home" class="btn btn-outline-danger btn-sm">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Prenom<span class="text-danger">*</span></label>
                            <input type="text" readOnly class="form-control" value="<?= $_SESSION['user']->prenom ?>" required name="nom">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Nom<span class="text-danger">*</span></label>
                            <input type="text" readOnly class="form-control" value="<?= $_SESSION['user']->nom ?>" required name="nom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">N° Telephone<span class="text-danger">*</span></label>
                            <input type="text" readOnly class="form-control" value="<?= $_SESSION['user']->tel ?>" required name="tel">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Matricule<span class="text-danger">*</span></label>
                            <input type="matricule" readOnly class="form-control" value="<?= $_SESSION['user']->matricule ?>" required name="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <input type="email" readOnly class="form-control" value="<?= $_SESSION['user']->email ?>" required name="email">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br>