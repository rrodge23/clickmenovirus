
 <!--MODAL ACTIVATE ACCOUNT-->

<div id="modalAdd" class="modal fade" role="dialog">
        <div class="modal-dialog"style="width: 90% !important;margin-top:30px !important;">

            <div class="modal-content">
                <div class="modal-header box-shadow" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title font-product color-white">ACCOUNT ACTIVATION</h4>
                </div>
                
                <div class="container-fluid">
                    <br>
                    <form method="POST" action="" onsubmit="return false;" id="add-client-form">
                    <input type="hidden" value="addClient" name="mode">
                      
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="firstnameAddC" class="col-md-2 control-label">Firstname</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control" id="firstnameAddC" name="firstname" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="lastnameAddC" class="col-md-2 control-label">Lastname</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control" id="lastnameAddC" name="lastname" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="middlenameAddC" class="col-md-2 control-label">Middlename</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control" id="middlenameAddC" name="middlename" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="birthdateAddC" class="col-md-2 control-label">Birthdate   (Y-M-D)</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control datepicker" id="birthdateAddC" name="birthdate" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="birthplaceAddC" class="col-md-2 control-label">Birthplace</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control" id="birthplaceAddC" name="birthplace" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gender</label>

                                        <div class="col-md-10">
                                            <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="gender" id="genderAddC" value="Male" checked="">
                                                Male
                                            </label>
                                            </div>
                                            <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="gender" id="genderAddC" value="Female">
                                                Female
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="civil_statAddC" class="col-md-2 control-label">Civil Status</label>
                                        <div class="col-md-10">
                                            <select id="civil_statAddC" class="padding-left10 form-control select" name="civil_stat" placeholder="Please Select your Status">
                                                <option value='Single'>Single</option>
                                                <option value='Married'>Married</option>
                                                <option value='Divorced'>Divorced</option>
                                                <option value='Widowed'>Widowed</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="addressAddC" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control" id="addressAddC" name="address" required="required">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="civil_statAddC" class="col-md-2 control-label">City / Province</label>
                                        <div class="col-md-10">
                                            <select id="cityAddC" class="padding-left10 form-control select" name="city">
                                                <option value="Davao City">Davao City</option>
                                                <option value="Surigao City">Surigao City</option>
                                                <option value="Caloocan">Caloocan</option>
                                                <option value="Las Piñas">Las Piñas</option>
                                                <option value="Makati ">Makati </option>
                                                <option value="Malabon">Malabon</option>
                                                <option value="Mandaluyong">Mandaluyong</option>
                                                <option value="Manila">Manila</option>
                                                <option value="Marikina">Marikina</option>
                                                <option value="Muntinlupa">Muntinlupa</option>
                                                <option value="Navotas">Navotas</option>
                                                <option value="Parañaque">Parañaque</option>
                                                <option value="Pasay">Pasay</option>
                                                <option value="Pasig ">Pasig </option>
                                                <option value="Quezon City">Quezon City</option>
                                                <option value="San Juan">San Juan</option>
                                                <option value="Taguig">Taguig</option>
                                                <option value="Valenzuela">Valenzuela</option>
                                                <option value="Butuan">Butuan</option>
                                                <option value="Cabadbaran">Cabadbaran</option>
                                                <option value="Bayugan">Bayugan</option>
                                                <option value="Legazpi">Legazpi</option>
                                                <option value="Ligao">Ligao</option>
                                                <option value="Tabaco">Tabaco</option>
                                                <option value="Isabela">Isabela</option>
                                                <option value="Lamitan">Lamitan</option>
                                                <option value="Balanga">Balanga</option>
                                                <option value="Batangas City">Batangas City</option>
                                                <option value="Lipa">Lipa</option>
                                                <option value="Tanauan">Tanauan</option>
                                                <option value="Baguio">Baguio</option>
                                                <option value="Tagbilaran">Tagbilaran</option>
                                                <option value="Malaybalay">Malaybalay</option>
                                                <option value="Valencia">Valencia</option>
                                                <option value="Malolos">Malolos</option>
                                                <option value="Meycauayan">Meycauayan</option>
                                                <option value="San Jose del Monte">San Jose del Monte</option>
                                                <option value="Tuguegarao">Tuguegarao</option>
                                                <option value="Iriga">Iriga</option>
                                                <option value="Naga">Naga</option>
                                                <option value="Roxas">Roxas</option>
                                                <option value="Bacoor">Bacoor</option>
                                                <option value="Cavite City">Cavite City</option>
                                                <option value="Dasmariñas">Dasmariñas</option>
                                                <option value="Imus">Imus</option>
                                                <option value="Tagaytay">Tagaytay</option>
                                                <option value="Trece Martires">Trece Martires</option>
                                                <option value="Bogo">Bogo</option>
                                                <option value="Carcar">Carcar</option>
                                                <option value="Cebu City">Cebu City</option>
                                                <option value="Danao">Danao</option>
                                                <option value="Lapu-Lapu">Lapu-Lapu</option>
                                                <option value="Mandaue">Mandaue</option>
                                                <option value="Naga">Naga</option>
                                                <option value="Talisay">Talisay</option>
                                                <option value="Toledo">Toledo</option>
                                                <option value="Kidapawan">Kidapawan</option>
                                                <option value="Panabo">Panabo</option>
                                                <option value="Samal">Samal</option>
                                                <option value="Tagum">Tagum</option>
                                                <option value="Digos">Digos</option>
                                                <option value="Mati">Mati</option>
                                                <option value="Borongan">Borongan</option>
                                                <option value="Batac">Batac</option>	
                                                <option value="Laoag">Laoag</option>	
                                                <option value="Candon">Candon</option>	
                                                <option value="Vigan">Vigan</option>	
                                                <option value="Iloilo City">Iloilo City</option>
                                                <option value="Passi">Passi</option>	
                                                <option value="Cauayan">Cauayan</option>	
                                                <option value="Ilagan">Ilagan</option>	
                                                <option value="Santiago">Santiago</option>
                                                <option value="Tabuk">Tabuk</option>	
                                                <option value="San Fernando">San Fernando</option>	
                                                <option value="Biñan">Biñan</option>	
                                                <option value="Cabuyao">Cabuyao</option>	
                                                <option value="Calamba">Calamba</option>
                                                <option value="San Pablo">San Pablo</option>
                                                <option value="Santa Rosa">Santa Rosa</option>
                                                <option value="San Pedro">San Pedro</option>
                                                <option value="Iligan">Iligan</option>	
                                                <option value="Marawi">Marawi</option>	
                                                <option value="Baybay">Baybay</option>	
                                                <option value="Ormoc">Ormoc</option>	
                                                <option value="Tacloban">Tacloban</option>	
                                                <option value="Cotabato City">Cotabato City</option>
                                                <option value="Masbate City">Masbate City</option>
                                                <option value="Oroquieta">Oroquieta</option>
                                                <option value="Ozamiz">Ozamiz</option>
                                                <option value="Tangub">Tangub</option>
                                                <option value="Cagayan de Oro">Cagayan de Oro</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Gingoog">Gingoog</option>
                                                <option value="Bacolod">Bacolod</option>
                                                <option value="Bago">Bago</option>
                                                <option value="Cadiz">Cadiz</option>
                                                <option value="Escalante">Escalante</option>
                                                <option value="Himamaylan">Himamaylan</option>
                                                <option value="Kabankalan">Kabankalan</option>
                                                <option value="La Carlota">La Carlota</option>
                                                <option value="Sagay">Sagay</option>
                                                <option value="San Carlos">San Carlos</option>
                                                <option value="Silay">Silay</option>
                                                <option value="Sipalay">Sipalay</option>
                                                <option value="Talisay">Talisay</option>
                                                <option value="Victorias">Victorias</option>
                                                <option value="Bais">Bais</option>
                                                <option value="Bayawan">Bayawan</option>
                                                <option value="Canlaon">Canlaon</option>
                                                <option value="Dumaguete">Dumaguete</option>
                                                <option value="Guihulngan">Guihulngan</option>
                                                <option value="Tanjay">Tanjay</option>
                                                <option value="Cabanatuan">Cabanatuan</option>
                                                <option value="Gapan">Gapan</option>
                                                <option value="Muñoz">Muñoz</option>
                                                <option value="Palayan">Palayan</option>
                                                <option value="San Jose">San Jose</option>
                                                <option value="Calapan	Oriental">Calapan	Oriental</option>
                                                <option value="Puerto Princesa">Puerto Princesa</option>
                                                <option value="Angeles">Angeles</option>
                                                <option value="Mabalacat ">Mabalacat </option>
                                                <option value="San Fernando">San Fernando</option>
                                                <option value="Alaminos">Alaminos</option>
                                                <option value="Dagupan">Dagupan</option>
                                                <option value="San Carlos">San Carlos</option>
                                                <option value="Urdaneta">Urdaneta</option>
                                                <option value="Lucena">Lucena</option>
                                                <option value="Tayabas">Tayabas</option>
                                                <option value="Antipolo">Antipolo</option>
                                                <option value="Calbayog">Calbayog</option>
                                                <option value="Catbalogan">Catbalogan</option>
                                                <option value="Sorsogon City">Sorsogon City</option>
                                                <option value="General Santos">General Santos</option>
                                                <option value="Koronadal">Koronadal</option>
                                                <option value="Maasin">Maasin</option>
                                                <option value="Tacurong">Tacurong</option>
                                                <option value="Bislig">Bislig</option>
                                                <option value="Tandag">Tandag</option>
                                                <option value="Tarlac City">Tarlac City</option>
                                                <option value="Olongapo">Olongapo</option>
                                                <option value="Dapitan">Dapitan</option>
                                                <option value="Dipolog">Dipolog</option>
                                                <option value="Pagadian">Pagadian</option>
                                                <option value="Zamboanga City">Zamboanga City</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="zipcodeAddC" class="col-md-2 control-label">Zip Code</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control input-medium bfh-phone" id="zipcodeAddC" name="zipcode" required="required" pattern="[0-9]{4}" data-format="dddd">
                                            <span class="help-block">only composit numbers between 0-9. 4 digits required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="zipcodeAddC" class="col-md-2 control-label">Contact Number</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control input-medium bfh-phone" id="contact_noAddC" name="contact_no" required="required" data-format="+ (63) ddd-dddd-ddd">
                                            <span class="help-block">only composit numbers between 0-9. 11 digits required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="zipcodeAddC" class="col-md-2 control-label">Telephone Number</label>
                                        <div class="col-md-10">
                                            <input type="text" class="padding-left10 form-control input-medium bfh-phone" id="tel_noAddC" name="tel_no" required="required" data-format="(ddd) ddd-dddd">
                                            <span class="help-block">only composit numbers between 0-9.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="emailAddC" class="col-md-2 control-label">Email address</label>
                                        <div class="col-md-10">
                                            <input type="email" class="padding-left10 form-control" id="emailAddC" name="email" required="required">
                                            <span class="help-block">Please enter a valid email address</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="productAddC" class="col-md-2 control-label">Client Type</label>
                                        <div class="col-md-10">     
                                            <select id="productAddC" class="padding-left10 form-control select" name="product" placeholder="Please Select your Select Client type">
                                                <?php
                                                    if($ddprod){
                                                        while($p = $ddprod->fetch_assoc()){
                                                            $prod_id = $p['PID'];
                                                            $product = $p['prod_name'];
                                                            echo "<option value='$prod_id'>$product</option>";
                                                        }
                                                    }                          
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="departmentAddC" class="col-md-2 control-label">Section</label>
                                        <div class="col-md-10">     
                                            <select id="departmentAddC" class="padding-left10 form-control select" name="department" placeholder="Please Select your Select Section">
                                                <?php
                                                    if($dept){
                                                        while($d = $dept->fetch_assoc()){
                                                            $dept_id = $d['DID'];
                                                            $department = $d['dept_name'];
                                                            echo "<option value='$dept_id'>$department</option>";
                                                        }
                                                    }                          
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Activate Account" type="submit" class="btn btn-raised btn-secondary" id="btnActAcc" name="actAcc_submit"><i class="material-icons">playlist_add_check</i></button>
                                        
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Close"type="submit" class="btn btn-raised btn-secondary margin-right-30 margin-buttom30" data-dismiss="modal"><i class="material-icons">close</i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>

    <!--END MODAL ACTIVATE ACCOUNT-->
                                 
    <!--MODAL VIEW CLIENT-->
