    
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $titre ?></h1>
            </div>

            <div class="row mb-4 ">
                <div class="card col-md-6 m-auto">
                    <div class="card-header bg-success">
                        <div class="row ">
                            <div class="col-md-8">
                                <h4 class="m-0 font-weight-bold text-white">Formulaire <?= isset($pbi) ? "d'edition de " : "d' ajout de " ?>produit</h4>
                            </div>
                            <div class="col-md-4 text-md-right">
                                <a href="?page=annonce" class="btn btn-danger">Annuler</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php if(isset($pbi)): ?>
                                <input type="hidden" name="id_etudiant" value="<?= $pbi->id_etudiant?>"  class="form-control">
                            <?php endif;?>
                            <div class="form-group">
                                <div class="list-group">
                                    <h5 class="list-group-item list-group-item-action text-center" aria-current="true">
                                        Categories <span class="text-danger"> *</span>
                                    </h5>
                                    <select name="categorie_id" id="" class="form-control" required>
                                        <option value="">Veuillez choisir une categorie</option>
                                        <?php foreach($categorie as $c) :?>
                                            <option value="<?= $c->id ?>"><?= strtoupper($c->nom) ?></option>
                                        <?php endforeach ;?>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nom <span class="text-danger"> *</span></label>
                                        <input type="text" maxlength="15" name="nom" value="<?= isset($pbi) ? $pbi->nom : '' ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Quantité de stock <span class="text-danger"> *</span></label>
                                        <input type="number" name="stock" value="<?= isset($pbi) ? $pbi->stock : '' ?>" min="1" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prix <span class="text-danger"> *</span></label>
                                        <input type="number" name="prix" value="<?= isset($pbi) ? $pbi->prix : '' ?>"  class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ajouter photo <span class="text-danger"> *</span></label>
                                        <input type="file" name="image" value="<?=  isset($pbi) ?'images./'. $pbi->image : '' ?>"  class="form-control file-upload-info" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label for="">Description produit <span class="text-danger"> *</span></label><br>
                                <textarea name="description"  cols="40" rows="5"><?= isset($pbi) ? $pbi->description : '' ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="contact" maxlength="9" value="<?= isset($pbi) ? $pbi->contact : $_SESSION['user']->tel ?>"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <?php if(isset($pbi)): ?>
                                    <input type="hidden" name="id_etudiant" value="<?=  isset($pbi) ? $pbi->id : $_SESSION['user']->id ?>" class="form-control">
                                <?php endif; ?>
                            </div><br>
                        <?php if(isset($pbi)): ?>
                        <button type="submit" name="editer" class="btn btn-outline-warning">Modifier</button>
                        <?php else: ?>
                        <button type="submit" name="publier" class="btn btn-outline-success">Publier</button>
                        <?php endif; ?>
                        </form>
                    </div>
                    
                </div>
                
                <?php if(isset($pbi)): ?>
                
                <?php else : ?>
                <div class="col-md-4 mt-5">       
                    <ul class="navbar-nav mr-auto border">
                        <h4 class="m-0 font-weight-bold text-dark">Régles pour publier votre annonce :</h4>
                        <li class="nav-item dropdown"><h5>Respecter les champs de saisis (<span class="text-danger">*</span>).</h5></li>
                        <li class="nav-item dropdown"><h5>Ne vendez pas d'objets ou de services illégaux .</h5></li>
                        <li class="nav-item dropdown"><h5>Ne publier pas la méme annonce plusieurs fois .</h5></li>
                    </ul> 
                </div>   
                <?php endif; ?>
            </div><br><br>   
        