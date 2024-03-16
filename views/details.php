<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lien de contact</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="assets/images/logo.png">
  </head>
<body class="bg-warning">

    <?php require_once("themes/includes/header.php"); ?>

    <div class="container col-md-6 mt-5 card bg-light mb-2">
        <!-- content -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col text-md-right">
              <a href="?page=shop" class="btn btn-danger">Retour</a>
          </div>
        </div>
        <div class="row gx-5">
          <aside class="col-lg-6">
            <div class="border rounded-4 mb-3 d-flex justify-content-center">
              <a data-fslightbox="mygalley" class="rounded-4" data-type="image" href="">
                <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="<?= isset($p) ? "images/.".$p->image : '' ?>" />
              </a>
            </div>
          </aside>
        <main class="col-lg-6">
      
            <?php if(isset($p)):?>
                <input type="hidden" name="id" value="<?= $p->id ?>">
            <?php endif; ?>
              <div class="ps-lg-3">
                <h4 class="title text-dark">
                <?= isset($p) ? $p->nom : '' ?>
                </h4>
                <div class="d-flex flex-row my-3">
                  <div class="text-warning mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <mark>Reste <?= isset($p) ? $p->stock : '' ?> en stock</mark>
                  </div>
                </div>
                <div class="mb-3">
                  <span class="h5"><?= isset($p) ? $p->prix : '' ?> <sup>FCFA</sup></span>
                  <span class="text-muted">/unité</span>
                </div>

                <p>
                <?= isset($p) ? $p->description : '' ?>
                </p>
                <h5>Contacter via :</h5>
              </div>
              <a href="https://wa.me/+221<?= isset($p) ? $p->contact : '' ?>" class="btn btn-success shadow-0" target="_blank">
                  <i class="fa-brands fa-whatsapp text-400"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
              <b class=" border border-secondary py-2 icon-hover px-3">
                <i class="me-1 fa fa-solid fa-phone text-danger"> <?= isset($p) ?$p->contact : '' ?></i>
              </b>
        </main>
    </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>




  