<div id="mdl-view-client" style="padding:15px;" class="modal fade" role="dialog">
      <div class="modal-dialog"style="width: 90% !important;margin-top:30px !important;">

            <div class="modal-content">
                <div class="modal-header box-shadow" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">ACCOUNT INFO</h4>
                    <?php
                        if($_SESSION['users']['user_level'] == 4 || $_SESSION['users']['user_level'] == 1){
                            echo "
                                <div class='dropdown btn-group float-right'>
                                    <button rel='tooltip' data-original-title='Settings' data-toggle='dropdown' class='btn btn-primary dropdown-toggle' style='background-color:transparent !important;border-radius:50%;height:25px !important;width:25px !important;padding:0px !important;' type='button' id='clientEditDropdownButton'>
                                        <i class='material-icons'>settings</i>
                                    </button>
                                    <ul class='dropdown-menu' role='menu'>
                                        <li><a href='#' id='mdl-btn-update-client'>Edit</a></li>
                                    </ul>       
                                </div>
                            ";
                        }
                    ?>
                </div>   
                
                <div class="container-fluid">
                    <br>
                    <form method="POST" action="" id="update-client-form" onsubmit="return false;">
                        <input type="hidden" id="AID" name="AID">
                        <input type="hidden" value="updateClient" name="mode">
                        
                        <input type="hidden" id="created_at" name="created_at">
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <h3 style="color:#260552;" class="font-product margin-left-30">ACCOUNT:</h3>
                                </div>
                               
                                <div class='form-group'>
                                    <label for='ACID' class='control-label col-md-4'>Account ID</label>
                                    <div class='col-md-8'>
                                        <input readonly='readonly' type='text' class='mdl-user-input-update form-control padding-left10 ' id='ACID' name='ACID' required='required'>
                                        <span class='help-block'><code></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='stat' class='control-label col-md-4'>Status</label>
                                    <div class='col-md-8'>
                                        <input readonly='readonly' type='text' class='mdl-user-input-update form-control padding-left10 ' id='stat' name='stat' required='required'>
                                        <span class='help-block'><code></code></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:50px;">
                            <div class="col-md-4">
                                <div>
                                    <h3 style="color:#009785;" class="font-product margin-left-30">NAME:</h3>
                                </div>
                                <div class='form-group'>
                                    <label for='firstname' class='control-label col-md-4'>Firstname</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='firstname' name='firstname' required='required'>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='lastname' class='control-label col-md-4'>Lastname</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='lastname' name='lastname' required='required'>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='middlename' class='control-label col-md-4'>Middlename</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='middlename' name='middlename' required='required'>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                
                                <div class='form-group'>
                                    <label for='birthdate' class='control-label col-md-4'>Birthdate</label>
                                    <div class='col-md-8'>
                                        <input disabled="disabled" type="text" name="birthdate" id="birthdate" class="padding-left10 datepicker mdl-user-input-update form-control mdl-user-input-update" placeholder="Birthdate Y-m-d">
                                        
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='birthplace' class='control-label col-md-4'>Birthplace</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='birthplace' name='birthplace' required='required'>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group' style='margin-top:50px;margin-bottom:50px;'>
                                    <label for='gender' class='control-label col-md-4'>Gender</label>
                                    <div class='col-md-8'>
                                        <select disabled="disabled" id="gender" class="form-control select mdl-user-input-update" name="gender">
                                            <option value='Male'>Male</option>
                                            <option value='Female'>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group' style='margin-top:50px;margin-bottom:50px;'>
                                    <label for='civilstatus' class='control-label col-md-4'>Civil Status</label>
                                    <div class='col-md-8'>
                                        <select disabled="disabled" id="civilstatus" class="form-control select mdl-user-input-update" name="civilstatus">
                                            <option value='Single'>Single</option>
                                            <option value='Married'>Married</option>
                                            <option value='Divorced'>Divorced</option>
                                            <option value='Widowed'>Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <h3 style="color:#009785;" class="font-product margin-left-30">LOCATION:</h3>
                                </div>
                                <div class='form-group'>
                                    <label for='address' class='control-label col-md-4'>Address</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='address' name='address' required='required'>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='city' class='control-label col-md-4'>City/Province</label>
                                    <div class='col-md-8'>
                                        <select disabled="disabled" id="city" class="form-control select mdl-user-input-update" name="city">
                                            <option value="Davao City">Davao City</option>
                                            <option value="Surigao City">Surigao City</option>
                                            <option value="Caloocan">Caloocan</option>
                                            <option value="Las Piñas">Las Piñas</option>
                                            <option value="Makati ">Makati </option>
                                            <option value="Malabon">Malabon</option>
                                            <option value="Mandaluyong">Mandaluyong</option>
                                            <option value="Manila">Manila</option>
                                            <option value="Marikina">Marikina</option>
                                            <option value="Muntinlupa">Muntinlupa</option>
                                            <option value="Navotas">Navotas</option>
                                            <option value="Parañaque">Parañaque</option>
                                            <option value="Pasay">Pasay</option>
                                            <option value="Pasig ">Pasig </option>
                                            <option value="Quezon City">Quezon City</option>
                                            <option value="San Juan">San Juan</option>
                                            <option value="Taguig">Taguig</option>
                                            <option value="Valenzuela">Valenzuela</option>
                                            <option value="Butuan">Butuan</option>
                                            <option value="Cabadbaran">Cabadbaran</option>
                                            <option value="Bayugan">Bayugan</option>
                                            <option value="Legazpi">Legazpi</option>
                                            <option value="Ligao">Ligao</option>
                                            <option value="Tabaco">Tabaco</option>
                                            <option value="Isabela">Isabela</option>
                                            <option value="Lamitan">Lamitan</option>
                                            <option value="Balanga">Balanga</option>
                                            <option value="Batangas City">Batangas City</option>
                                            <option value="Lipa">Lipa</option>
                                            <option value="Tanauan">Tanauan</option>
                                            <option value="Baguio">Baguio</option>
                                            <option value="Tagbilaran">Tagbilaran</option>
                                            <option value="Malaybalay">Malaybalay</option>
                                            <option value="Valencia">Valencia</option>
                                            <option value="Malolos">Malolos</option>
                                            <option value="Meycauayan">Meycauayan</option>
                                            <option value="San Jose del Monte">San Jose del Monte</option>
                                            <option value="Tuguegarao">Tuguegarao</option>
                                            <option value="Iriga">Iriga</option>
                                            <option value="Naga">Naga</option>
                                            <option value="Roxas">Roxas</option>
                                            <option value="Bacoor">Bacoor</option>
                                            <option value="Cavite City">Cavite City</option>
                                            <option value="Dasmariñas">Dasmariñas</option>
                                            <option value="Imus">Imus</option>
                                            <option value="Tagaytay">Tagaytay</option>
                                            <option value="Trece Martires">Trece Martires</option>
                                            <option value="Bogo">Bogo</option>
                                            <option value="Carcar">Carcar</option>
                                            <option value="Cebu City">Cebu City</option>
                                            <option value="Danao">Danao</option>
                                            <option value="Lapu-Lapu">Lapu-Lapu</option>
                                            <option value="Mandaue">Mandaue</option>
                                            <option value="Naga">Naga</option>
                                            <option value="Talisay">Talisay</option>
                                            <option value="Toledo">Toledo</option>
                                            <option value="Kidapawan">Kidapawan</option>
                                            <option value="Panabo">Panabo</option>
                                            <option value="Samal">Samal</option>
                                            <option value="Tagum">Tagum</option>
                                            <option value="Digos">Digos</option>
                                            <option value="Mati">Mati</option>
                                            <option value="Borongan">Borongan</option>
                                            <option value="Batac">Batac</option>	
                                            <option value="Laoag">Laoag</option>	
                                            <option value="Candon">Candon</option>	
                                            <option value="Vigan">Vigan</option>	
                                            <option value="Iloilo City">Iloilo City</option>
                                            <option value="Passi">Passi</option>	
                                            <option value="Cauayan">Cauayan</option>	
                                            <option value="Ilagan">Ilagan</option>	
                                            <option value="Santiago">Santiago</option>
                                            <option value="Tabuk">Tabuk</option>	
                                            <option value="San Fernando">San Fernando</option>	
                                            <option value="Biñan">Biñan</option>	
                                            <option value="Cabuyao">Cabuyao</option>	
                                            <option value="Calamba">Calamba</option>
                                            <option value="San Pablo">San Pablo</option>
                                            <option value="Santa Rosa">Santa Rosa</option>
                                            <option value="San Pedro">San Pedro</option>
                                            <option value="Iligan">Iligan</option>	
                                            <option value="Marawi">Marawi</option>	
                                            <option value="Baybay">Baybay</option>	
                                            <option value="Ormoc">Ormoc</option>	
                                            <option value="Tacloban">Tacloban</option>	
                                            <option value="Cotabato City">Cotabato City</option>
                                            <option value="Masbate City">Masbate City</option>
                                            <option value="Oroquieta">Oroquieta</option>
                                            <option value="Ozamiz">Ozamiz</option>
                                            <option value="Tangub">Tangub</option>
                                            <option value="Cagayan de Oro">Cagayan de Oro</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Gingoog">Gingoog</option>
                                            <option value="Bacolod">Bacolod</option>
                                            <option value="Bago">Bago</option>
                                            <option value="Cadiz">Cadiz</option>
                                            <option value="Escalante">Escalante</option>
                                            <option value="Himamaylan">Himamaylan</option>
                                            <option value="Kabankalan">Kabankalan</option>
                                            <option value="La Carlota">La Carlota</option>
                                            <option value="Sagay">Sagay</option>
                                            <option value="San Carlos">San Carlos</option>
                                            <option value="Silay">Silay</option>
                                            <option value="Sipalay">Sipalay</option>
                                            <option value="Talisay">Talisay</option>
                                            <option value="Victorias">Victorias</option>
                                            <option value="Bais">Bais</option>
                                            <option value="Bayawan">Bayawan</option>
                                            <option value="Canlaon">Canlaon</option>
                                            <option value="Dumaguete">Dumaguete</option>
                                            <option value="Guihulngan">Guihulngan</option>
                                            <option value="Tanjay">Tanjay</option>
                                            <option value="Cabanatuan">Cabanatuan</option>
                                            <option value="Gapan">Gapan</option>
                                            <option value="Muñoz">Muñoz</option>
                                            <option value="Palayan">Palayan</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="Calapan	Oriental">Calapan	Oriental</option>
                                            <option value="Puerto Princesa">Puerto Princesa</option>
                                            <option value="Angeles">Angeles</option>
                                            <option value="Mabalacat ">Mabalacat </option>
                                            <option value="San Fernando">San Fernando</option>
                                            <option value="Alaminos">Alaminos</option>
                                            <option value="Dagupan">Dagupan</option>
                                            <option value="San Carlos">San Carlos</option>
                                            <option value="Urdaneta">Urdaneta</option>
                                            <option value="Lucena">Lucena</option>
                                            <option value="Tayabas">Tayabas</option>
                                            <option value="Antipolo">Antipolo</option>
                                            <option value="Calbayog">Calbayog</option>
                                            <option value="Catbalogan">Catbalogan</option>
                                            <option value="Sorsogon City">Sorsogon City</option>
                                            <option value="General Santos">General Santos</option>
                                            <option value="Koronadal">Koronadal</option>
                                            <option value="Maasin">Maasin</option>
                                            <option value="Tacurong">Tacurong</option>
                                            <option value="Bislig">Bislig</option>
                                            <option value="Tandag">Tandag</option>
                                            <option value="Tarlac City">Tarlac City</option>
                                            <option value="Olongapo">Olongapo</option>
                                            <option value="Dapitan">Dapitan</option>
                                            <option value="Dipolog">Dipolog</option>
                                            <option value="Pagadian">Pagadian</option>
                                            <option value="Zamboanga City">Zamboanga City</option>
                                        </select>
                                        <span class='help-block'></code></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label for='zipcode' class='control-label col-md-4'>Zipcode</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='text' class='mdl-user-input-update form-control padding-left10 ' id='zipcode' name='zipcode' required='required' pattern='[0-9]{4}'>
                                        <span class='help-block'>only composite numbers between 0 - 9</code></span>
                                    </div>
                                </div>

                                
                                <div>
                                    <h3 style="color:#009785;margin-top:80px;" class="font-product margin-left-30" style="padding-top:50px;">CONTACT:</h3>
                                </div>

                                <div class='form-group'>
                                    <label for='contact_no' class='control-label col-md-3'>Phone Number</label>
                                    <div class='col-md-8'>
                                        
                                        <input disabled='disabled' type="text" name="contact_no" id="contact_no" class="mdl-user-input-update form-control padding-left10 input-medium bfh-phone margin-left-30" data-format="+ (dd) ddd-dddd-ddd" required="required" style="border:none;border-bottom:1px solid #ddd !important;width:100%;">
                                        <span class='help-block' style="margin-left:30px;">only composite numbers between 0 - 9</code></span>
                                    </div>
                                </div>

                                <div class='form-group' style="margin-top:50px;">
                                    <label for='contact_no' class='control-label col-md-3'>Telephone Number</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type="text" name="tel_no" id="tel_no" class="mdl-user-input-update form-control padding-left10 input-medium bfh-phone margin-left-30" data-format="(ddd) ddd-dddd" required="required" style="border:none;border-bottom:1px solid #ddd !important;width:100%;" placeholder="Telephone Number">
                                        <span class='help-block' style="margin-left:30px;">only composite numbers between 0 - 9</code></span>
                                    </div>
                                </div>
                    
                                
                                <div class='form-group' style="margin-top:50px;">
                                    <label for='email' class='control-label col-md-4'>Email Address</label>
                                    <div class='col-md-8'>
                                        <input disabled='disabled' type='email' class='mdl-user-input-update form-control padding-left10 ' id='email' name='email' required='required'>
                                        <span class='help-block'><code>Please enter a valid email address</code></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <h3 style="color:#009785;" class="font-product margin-left-30">Department:</h3>
                                </div>
                                <div class='form-group' style='margin-top:50px;margin-bottom:50px;'>
                                    <label for='product' class='control-label col-md-4'>Client Type</label>
                                    <div class='col-md-8'>
                                        <select disabled="disabled" id="product" class="form-control select mdl-user-input-update" name="product" placeholder="Select Product">
                                            <?php
                                                if($mDropdownProd){
                                                    while($p = $mDropdownProd->fetch_assoc()){
                                                        $prod_id = $p['PID'];
                                                        $product = $p['prod_name'];
                                                        echo "<option value='$prod_id'>$product</option>";
                                                    }
                                                }                          
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group' style='margin-top:50px;margin-bottom:50px;'>
                                    <label for='department' class='control-label col-md-4'>Section</label>
                                    <div class='col-md-8' id="dept">
                                        <select disabled="disabled" id="department" class="form-control select mdl-user-input-update" name="department" required="required" placeholder="Select Department">
                                            <?php
                                                if($mdropdowndept){
                                                    while($d = $mdropdowndept->fetch_assoc()){
                                                        $dept_id = $d['DID'];
                                                        $department = $d['dept_name'];
                                                        echo "<option value='$dept_id'>$department</option>";
                                                    }
                                                }                          
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Save Changes" type="submit" id="mdl-btn-saveUpdate-client" class="hidden btn btn-raised btn-secondary">
                                            <i class="material-icons">playlist_add_check</i>
                                        </button>
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>
    <!--END MODAL VIEW USER-->
