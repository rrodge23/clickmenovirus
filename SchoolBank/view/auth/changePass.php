<?php
    include  $_SERVER["DOCUMENT_ROOT"] . "/view/base/header.php";
    include ROOT . "app/controller/auth/loginController.php";
    
?>
    
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6 container-fluid">                            
                    <div class="card" style="background-color: rgba(255,255,255,0.5);margin-top:10%;">
                      
                        <div class="card-content">
                            <form method="post" action="/app/controller/mdl-accView.php">
                                <div class="form-group label-floating">
                                    <label for="usern" class="control-label">Enter Old Password</label>
                                    <input type="password" id="oldpass" class="form-control" name="oldpass" autofocus="autofocus">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="newpass" class="control-label">New Password</label>
                                    <input id="newpass" type="password" name="newpass" class="form-control">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="renewpass" class="control-label">Re-Type New Password</label>
                                    <input id="renewpass" type="password" name="renewpass" class="form-control">
                                </div>
                                <div>
                                    <button data-id="<?=$_SESSION['users']['UID']; ?>" id="btn-changepass" style="background-color: #260552;" type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">CHANGE PASSWORD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </div>
              
<?php
    include ROOT . "view/base/footer.php";
?>


