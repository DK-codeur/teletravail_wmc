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

        <!--Page wrapper  -->
        <div class="page-wrapper">
            
            <div class="email-app border-top">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part bg-light">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-15">
                            <a class="waves-effect waves-light btn btn-danger d-block" href="">Liste des SMS Envoyes</a>
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
                                <h4>Nouveau SMS</h4>
                                <span>Ecrivez votre Nouveau SMS</span>
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
                                <label for="">Destinataires</label>
                                <select class="select2 form-control select2-hidden-accessible" multiple="" style="height: 36px;width: 100%;" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                    
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

                            <div class="container form-group">
                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="default" data-offstyle="white">
                            </div>

                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="sms-msg" class="form-control" placeholder="Entrer votre message" id="sms-msg" cols="30" rows="10"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-success m-t-20">
                                <i class="far fa-envelope"></i> Envoyer</button>
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
        $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
        var radioswitch = function() {
            var bt = function() {
                $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioState")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                })
            };
            return {
                init: function() {
                    bt()
                }
            }
        }();
        $(document).ready(function() {
            radioswitch.init()
        });
    </script>
</body>

</html>