<!--                                    
                                    -->
    <!--MODAL VIEW DEPT-->
<div id="mdl-View-dept" class="modal fade" role="dialog">
       
        <div class="modal-dialog">
            
            <div class="modal-content" style="width: 140% !important;">
                <div class="modal-header box-shadow" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">INFO</h4>
                </div>
                <form action="/app/controller/mdl-deptView.php" method="POST" id="dept-update-form" onsubmit="return false;">
                    <input type="hidden" name="mode" value="deptUpdate">
                    <div class="modal-body" id="mdl-body">
                        <div class='table-responsive'> 
                            <table>
                                <tr>
                                    <td>
                                        <div class='form-group'>
                                            <label for='DID' class='control-label col-md-4'>ID</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='form-control padding-left10 ' id='DID' name='DID' required='required'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>    
                                        <div class='form-group'>
                                            <label for='dept_name' class='control-label col-md-4'>Section</label>
                                            <div class='col-md-8'>
                                                <input type='text' class='form-control mdl-dept-input-update padding-left10 ' id='dept_name' name='dept_name' required='required'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>    
                   
                    <div class="modal-footer">
                        
                        <table style="float:right !important;">
                            <tr>
                                <td>
                                    <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Save Changes" type="submit" id="mdl-btn-saveUpdate-dept" class="btn btn-raised btn-secondary">
                                        <i class="material-icons">playlist_add_check</i>
                                    </button>
                                </td>
                                <td>
                                    <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
                     
                
            </div>

        </div>
