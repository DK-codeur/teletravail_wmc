<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= WEBSITE_TITLE .' | '. ucfirst(str_replace('-', ' ', $page)); ?></title>
</head>

<body>
    
    <div id="main-wrapper">
        <!-- Topbar header -->
        <?php include_once 'views/includes/header.php' ?>
        <!-- End Topbar header -->

        <!-- SIDE BAR-->
        <?php include_once 'views/includes/leftside.php' ?>
        <!--END SIDE BAR-->


        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- dashbord summury -->
            <div class="container">
                <div class="row m-t-40">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <a href="new-reunion.html">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="sl-icon-people"></i></h1>
                                    <h6 class="text-white">Organiser une reunion</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <a href="nouveau-email.html">
                            <div class="card card-hover">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-email-outline"></i></h1>
                                    <h6 class="text-white">Nouvel Email</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <a href="#">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-message-outline"></i></h1>
                                    <h6 class="text-white">Nouveau SMS</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-dark text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-outline"></i></h1>
                                <h6 class="text-white">Nouveau Membre</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- end dashbord summury -->
       
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center m-b-30">
                                <h4 class="card-title">Membres</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="file_export" class="table table-bordered nowrap display">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenoms</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Inscrit le</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#!"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Nicole</a>
                                            </td>
                                            <td> Adj*bi</td>
                                            <td>88202012</td>
                                            <td>djdk@dhd.co</td>
                                            <td>france</td>
                                            <td>Paris</td>
                                            <td>12-10-2014</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"  data-target="#createmodel" data-toggle="modal" data-original-title="edit"><i class="ti-pencil" aria-hidden="true"></i></button>
                                                <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt m-r-10"></i> Modifier utilisateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Nom" aria-label="nom">
                                </div>

                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Prenoms" aria-label="prenoms">
                                </div>

                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-mobile text-white"></i></button>
                                    <input type="number" class="form-control" placeholder="Telephone" aria-label="Telephone">
                                </div>

                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-email text-white"></i></button>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="email">
                                </div>

                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-calendar text-white"></i></button>
                                    <input type="date" class="form-control" placeholder="Date de naissance" aria-label="date">
                                </div>

                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Avatar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
            <!-- footer -->
            <?php include_once 'views/includes/footer.php' ?>
            <!-- end footer -->
           
        </div>

        <!-- END Page wrapper  -->

    </div>

    <!-- End Wrapper -->

    <!-- customizer Panel -->
    <?php include_once 'views/includes/customiser.php' ?>   
    <!-- end customizer Panel -->

    <div class="chat-windows"></div>
    <!-- All Jquery -->
    <?php include_once 'views/includes/script.php' ?> 
</body>

</html>