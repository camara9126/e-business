
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS-BC</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets2/css/responsive.css">
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="assets/images/logo.png">

  </head>
<body class="bg-light">
        <!-- top button  -->
        <a href="#accueil" id="top">Top</a>
        <!-- top button  -->

    <!--Main Navigation-->
    <header id="navbar" class="">
      <!-- Jumbotron -->
      <div class="p-2 text-center bg-success border-bottom" >
        <div class="container">
          <div class="row gy-3">
            <!-- Left elements -->
            <div class="col-lg-2 col-sm-4 col-4">
                <a class="navbar-brand" href="assets/images/logo.png">
                    <img src="assets/images/logo.png" height="45" width='55'/>
                  </a>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="col-lg-3 col-md-6" id="categorie">
              <!-- <div class="input-group float-center"> -->
                <div class="form-outline pt-2">
                  <!-- <nav class="navbar navbar-light bg-light"> -->
                      <form action="" method="post">
                            <div class="input-group">
                                <input type="text" name="nom" class="form-control" placeholder="Rechercher une annonce">
                                <button type="submit" name="search" class="btn btn-primary d-flex d-md-inline">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                      </form> 
                  <!-- </nav>   -->
                </div>
              <!-- </div> -->
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="order-left col-lg-5 col-sm-5 col-8">
                <div class="d-flex float-end">
                  <a href="?page=shop" class="nav-link ">
                    <i class="fas fa-house m-1 me-md-2 text-warning floating"></i>
                      <p class="d-none d-md-block mb-0 text-light">Accueil</p>
                  </a>
                  <a href="?page=apropos" class="nav-link">
                  <i class="fas fa-star m-1 me-md-2 text-warning floating"></i>
                    <p class="d-none d-md-block mb-0 text-light">A propos </p>
                  </a>
                  <?php if(isset($_SESSION['user'])): ?>
                  <a href="?page=home" class="nav-link">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-warning"></i>
                    <p class="d-none d-md-block mb-0 text-light"><?= ucfirst($_SESSION['user']->prenom) ?></p>
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
            <!-- Right elements -->
          </div>
        </div>
      </div>
      <!-- Jumbotron end-->
    </header><hr>
    <!--Main Navigation-->

  <div class="container-fluid" id="accueil">

    <!-- pub  -->
    <section class="mb-0 pt-4 my-4">
      <div class="text-light ">
        <div class="row bg-warning">
          <div class="col-md-3 mt-5">
              <!-- categorie  -->
              <nav class="navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <h5 class="list-group-item bg-success text-white" aria-current="false">
                            Categories disponibles:
                        </h5>
                      </a>
                      <div class="dropdown-menu">
                      <?php foreach($categorie as $c) :?>
                            <a class="dropdown-item" href="?page=categorie&nom=<?=$c->nom ?>"><?= ucwords($c->nom) ?></a>
                        <?php endforeach; ?>
                      </div>
                    </li>
                </ul> 
              </nav>
              <!-- categorie  end-->
          </div>
          <div class="col-md-7">
              <!-- carousel  -->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/images/img_a.jpg" width="auto" height="300" class="d-block w-100" alt="...">
                      <div class="carousel-caption mb-0 text-light">
                          <p class="mb-0">
                            <strong style="font-style:oblique; font-size:30px">Produits/services avec divers options .</strong>
                          </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="assets/images/pub2.jpg" width="auto" height="300" class="d-block w-100" alt="...">
                      <div class="carousel-caption mb-0 text-light">
                          <p class="mb-0">
                            <strong style="font-style:oblique; font-size:30px">Achat en toute simplicité .</strong>
                          </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="assets/images/pub3.jpg" width="auto" height="300" class="d-block w-100" alt="...">
                      <div class="carousel-caption mb-0 text-warning">
                          <p class="mb-0">
                            <strong style="font-style:oblique; font-size:30px">Achat avec confiance et sécurité .</strong>
                          </p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </button>
              </div>
                <!-- carousel  end-->
          </div>
          <div class="col-md-2 mt-4">
            <div class="list-group">
              <!-- <button type="button" class="list-group-item list-group-item-action  bg-success" aria-current="true">
                <a class="text-white" href="?page=info">Info sécurité</a>
              </button> -->
              <!-- <button type="button" class="list-group-item list-group-item-action bg-success">
                <a class="text-white" href="#">Assistance 24H/24</a>
              </button> -->
              <button type="button" class="list-group-item list-group-item-action bg-success">
                <a href="https://wa.me/+221762808839" class="text-white" target="_blank"><b>Assistance whatsapp</b></a>
              </button>
              <button type="text" class="list-group-item list-group-item-action bg-success">
                <i class="fa fa-solid fa-phone text-light"></i> &nbsp;
                <span class="text-white">Contactez-nous au
                <h5 class="text-center">76 280 88 39</h5></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- pub end -->

    <!-- Email sms sSart   -->
    <div class="col-md-10">
      <?php if(isset($email)): ?>
      <p class="text-center">
        <?= $sms ?>
      </p>
      <?php endif;?>
    </div>
    <!-- Email sms End  -->
            
    <!-- Recherche similaire-->
    <section class="bg-warning">
      <?php if(isset($cs) && count($cs) >=1):?>
          <header class="mb-4">
            <h3 class="text-white text-center">Recherche Similaire</h3>
          </header>
          <div class="row m-auto">
            <?php foreach($cs as $c): ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card px-4 border shadow-0 mb-4 mb-lg-2">
                <div class="mask px-2" style="height: 50px;">
                  <div class="d-flex justify-content-between">
                    <a href="#"><i class="fas fa-heart text-warning fa-lg float-end pt-3 m-2"></i></a>
                  </div>
                </div>
                <a href="?page=details&etat=add&id=<?=  $c->id ?>" class="text-center">
                  <img src="<?= "images/.".$c->image ?>" height="200" width="200"/>
                </a>
                <div class="card-body d-flex flex-column pt-3 border-top">
                  <a href="?page=details&etat=add&id=<?=  $c->id ?>" class="nav-link"></a>
                  <div class="price-wrap mb-2">
                    <p> <?= ucwords($c->nom) ?> </p>
                    <mark><b class=""><?= $c->prix ?><span> <sup>FCFA</sup></span></b></mark>
                  </div>
                  <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 m-auto">
                    <a href="?page=details&etat=add&id=<?= $c->id ?>" class="btn btn-info shadow-0 me-1">Details</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
      <?php else:?>
            <div class="row">
              <div class="col-md-10">
              <?php if (isset($message)) : ?>
                  <!-- <h3 class="text-center text-light"><?= $nbr_page ?></h3> -->
              <?php endif; ?>
              </div>
            </div>
      <?php endif; ?>
        
    </section>
    <!-- Recherche similaire end-->

     <!-- Start Carousel  -->

     <section>
        <div class="main-instagram owl-carousel owl-theme">
          <?php if($pub): ?>
            <!-- <div class="row mb-4 m-auto"> -->
            <?php foreach($pub as $p): ?>
            <!-- <div class="col-lg-2 col-md-4 col-sm-6 pt-2 mt-3 mb-1"> -->
              <div class="card px-4 border shadow-0 mb-3 mb-lg-2 m-auto" id="prod">
                <div class="mask px-2" style="height: 50px;">
                  <div class="d-flex justify-content-between">
                    <!-- <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a> -->
                  </div>
                </div>
                <a href="?page=details&etat=add&id=<?=  $p->id ?>" class="text-center">
                  <img src="<?= "images/.".$p->image ?>" height="200" width="200"/>
                </a>
                <div class="card-body d-flex flex-column pt-3 border-top">
                  <div class="price-wrap mb-2">
                    <p class="" id="text"><?= strtoupper($p->nom) ?></p>
                    <mark><b class="card-text"><?= $p->prix ?><sup> FCFA</sup></b></mark>
                  </div>
                  <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 m-auto">
                    <a href="?page=details&etat=add&id=<?= $p->id ?>" class="btn btn-primary shadow-0 me-1">Details</a>
                  </div>
                </div>
              </div>
            <!-- </div> -->
            <?php endforeach; ?>
            <!-- </div> -->
          <?php endif ?>
        </div>
     </section>
        

    <!-- End Carousel  -->

    <!-- Products start -->
    <section class="pro">
          <?php if($pub): ?>
          <div class="row mb-4 m-auto">
            <?php foreach($pub as $p): ?>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-3 pt-2 mt-3 mb-1">
              <div class="card px-4 border shadow-0 mb-3 mb-lg-2 m-auto" id="prod">
                <div class="mask px-2" style="height: 50px;">
                  <div class="d-flex justify-content-between">
                    <!-- <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a> -->
                  </div>
                </div>
                <a href="?page=details&etat=add&id=<?=  $p->id ?>" class="text-center">
                  <img src="<?= "images/.".$p->image ?>" height="100" width="100"/>
                </a>
                <div class="card-body d-flex flex-column pt-3 border-top">
                  <div class="price-wrap mb-2">
                    <p class="" id="text"><?= strtoupper($p->nom) ?></p>
                    <mark><b class="card-text"><?= $p->prix ?><sup> FCFA</sup></b></mark>
                  </div>
                  <div class="card-footer d-flex align-items-end pt-0 px-0 pb-0 m-auto">
                    <a href="?page=details&etat=add&id=<?= $p->id ?>" class="btn btn-primary shadow-0 me-1">Details</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
    </section><hr>
    <!-- Products end-->

    <!-- test Products  -->
    <!-- <section class="mt-4 mb-3" id="1">
        <div class="container text-dark">
          <header class="">
            <h3 class="section-title">Electroniques</h3>
          </header>
          <?php if($pub): ?>
          <div class="row gy-3"> -->
            <!-- col.// -->
            <!-- <?php foreach($pub as $p): ?>
            <?php if($p->categorie_id == 1): ?>
            <div class="col-lg-2 col-md-3 col-4">
              <a href="?page=details&etat=add&id=<?= $p->id ?>" class="img-wrap">
              <img src="<?= "images/.".$p->image ?>" height="200" width="200" class="img-thumbnail"  />
              </a>
            </div>
            <?php endif; ?>
            <?php endforeach; ?> -->
            <!-- col.// -->
          <!-- </div>
          <?php endif; ?>
        </div>
    </section> -->

    <!-- pagination -->
    <!-- <section class="d-flex ">
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
        <?php
            for ($i=1; $i <= $nbr_page; $i++) { 
              echo "<a href='?page=shop'>$i</a>&nbsp;";
            }
        ?>
    </section> -->
    <!-- pagination -->

    <!-- Feature pour UAS-BC-->
    <section class="mt-5 " id="apropos">
      <div class="container text-dark pt-3">
        <header class="pt-4 pb-3">
          <h3>Pourquoi nous choisir ? </h3>
        </header>

        <div class="row mb-4">
          <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
              <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-camera-retro fa-2x fa-fw text-success floating"></i>
              </span>
              <figcaption class="info">
                <h6 class="title">Prix raisonables</h6>
                <p> prix qui est justifié et approprié par rapport à la valeur, à la qualité et aux caractéristiques d'un produit ou d'un service donné.</p>
              </figcaption>
            </figure>
            <!-- itemside // -->
          </div>
          <!-- col // -->
          <!-- <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
              <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-star fa-2x fa-fw text-success floating"></i>
              </span>
              <figcaption class="info">
                <h6 class="title">Meilleurs qualitées</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
              </figcaption>
            </figure> -->
            <!-- itemside // -->
          <!-- </div> -->
          <!-- col // -->
          <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
              <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-users fa-2x fa-fw text-success floating"></i>
              </span>
              <figcaption class="info">
                <h6 class="title">Satisfaction client</h6>
                <p>L'achat d'un produit se fait en toute simplicité. Achat aprés contact et paiement aprés l'examen du produit.</p>
              </figcaption>
            </figure>
            <!-- itemside // -->
          </div>
          <!-- col // -->
          <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
              <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-thumbs-up fa-2x fa-fw text-success floating"></i>
              </span>
              <figcaption class="info">
                <h6 class="title">Clients satisfaits</h6>
                <p>Fidélité et Répétition des Achats avec la confiance et une relation continue avec les vendeurs.</p>
              </figcaption>
            </figure>
            <!-- itemside // -->
          </div>
          <!-- col // -->
          <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
              <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-box fa-2x fa-fw text-success floating"></i>
              </span>
              <figcaption class="info">
                <h6 class="title">Divers articles</h6>
                <p> Propose une variété d'articles répond à une large gamme de besoins et de préférences des clients. Offre une diversité d'options que chaque client peut trouver quelque chose qui lui convient.</p>
              </figcaption>
            </figure>
            <!-- itemside // -->
          </div>
          <!-- col // -->
        </div>
      </div>
      <!-- container end.// -->
    </section>
    <!-- Feature end-->
    
    <!-- Footer -->
    <section class="footer">
        <footer class="text-center text-lg-start text-muted bg-success mt-3">
          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start pt-4 pb-3">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-12 col-lg-3 col-sm-12 mb-2">
                  <!-- Content -->
                  <a href="assets/images/logo.png"  class="text-warning h3">
                  <img src="assets/images/logo.png" width="90" height="50" alt="">
                  </a>
                  <p class="mt-1 text-white">
                    © 2023 Copyright: <mark>uasbc.shop</mark>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                  <!-- Links -->
                  <h6 class="text-uppercase text-white fw-bold mb-2">
                    Store
                  </h6>
                  <ul class="list-unstyled mb-4">
                    <li><a class="text-white-50" href="?page=apropos">A propos de nous</a></li>
                    <li>
                      <a class="text-white-50" href="#"><i class="fa fa-solid fa-phone text-light"></i> &nbsp;
                      <span class="text-white-50">76 280 88 39</span></a>
                    </li>
                    <li><a class="text-white-50" href="?page=guide">Comment ça marche ?</a></li>
                  </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                  <!-- Links -->
                  <h6 class="text-uppercase text-white fw-bold mb-2">
                    Information
                  </h6>
                  <ul class="list-unstyled mb-4">
                    <li>
                      <a href="https://wa.me/+221762808839" class="text-white-50" target="_blank">
                      <i class="fa-brands fa-whatsapp text-100"></i> Centre d'assistance
                      </a>
                    </li>
                    <li><a class="text-white-50" href="?page=info">Info sécurité</a></li>
                    <li>
                      <a class="text-white-50" href="mailto:uasbc23@gmail.com"><b>Email:</b></a>
                    </li>
                  </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2"> 
                  <!-- Links -->
                  <h6 class="text-uppercase text-white fw-bold mb-2">
                      Support
                  </h6>
                  <ul class="list-unstyled mb-4">
                    <li><a class="text-white-50" href="?page=donaide" target="_blank">Don & aide</a></li>
                    <li><a class="text-white-50" href="views/condition&politique.php#condition" target="_blank">Conditions d'utilisation</a></li>
                    <li><a class="text-white-50" href="views/condition&politique.php#condition" target="_blank">Politiques de confidentialité</a></li>
                    <!-- <li><a class="text-white-50" href="?page=info">My orders</a></li> -->
                  </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-12 col-sm-12 col-lg-3">
                  <!-- Links -->
                  <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
                  <p class="text-white">Restez informé des dernières mises à jour sur nos offres et services</p>
                  <form action="" method="post">
                    <div class="input-group mb-3">
                      <input type="email" name="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
                      <button class="btn btn-light border shadow-0" type="submit" name="join" id="button-addon2" data-mdb-ripple-color="dark">
                        Join
                      </button>
                    </div>
                  </form>
                  
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          <!-- Section: Links  -->

          <div class="">
            <div class="container">
              <div class="d-flex justify-content-between py-1 border-top">
                <!--- payment --->
                <div>
                  <h6 class="text-light">Partenaires :</h6>
                  <a href="http://www.sunucode.com" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/sunucode.jpg" width="70" height="60" alt="page officiel de sunucode">
                  </a>
                  <a href="http://www.uasz.sn" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/logo_uasz.jpg" width="65" height="45" alt="page officiel de l'uasz">
                  </a>
                </div>
                <!--- payment --->
              </div>
            </div>
          </div>
        </footer>
    <!-- Footer -->
    </section>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets2/js/jquery.superslides.min.js"></script>
    <script src="assets2/js/bootstrap-select.js"></script>
    <script src="assets2/js/inewsticker.js"></script>
    <script src="assets2/js/bootsnav.js."></script>
    <script src="assets2/js/images-loded.min.js"></script>
    <script src="assets2/js/isotope.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/baguetteBox.min.js"></script>
    <script src="assets2/js/form-validator.min.js"></script>
    <script src="assets2/js/contact-form-script.js"></script>
    <script src="assets2/js/custom.js"></script>

  </body>
</html>