</div>    
    <!--END VIEW DEPT-->


    <!--MODAL ADD DEPARTMENT-->

<div id="modalDept" class="modal fade" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content" style="width: 140% !important;">
                <div class="modal-header box-shadow" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">Add Section</h4>
                </div>
                
                <div class="container-fluid">
                    <form method="POST" action="/app/controller/mdl-deptView.php" id="department-add-form" onsubmit="return false;">
                        <input type="hidden" name="mode" value="addDept">
                        <div class="container inline" style="width: 45%;">
                            
                            <div class="row" style="margin-top:50px;">
                                <div class="col-md-12">
                                    <div class="form-group label-floating margin-left-30" style="width: 210% !important;">
                                        <label for="i5i" class="control-label" >Enter Section</label>
                                        <input type="text" class="form-control" id="i5i" name="actAcc_dn" required="required">
                                        <span class="help-block"></span>
                                    </div>   
                                </div>
                            </div>     
                            
                        </div>                       
                    
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button id="mdl-addDepartment" style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary" name="actAcc_submit_dept"><i class="material-icons">playlist_add_check</i></button>
                            
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary margin-right-30 margin-buttom30" data-dismiss="modal"><i class="material-icons">close</i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>

    <!--END MODAL ADD DEPARTMENT-->

    <!--MODAL ADD PRODUCT-->
