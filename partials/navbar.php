

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      
      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span>Menu</span>
                  <i class="fas fa-list fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <a class="collapse-item" href="?page=password">
                  <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                    Changer de mot de passe
                  </a>
                  <a class="collapse-item" href="?page=info">
                    infos sécurité
                  </a> 
              </div>
          </li>
          <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-home fa-fw"></i>
                  <span>Home</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <a class="collapse-item" href="?page=new">
                  <i class="fas fa-add fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ajout Produit
                  </a>
                  <a class="collapse-item" href="?page=info">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mes Publications
                  </a> 
              </div>
          </li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($_SESSION['user']->prenom) ?> <?= ucfirst($_SESSION['user']->nom)  ?></span>
                  <img class="img-profile rounded-circle" src="assets/images/profil.jpg">

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="?page=profil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Voir mon profil
                  </a>
                  <!-- <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Parametre
                  </a>
                  <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Deconnexion
                  </a>
              </div>
          </li>

      </ul>

</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Etes-vous sure de vouloir vous deconnecter ?</div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-danger" href="?page=logout">Oui</a>
                </div>
            </div>
        </div>
    </div>