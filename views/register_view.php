<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= WEBSITE_TITLE .' | '. ucfirst(str_replace('-', ' ', $page)); ?></title>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                      <div style="width: 100%; color: white; font-weight: 500;">Inscription</div>
                    </a>
               
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- End Logo -->
                
            </nav>
        </header>
        <!-- End Topbar header -->

       <!-- SIDE BAR-->
       <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li>
                        <!-- User Profile-->
                        <div class="user-profile dropdown m-t-20">
                            <div class="user-pic">
                                <img src="style/assets/images/users/ci.png" alt="users" class="rounded-circle img-fluid" />
                            </div>
                            <div class="user-content hide-menu m-t-10">
                                <h5 class="m-b-10 user-name font-medium">Teletravail</h5>
                            </div>
                        </div>
                        <!-- End User Profile-->
                    </li>

                    <div class="container mt-5 mb-5">
                        
                    </div>

                </ul>
            </nav>

        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- END SIDE BAR -->
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container">

                <div class="text-center">
                    <h1>Inscrivez-Vous</h1>
                    <p>Inscrivez-vous et commencez votre teletravail avec vos collaborateurs ou <p class="text-center"><a href="login">connectez-vous ici</a></p>
                </div>
               
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputname" class="control-label col-form-label">Nom de votre Entreprise</label>
                                    <input type="text" class="form-control" id="inputname" placeholder="Entrer le Nom de votre entreprise">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputlname" class="control-label col-form-label">Description</label>
                                    <textarea name="" class="form-control" id="" placeholder="Decriver votre Entreprise" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label col-form-label">Manager</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nom du chef d'Entreprise">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputcontact" class="control-label col-form-label">Email</label>
                                    <input type="text" class="form-control" id="inputcontact" placeholder="Entrer l'adresse email de votre entreprise">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label col-form-label">Adresse</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Indiquer l'adresse de votre Entreprise">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputcontact" class="control-label col-form-label">Telephone</label>
                                    <input type="text" class="form-control" id="inputcontact" placeholder="Entrer l'adresse email de votre entreprise">
                                </div>
                            </div>
                        </div>

                       

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputlname" class="control-label col-form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="inputEmail3" placeholder="Entrer un mot de passe">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputlname" class="control-label col-form-label">Confirmer</label>
                                    <input type="password" class="form-control" id="inputEmail3" placeholder="Confirmer le mot de passe">
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="login" type="submit" class="btn btn-success mx-2"><i class="ti-save"></i> Inscrire mon Entreprise</a>
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Annuler</button>
                        </div>
                </form>
               
            </div>
    
        </div>

        <!-- End Page wrapper  -->

        <!-- footer -->
        <?php include_once 'views/includes/footer.php' ?>
        <!-- end footer -->
        
    </div>
    <!-- End Wrapper -->
    

    <div class="chat-windows"></div>
    <!-- All Jquery -->
    <?php include_once 'views/includes/script.php' ?> 
</body>

</html>