<div id="modalProd" class="modal fade" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content" style="width: 140% !important;">

                <div class="modal-header box-shadow" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">Add Client Type</h4>
                </div>
                
                <div class="container-fluid">
                    <form method="POST" action="/app/controller/mdl-prodView.php" id="add-product-form" onsubmit="return false;">
                        <input type="hidden" value="addProd" name="mode">
                        <div class="container inline" style="width: 45%;">
                            <div class="row" style="margin-top:50px;">
                                <div class="col-md-5">
                                    <div class="form-group label-floating margin-left-30" style="width: 210% !important;">
                                        <label for="i5i" class="control-label" >Client Type</label>
                                        <input type="text" class="form-control" id="i5i" name="actAcc_pn" required="required">
                                        <span class="help-block"></span>
                                    </div>        
                                    <div class="form-group label-floating margin-left-30" style="width: 210% !important;">
                                        <label for="i5i" class="control-label" >Interest Rate</label>
                                        <input type="text" class="form-control" id="i5i" name="actAcc_ir" required="required" pattern="[0-9.]{1,3}">
                                        <span class="help-block">Composit numbers between 0-9</span>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button id="mdl-btnAdd-product" style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary" name="actAcc_submit_prod"><i class="material-icons">playlist_add_check</i></button>
                            
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary margin-right-30 margin-buttom30" data-dismiss="modal"><i class="material-icons">close</i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>   
    <!--END MODAL ADD PRODUCT-->
    
    <!--MODAL VIEW PRODUCT-->
