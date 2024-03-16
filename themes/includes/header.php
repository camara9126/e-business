<header id="navbar">
      <!-- Jumbotron -->
      <div class="p-3 text-center bg-success border-bottom" >
        <div class="container">
          <div class="row gy-3">
            <!-- Left elements -->
            <div class="col-lg-2 col-sm-4 col-4">
                <a class="navbar-brand" href="assets/images/logo.png" title="cliquer pour voir notre logo">
                    <img src="assets/images/logo.png" height="45" width='55'/>
                  </a>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                  <div class="d-flex float-end ">
                    <a href="?page=shop" class="nav-link ">
                      <i class="fas fa-house m-1 me-md-2 text-warning floating"></i>
                        <p class="d-none d-md-block mb-0 text-light">Accueil</p>
                    </a>
                    <?php if(isset($_SESSION['user'])): ?>
                    <a href="?page=home" class="nav-link">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-warning"></i>
                      <p class="d-none d-md-block mb-0 text-light"><?= $_SESSION['user']->prenom ?></p>
                    </a>
                    <?php else: ?>
                      <a href="?page=sign" class="nav-link">
                        <i class="fas fa-user-alt m-1 me-md-2 text-warning">+</i>
                        <p class="d-none d-md-block mb-0 text-light">S'inscrire</p>
                      </a>
                      <a href="?page=login" class="nav-link">
                      <i class="fa-solid fa-right-to-bracket m-1 me-md-2 text-warning"></i>
                      <p class="d-none d-md-block mb-0 text-light">Se connecter </p>
                    </a>
                  <?php endif; ?>
                  </div>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="col-lg-5 col-md-12 col-12" >
              <div class="input-group float-center">
                <div class="form-outline">
                
                </div>
              </div>
            </div>
            <!-- Right elements -->
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </header><hr>