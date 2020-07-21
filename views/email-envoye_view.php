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
        <!-- END SIDE BAR -->

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
           
            <div class="email-app border-top">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part bg-light">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-15">
                            <a class="waves-effect waves-light btn btn-danger d-block" href="nouveau-email.html">NOUVEAU EMAIL</a>
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-email"></i> Elements envoyes <span class="label label-success float-right">17</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part -->
                <!-- ============================================================== -->
                <div class="right-part mail-list bg-white">
                    <div class="p-15 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Tous les Emails envoyés </h4>
                                <span>Ici se classe les email envoyés aux utilisateurs</span>
                            </div>
                            <div class="ml-auto">
                                <input placeholder="Search Mail" id="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="bg-light p-15 d-flex align-items-center do-block">
                        <div class="btn-group m-t-5 m-b-5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input sl-all" id="cstall">
                                <label class="custom-control-label" for="cstall">Tous Coché</label>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete" style="color: red;"></i></button>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->
                    <div class="table-responsive">
                        <table class="table email-table no-wrap table-hover v-middle">
                            <tbody>
                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Information MPR</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Meeting</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Information MPR</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Information MPR</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Meeting</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Information MPR</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Information MPR</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->

                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="chb">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    
                                    <!-- User -->
                                    <td class="user-image"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="m-b-0">Meeting</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">sensibilisation</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 </td>
                                </tr>
                                <!-- row -->
                            </tbody>
                        </table>
                    </div>
                    <div class="p-15 m-t-30">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="right-part mail-compose bg-white" style="display: none;">
                    <div class="p-20 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Compose</h4>
                                <span>create new message</span>
                            </div>
                            <div class="ml-auto">
                                <button id="cancel_compose" class="btn btn-dark">Back</button>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <input type="text" id="example-subject" name="example-subject" class="form-control" placeholder="Subject">
                            </div>
                            <div id="summernote"></div>
                            <h4>Attachment</h4>
                            <div class="dropzone" id="dzid">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success m-t-20"><i class="far fa-envelope"></i> Send</button>
                            <button type="submit" class="btn btn-dark m-t-20">Discard</button>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail detail -->
                <!-- ============================================================== -->
                <div class="right-part mail-details bg-white" style="display: none;">
                    <div class="card-body bg-light">
                        <button type="button" id="back_to_inbox" class="btn btn-outline-secondary font-18 m-r-10"><i class="mdi mdi-arrow-left"></i></button>
                        <button type="button" onclick="return confirm('Etes vous sur de vouloir supprimer ?')" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete" style="color: red;"></i></button>
                    </div>


                    <div class="card-body border-bottom">
                        <h4 class="m-b-0">Your Message title goes here</h4>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="d-flex no-block align-items-center m-b-40">
                            <div class="m-r-10"><img src="style/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="45"></div>
                            <div class="">
                                <h5 class="m-b-0 font-16 font-medium">Hanna Gover <small> ( hgover@gmail.com )</small></h5><span>to Suniljoshi19@gmail.com</span>
                            </div>
                        </div>
                        <h4 class="m-b-15">Hey Hi,</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    </div>
                    <div class="card-body">
                        <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img1.jpg"> </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img2.jpg"> </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img3.jpg"> </a>
                            </div>
                        </div>
                        <div class="border m-t-20 p-15">
                            <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
   
    <!-- customizer Panel -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-15 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                            <label class="custom-control-label" for="theme-view">Dark Theme</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
            </div>
        </div>
    </aside>

    <div class="chat-windows"></div>
    <!-- All Jquery -->

        <!-- customizer Panel -->
    <?php include_once 'views/includes/customiser.php' ?>   
    <!-- end customizer Panel -->

    <div class="chat-windows"></div>
    <!-- All Jquery -->
    <?php include_once 'views/includes/script.php' ?> 

    <script>
    $('#summernote').summernote({
        placeholder: 'Type your email Here',
        tabsize: 2,
        height: 250
    });
    $("#dzid").dropzone({ url: "/file/post" });
    </script>
</body>

</html>