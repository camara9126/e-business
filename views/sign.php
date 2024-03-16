

<div class="container col-md-5 mt-5 mb-4 card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8 text-center">
                <h4>Formulaire d'inscription</h4>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=shop" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p>Veuillez fournire les informations se trouvant sur votre carte étudiant.</p>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Prenom <span class="text-danger"> *</span></label>
                        <input type="text" name="prenom" value="" required  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nom <span class="text-danger"> *</span></label>
                        <input type="text" name="nom" value="" required  class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Matricule <span class="text-danger"> *</span></label>
                        <input type="text" maxlength="10" name="matricule" required  class="form-control" placeholder="Votre matricule">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                         <label for="">Telephone <span class="text-danger"> *</span></label>
                         <input type="tel" name="tel" maxlength="9" pattern=[0-9]+ required  class="form-control"placeholder="Votre contact">
                    </div>
                </div>
            </div>
            <div class="form-group">
               <label for="email">Email pédagogique <span class="text-danger"> *</span></label>
                <input type="mail" name="email" min required  class="form-control" placeholder="@zig.univ.sn">
            </div>
            <div class="form-group">
                <input type="password" name="uasbc" class="form-control" value="">
            </div>
            <button type="submit" name="Valider" class="btn btn-outline-success">Valider</button>
        </form>
    </div>
</div>


<script src="assets/js/script.js"></script>




   