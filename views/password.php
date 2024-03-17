
    <div class="container-fluid">

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
            <div class="card-header bg-info">
                <h4 class="text-white">Modification de Mot de passe</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Ancien Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" name="password" placeholder="Entrer votre ancien mot de passe" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Nouveau Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" name="newpassword" placeholder="Entrer le nouveau mot de passe" class="form-control" required>
                    </div>
                    <button type="submit" name="modifier" class="btn btn-warning">Modifier</button>
                </form>
            </div>
        </div>
            