<div id="mdl-view-prod" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content" style="width: 140% !important;">

                <div class="modal-header" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">INFO</h4>
                </div>
                
                <div class="container-fluid">
                    <form method="POST" action="/app/controller/mdl-prodView.php" id="update-product-form" onsubmit="return false;">
                        <input type="hidden" name="mode" value="updateProd">
                        <table>
                            <tr>
                                <td>
                                    <div class='form-group'>
                                        <label for='DID' class='control-label col-md-4'>ID</label>
                                        <div class='col-md-8'>
                                            <input readonly='readonly' type='text' class='form-control padding-left10 ' id='PID' name='PID' required='required'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='form-group'>
                                        <label for='DID' class='control-label col-md-4'>Client Type</label>
                                        <div class='col-md-8'>
                                            <input type='text' class=' form-control padding-left10 ' id='prod_name' name='prod_name' required='required'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='form-group'>
                                        <label for='DID' class='control-label col-md-4'>Interest Rate</label>
                                        <div class='col-md-8'>
                                            <input type='text' class=' form-control padding-left10 text-center' id='inter_rate' name='inter_rate' required='required' pattern="[0-9.]{1,3}">
                                            <span class='help-block'>only composite numbers between 0-9</code></span>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </table>                
                    
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Save Changes" type="submit" id="mdl-btn-saveUpdate-prod" class="btn btn-raised btn-secondary">
                                            <i class="material-icons">playlist_add_check</i>
                                        </button>
                                        
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>   
    <!--END MODAL VIEW PRODUCT-->

    <!--MODAL USER UPDATE-->

    
<div id="modalUserUpdate" class="modal fade" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content" style="width: 140% !important;">

                <div class="modal-header" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">UPDATE</h4>
                </div>
                
                <div class="container-fluid">
                    <form method="POST" action="/app/controller/mdl-accView.php" id="update-user-form" onsubmit="return false;">
                        <table>
                            <tr>
                                <td>
                                    <input type="hidden" name="update_UID" id="update_UID">
                                    <input type="hidden" name="mode" value="userUpdate">
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for='firstname' class='control-label col-md-4'>USERNAME</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control padding-left10 ' id='update_username' name='update_username' required='required' pattern=".{6,}">
                                            <span class='help-block'>Minimum of 6 Characters</code></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for='update_nickname' class='control-label col-md-4'>NICKNAME</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control padding-left10 ' id='update_nickname' name='update_nickname' required='required'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for="update_userlevel">ROLE</label>
                                        <select id="update_userlevel" class="form-control select" name="update_userlevel" required="required">
                                            <option value='1'>ADMIN</option>
                                            <option value='2'>TELLER</option>
                                            <option value='3'>CRO</option>
                                            <option value='4'>BM/CASHIER</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                                    
                    
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button id="mdl-btn-user-save-update" style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary" name="actAcc_submit_prod"><i class="material-icons">playlist_add_check</i></button>
                            
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-secondary margin-right-30 margin-buttom30" data-dismiss="modal"><i class="material-icons">close</i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>   
    <!--END MODAL USER UPDATE-->

    <!--MODAL ADD USER-->
<div id="modalUser" class="modal fade" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content" style="width: 140% !important;">

                <div class="modal-header" style="background-color: #F88158 !important;line-height:75px !important;height:75px !important;">
                   
                    <h4 class="modal-title float-left color-white font-product">USER INFO</h4>
                </div>
                
                <div class="container-fluid">
                    <form method="POST" action="/app/controller/mdl-accView.php" id="add-user-form" onsubmit="return false;">
                        <input type="hidden" name="mode" value="addUser">
                        <table>
                            <tr>
                                <td>
                                    <input type="hidden" id="UID" name="UID">
                                </td>
                            </tr>
                            <tr>

                                <td>         
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for='username' class='control-label col-md-4'>USERNAME</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control padding-left10 ' id='username' name='username' required='required' pattern=".{6,}">
                                            <span class='help-block'>minimum of 6 characters</code></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>         
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for='nickname' class='control-label col-md-4'>NICKNAME</label>
                                        <div class='col-md-8'>
                                            <input type='text' class='form-control padding-left10 ' id='nickname' name='nickname' required='required'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group margin-left-30" style="width: 210% !important;">
                                        <label for="user_level">ROLE</label>
                                        <select id="user_level" class="form-control select" name="user_level" required="required">
                                            <option value='1'>ADMIN</option>
                                            <option value='2'>TELLER</option>
                                            <option value='3'>CRO</option>
                                            <option value='4'>BM/CASHIER</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                                    
                    
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button id="addUser" style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-success btn-raised btn-secondary" name="actAcc_submit_prod"><i class="material-icons">playlist_add_check</i></button>
                            
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" type="submit" class="btn btn-raised btn-danger btn-secondary margin-right-30 margin-buttom30" data-dismiss="modal"><i class="material-icons">close</i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>   
    <!--MODAL END ADD USER-->

    <!--MODAL DEPOSIT-->
