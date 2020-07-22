<!DOCTYPE html>
<html dir="ltr" lang="fr">

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
        
        <div class="page-wrapper">
            
            <div class="email-app border-top">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part bg-light">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-15">
                            <a class="waves-effect waves-light btn btn-danger d-block" href="#">Liste des Reunions Organisés</a>
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            
                           
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="right-part mail-compose bg-white">
                    <div class="p-20 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Nouvelle Reunion</h4>
                                <span>Organisez une nouvelle reunion</span>
                            </div>
                            <!-- <div class="ml-auto">
                                <button id="cancel_compose" class="btn btn-dark">Back</button>
                            </div> -->
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="">Participants</label>
                                <select class="select2 form-control select2-hidden-accessible" multiple="" style="height: 36px;width: 100%;" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="524">
                                        <option value="AK" data-select2-id="525">Alaska</option>
                                        <option value="HI" data-select2-id="526">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone" data-select2-id="527">
                                        <option value="CA" data-select2-id="528">California</option>
                                        <option value="NV" data-select2-id="529">Nevada</option>
                                        <option value="OR" data-select2-id="530">Oregon</option>
                                        <option value="WA" data-select2-id="531">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone" data-select2-id="532">
                                        <option value="AZ" data-select2-id="533">Arizona</option>
                                        <option value="CO" data-select2-id="534">Colorado</option>
                                        <option value="ID" data-select2-id="535">Idaho</option>
                                        <option value="MT" data-select2-id="536">Montana</option>
                                        <option value="NE" data-select2-id="537">Nebraska</option>
                                        <option value="NM" selected="" data-select2-id="15">New Mexico</option>
                                        <option value="ND" data-select2-id="538">North Dakota</option>
                                        <option value="UT" data-select2-id="539">Utah</option>
                                        <option value="WY" data-select2-id="540">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone" data-select2-id="541">
                                        <option value="AL" data-select2-id="542">Alabama</option>
                                        <option value="AR" data-select2-id="543">Arkansas</option>
                                        <option value="IL" data-select2-id="544">Illinois</option>
                                        <option value="IA" data-select2-id="545">Iowa</option>
                                        <option value="KS" data-select2-id="546">Kansas</option>
                                        <option value="KY" data-select2-id="547">Kentucky</option>
                                        <option value="LA" data-select2-id="548">Louisiana</option>
                                        <option value="MN" data-select2-id="549">Minnesota</option>
                                        <option value="MS" data-select2-id="550">Mississippi</option>
                                        <option value="MO" data-select2-id="551">Missouri</option>
                                        <option value="OK" data-select2-id="552">Oklahoma</option>
                                        <option value="SD" selected="" data-select2-id="16">South Dakota</option>
                                        <option value="TX" data-select2-id="553">Texas</option>
                                        <option value="TN" data-select2-id="554">Tennessee</option>
                                        <option value="WI" data-select2-id="555">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone" data-select2-id="556">
                                        <option value="CT" data-select2-id="557">Connecticut</option>
                                        <option value="DE" data-select2-id="558">Delaware</option>
                                        <option value="FL" data-select2-id="559">Florida</option>
                                        <option value="GA" data-select2-id="560">Georgia</option>
                                        <option value="IN" data-select2-id="561">Indiana</option>
                                        <option value="ME" data-select2-id="562">Maine</option>
                                        <option value="MD" data-select2-id="563">Maryland</option>
                                        <option value="MA" data-select2-id="564">Massachusetts</option>
                                        <option value="MI" data-select2-id="565">Michigan</option>
                                        <option value="NH" data-select2-id="566">New Hampshire</option>
                                        <option value="NJ" data-select2-id="567">New Jersey</option>
                                        <option value="NY" data-select2-id="568">New York</option>
                                        <option value="NC" data-select2-id="569">North Carolina</option>
                                        <option value="OH" data-select2-id="570">Ohio</option>
                                        <option value="PA" data-select2-id="571">Pennsylvania</option>
                                        <option value="RI" data-select2-id="572">Rhode Island</option>
                                        <option value="SC" data-select2-id="573">South Carolina</option>
                                        <option value="VT" data-select2-id="574">Vermont</option>
                                        <option value="VA" data-select2-id="575">Virginia</option>
                                        <option value="WV" data-select2-id="576">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet</label>
                                <input type="text" id="subject" name="example-subject" class="form-control" placeholder="Sujet de la reunion">
                            </div>

                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="reunion_msg" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="subject">Date</label>
                                <input type="text"  onfocus="(this.type = 'date')" id="subject" name="date" class="form-control" placeholder="Date de la reunion">
                            </div>

                            <div class="form-group">
                                <label for="subject">Heure</label>
                                <input type="text"  onfocus="(this.type = 'time')" id="subject" name="date" class="form-control" placeholder="Heure de la reunion">
                            </div>
                            <!-- <div id="summernote"></div> -->
                            
                            <button type="submit" class="btn btn-success m-t-20"> <i class="far fa-envelope"></i> Organiser</button>
                            <button type="submit" class="btn btn-dark m-t-20">Annuler</button>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php include_once 'views/includes/footer.php' ?>
            <!-- end footer -->
            
        </div>
        <!-- End Page wrapper  -->

    </div>
    <!-- End Wrapper -->
    
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