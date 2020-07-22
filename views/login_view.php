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
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                      <div style="width: 100%; color: white; font-weight: 500;">Connexion</div>
                    </a>
               
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

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
                        <form action="" method="post">
                            <label for="" style="color: #ccc;">Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="sl-icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
    
                            <label for="" style="color: #ccc;">Mot de Passe</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="sl-icon-lock"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <!-- <button type="submit" class="btn btn-info btn-block waves-effect waves-light">Connexion</button> -->
                            <a href="home" class="btn btn-info btn-block waves-effect waves-light">Connexion</a>
                        </form>
                        <br>

                        <p class="text-center"><a href="register">ou s'insrire ici</a></p>
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
               
                <img src="style/assets/images/login_cover.svg" alt="">
               
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