<div id="mdl-deposit" class="modal fade" role="dialog">
    <div class="modal-dialog" style="margin-top:50px !important; width: 90%;">

        <div class="modal-content" style="background-color:#EEEEEE;">

            <div class="modal-header" style="background-color: #F88158 !important;line-height:75px !important;height:75px !important;">
                
                <h4 class="modal-title float-left color-white font-product">DEPOSIT</h4>
            </div>
            
            <div class="container-fluid">
                
                    <form method="POST" action="/app/controller/mdl-clientView.php" onsubmit="return false;" id="post-deposit-form">
                    <input type="hidden" name="mode" value="transPostDeposit">
                    <input type="hidden" name="status" id="mdl_deposit_status">
                    <input type="hidden" name="AID" id="mdl_deposit_AID">
                    <input type="hidden" name="UID" id="mdl_deposit_UID">
                    <input id="deposit_teller" type="hidden" name="deposit_teller">
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-12" style="">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="color:white;">Client Info</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class='form-group'>
                                            <label for='ACCID' class='control-label col-md-4'>Account ID</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 form-control padding-left10' id='ACCID' name='ACCID' style="width:40% !important;">
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group' style="margin:0 !important;">
                                            <label for='deposit_name' class='control-label col-md-4'>Name</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 modal-width form-control padding-left10' id='deposit_name' name='deposit_name'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group' style="margin:0 !important;">
                                            <label for='deposit_dept' class='control-label col-md-4'>Section</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 modal-width form-control padding-left10 ' id='deposit_dept' name='deposit_dept'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='deposit_prod' class='control-label col-md-4'>Client Type</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='modal-width form-control padding-left10 ' id='deposit_prod' name='deposit_prod' required='required'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12" style="margin-top:0px;">
                                    <div class='form-group'>
                                        <label for='deposit_totbal' class='control-label col-md-4'>Total Balance</label>
                                        <div class='col-md-8'>
                                            <input readonly='readonly' type='text' class='text-center modal-width form-control padding-left10' style='font-size:18px;' id='deposit_totbal' name='deposit_totbal'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="btn-group btn-group-justified btn-group-raised">
                                            <a href="#" class="btn btn-autoAmount">50</a>
                                            <a href="#" class="btn btn-autoAmount">100</a>
                                            <a href="#" class="btn btn-autoAmount">150</a>
                                        </div>
                                        <div class="btn-group btn-group-justified btn-group-raised">
                                            <a href="#" class="btn btn-autoAmount">200</a>
                                            <a href="#" class="btn btn-autoAmount">300</a>
                                            <a href="#" class="btn btn-autoAmount">400</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="margin-top:0px;padding-bottom:20px;">
                                    <div class="card-content">
                                        <div class='form-group'>
                                            <label for='deposit_date' class='control-label col-md-4'>Date Generated</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='modal-width form-control padding-left10' id='deposit_date' name='deposit_date'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='deposit_amounts' class='control-label col-md-4' style='font-size:20px;'>Amount</label>
                                            <div class='col-md-8'>
                                                <input tabindex="1" type='text' style='font-size:20px;' class='form-control padding-left10' id='deposit_amount' name='deposit_amount' placeholder="Enter Amount" pattern="[.0-9]{1,100}" required="required" autofocus="autofocus">
                                                <span class='help-block'></code>numbers between 0-9. should not lesser than 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                        <div class="modal-footer">
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Post" type="submit" id="mdl-btn-post-trans-deposit" class="btn btn-raised btn-secondary">
                                            <i class="material-icons">playlist_add_check</i>
                                        </button>
                                    </td>
                                    <td>
                                         <button style="margin-left:10px !important;margin-right10px!important;"rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
            </div>
        </div>

    </div>
</div>   
    <!--END MODAL DEPOSIT-->
    <!--MODAL WITHDRAWAL-->
<div id="mdl-withdrawal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="margin-top:50px !important; width: 90%;">

        <div class="modal-content" style="background-color:#EEEEEE;">

            <div class="modal-header" style="background-color: #F88158 !important;line-height:75px !important;height:75px !important;">
                
                <h4 class="modal-title float-left color-white font-product">WITHDRAWAL</h4>
            </div>
            
            <div class="container-fluid">
                    <?php
                        $Balance = 0;
                        if($userDailyTransactionTableList){
                            while($r = $userDailyTransactionTableList->fetch_assoc()){
                                
                                $amount = number_format($r['amount'],2,'.',',');
                                
                                if($r['trans_type'] == 1){
                                    $Balance+=$amount;
                                }else{
                                    $Balance-=$amount;
                                }
                            }
                        }
                    ?>
                    <form method="POST" action="/app/controller/mdl-clientView.php" id="post-withdrawal-form" onsubmit="return false;">
                    <input type="hidden" name="mode" value="transPostWithdrawal">
                    <input type="hidden" id="withdrawal_teller" name="withdrawal_teller">
                    <input type="hidden" id="userBalance" name="userBalance" value="<?=$Balance;?>">
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-12" style="">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="color:white;">Client Info</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class='form-group'>
                                            <label for='accIdWithdrawal' class='control-label col-md-4'>Account ID</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 form-control padding-left10' id='accIdWithdrawal' name='accIdWithdrawal' style="width:40% !important;">
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group' style="margin:0 !important;">
                                            <label for='withdrawal_name' class='control-label col-md-4'>Name</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 modal-width form-control padding-left10' id='withdrawal_name' name='withdrawal_name'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group' style="margin:0 !important;">
                                            <label for='withdrawal_dept' class='control-label col-md-4'>Section</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='padding-left10 modal-width form-control padding-left10 ' id='withdrawal_dept' name='withdrawal_dept'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='withdrawal_prod' class='control-label col-md-4'>Client Type</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='modal-width form-control padding-left10 ' id='withdrawal_prod' name='withdrawal_prod' required='required'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12" style="margin-top:0px;">
                                    <div class='form-group'>
                                        <label for='withdrawal_totbal' class='control-label col-md-4'>Total Balance</label>
                                        <div class='col-md-8'>
                                            <input readonly='readonly' type='text' style='font-size:18px !important;' class='text-center modal-width form-control padding-left10 ' id='withdrawal_totbal' name='withdrawal_totbal'>
                                            <span class='help-block'></code></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="btn-group btn-group-justified btn-group-raised">
                                            <a href="#" class="btn btn-autoAmount">50</a>
                                            <a href="#" class="btn btn-autoAmount">100</a>
                                            <a href="#" class="btn btn-autoAmount">150</a>
                                        </div>
                                        <div class="btn-group btn-group-justified btn-group-raised">
                                            <a href="#" class="btn btn-autoAmount">200</a>
                                            <a href="#" class="btn btn-autoAmount">300</a>
                                            <a href="#" class="btn btn-autoAmount">400</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="margin-top:0px;padding-bottom:20px;">
                                    <div class="card-content">
                                        <div class='form-group'>
                                            <label for='withdrawal_date' class='control-label col-md-4'>Date Generated</label>
                                            <div class='col-md-8'>
                                                <input readonly='readonly' type='text' class='modal-width form-control padding-left10' id='withdrawal_date' name='withdrawal_date'>
                                                <span class='help-block'></code></span>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='withdrawal_amounts' class='control-label col-md-4' style='font-size:20px;'>Amount</label>
                                            <div class='col-md-8'>
                                                <input tabindex="1" type='text' class='form-control padding-left10' style='font-size:20px;' id='withdrawal_amount' name='withdrawal_amount' placeholder="Enter Amount" pattern="[.0-9]{1,100}" required="required" autofocus="autofocus">
                                                <span class='help-block'></code>numbers between 0-9. should not lesser than 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                              
                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Post" type="submit" id="mdl-btn-post-trans-withdrawal" class="btn btn-raised btn-secondary">
                                            <i class="material-icons">playlist_add_check</i>
                                        </button>
                            
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                            <i class="material-icons">close</i>
                                        </button>       
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </form>
            </div>
        </div>

    </div>
