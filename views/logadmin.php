
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-5 col-md-5">
    <?php if (isset($erreur)) : ?>
            <div class="alert alert-danger">
                <strong><?= $erreur ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h1 class="h4 text-gray-900 mb-4">Compte administrateur</h1>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="?page=shop" class="btn btn-outline-info btn-sm">Retour</a>
                                    </div>
                                </div>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Entrer votre matricule" name="matricule" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Entrer votre mot de passe" name="mdp" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Souvenir de
                                            moi</label>
                                    </div>
                                </div>
                                <button type="submit" name="connecter" class="btn btn-outline-success btn-user btn-block">
                                    Se connecter
                                </button>
                                <hr>
                                <div class="form-group">
                                    <a href="?page=sign">Creer un compte</a>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>

</div>

</div>