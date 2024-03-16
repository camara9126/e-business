<div class="container-fluid">
 

  <!-- Content Row -->

    <div class="row mb-4">
        <div class="ml-1 card col-md-7">
            <?php if (isset($message)) : ?>
                <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
                    <strong><?= $message ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <h3>
                <i class="fas fa-user-graduate fa-sm fa-fw mr-2 text-gray-400"></i>
                <?= strtoupper($_SESSION['user']->prenom) ?>
            </h3>
            <p>
                <b>&nbsp;<?= $_SESSION['user']->tel ?></b><br>
                <b>&nbsp;<?= $_SESSION['user']->email ?></b><br>
                <b>&nbsp;<?= $_SESSION['user']->matricule ?></b><br>
            </p>
            
        </div>
        <div class="col-md-4">
            <p>
                <a href="?page=new" type="button" class="btn btn-danger">ANNONCER UN PRODUIT</a>
            </p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row pt-4">

        <!-- annonce totale -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Annoces Totale
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($pub) ?></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- nombre d'abonné -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre d'Abonné
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($user) ?> %</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?= count($user) ?>%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        

        <!-- Pending Requests Card Example -->
        <!-- <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div> 
   
    
    
    
</div>