</div>

    <!--END MODAL WITHDRAWAL-->

    <!--MODAL SEARCH ACCOUNT ID-->

<div id="mdl-search-accid" class="modal fade" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" style="margin-top:50px !important; width: 90%;">

        <div class="modal-content" style="background-color:#white;">

            <div class="modal-header" style="background-color: #260552 !important;line-height:75px !important;height:75px !important;">
                
                <h4 class="modal-title float-left color-white font-product">SEARCH</h4>
            </div>
            
            <div class="container-fluid">
                
                    <form method="POST" action="" onsubmit="return false;" id="form-search">

                        <div class="modal-footer">
                            
                            <table style="float:right !important;">
                                <tr>
                                    <td style="width:100%;margin:auto auto;">
                                        <div class="form-group" style="margin-bottom:30px;">
                                            <label for="usr"></label>
                                            <input autofocus="autofocus" type="text" class="form-control" id="input-accid-search" placeholder="Search Account ID / Name / Department / Product">
                                        </div>
                                    </td>
                                    <td>
                                        <button style="width:200px;margin-left:10px !important;margin-right10px!important;" rel="tooltip" data-original-title="Search" type="submit" id="mdl-btn-accid-search" class="btn btn-raised btn-secondary">
                                            <i class="material-icons">search</i>
                                        </button>
                                          
                                    </td>
                                    <td>
                                        <button style="margin-left:10px !important;margin-right10px!important;"rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </form>
            </div>
        </div>

    </div>
</div>       
    <!--MODAL END SEARCH ACCOUNT ID-->

    <!--MODAL CLIENT ACCOUNT DETAILS-->
<div id="mdl--client-Account-details" class="modal fade" role="dialog">
    <div class="modal-dialog" style="margin-top:50px !important; width: 90%;">

        <div class="modal-content" style="background-color:#EEEEEE;">

            <div class="modal-header box-shadow" style="background-color: #009785 !important;line-height:75px !important;height:75px !important;">
                
                <h4 class="modal-title float-left color-white font-product">TRANSACTION HISTORY</h4>
            </div>
            
            <div class="container-fluid">
                
                <form method="POST" action="/app/controller/mdl-clientView.php">
                    <div class="row">
                        <div class="col-md-5">
                           
                            <div style="margin-left:50px;">
                                <div style="margin-top:30px;margin-left:10px;">
                                    <h3 style="color:#009785;" class="font-product">CLIENT INFO:</h3>
                                </div>
                                <div class="form-group">
                                    <label for="i5ps" class="control-label col-md-3">Account ID</label>
                                    <div class="col-md-8">
                                        <input style="padding-left:10px;color:#009785;" readonly="readonly" type="text" class="form-control font-product" id="viewClientTransACID" name="ACID">
                                        <span class="help-block"></code></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i5ps" class="control-label col-md-3">Name</label>
                                    <div class="col-md-8">
                                        <input style="padding-left:10px;color:#009785;" readonly="readonly" type="text" class="form-control font-product" id="viewClientTransName" name="name">
                                        <span class="help-block"></code></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i5ps" class="control-label col-md-3">Client Type</label>
                                    <div class="col-md-8">
                                        <input style="padding-left:10px;color:#009785;" readonly="readonly" type="text" class="form-control font-product" id="viewClientTransProduct" name="prod_name">
                                        <span class="help-block"></code></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i5ps" class="control-label col-md-3">Section</label>
                                    <div class="col-md-8">
                                        <input style="padding-left:10px;color:#009785;" readonly="readonly" type="text" class="form-control font-product" id="viewClientTransDepartment" name="dept_name">
                                        <span class="help-block"></code></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-7" style="margin-top:15%;">
                            <div class="form-group" style="float:right;">
                                <label for="i5ps" class="control-label col-md-5" style="font-size:16px;"><b>Total Amount<b></label>
                                <div class="col-md-6" style="padding-right:15px;">
                                    <input style="padding-left:10px;color:#009785;" readonly="readonly" type="text" class="form-control font-product text-center" id="totbalnce" name="ACID">
                                    <span class="help-block"></code></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="margin:0 auto; width:90%;padding-top:50px;border-top:1px solid #ddd;margin-top:30px;"> 
                        <div class="row">
                            <table id="clientTransTbl" class="table table-striped" style="width:100%;">        
                                <thead>
                                    <tr>       
                                        
                                        <td class="text-center font-roboto color-a2">Transaction ID</td>
                                        <td class="text-center font-roboto color-a2">Transaction Type</td>
                                        <td class="text-center font-roboto color-a2">Transaction Date</td>
                                        <td class="text-center font-roboto color-a2">Amount</td>
                                        <td class="text-center font-roboto color-a2">Teller</td>
                                        <td class="text-center font-roboto color-a2">Total Amount</td>
                                        
                                    </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                        <table style="float:right !important;">
                            <tr>
                                <td>
                                    <button style="margin-left:10px !important;margin-right10px!important;"rel="tooltip" data-original-title="Close" type="submit" class="btn btn-raised btn-secondary" data-dismiss="modal">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        </table>             
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!--EN MODAL CLIENT ACCOUNT DETAILS-->