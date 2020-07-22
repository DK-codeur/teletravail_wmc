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
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center m-b-30">
                                    <h4 class="card-title">Tous les Membres</h4>
                                    <!-- <div class="ml-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createmodel">
                                                Create New Contact
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenoms</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Ville/commune</th>
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
               
            </div>

            <!-- Share Modal -->
            <!-- <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Share With</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username">
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <a href="#Whatsapp" class="text-success">
                                        <i class="display-6 mdi mdi-whatsapp"></i><br><span class="text-muted">Whatsapp</span>
                                    </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Facebook" class="text-info">
                                        <i class="display-6 mdi mdi-facebook"></i><br><span class="text-muted">Facebook</span>
                                    </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Instagram" class="text-danger">
                                        <i class="display-6 mdi mdi-instagram"></i><br><span class="text-muted">Instagram</span>
                                    </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Skype" class="text-cyan">
                                        <i class="display-6 mdi mdi-skype"></i><br><span class="text-muted">Skype</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- Create Modal -->

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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    
        </div>
        <!-- END Page wrapper  -->

        <!-- footer -->
        <?php include_once 'views/includes/footer.php' ?>
            <!-- end footer -->

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