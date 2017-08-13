<?php
    include  $_SERVER["DOCUMENT_ROOT"] . "/view/base/header.php";
    include ROOT . "app/controller/auth/loginController.php";
    
?>
    <div style="">
        <div class="ui middle aligned center aligned grid">
            <div class="column" style="width:35%;margin-top:8%;margin-left:18%;">
               
                <div class="card">
                    <div class="card-header" style="background-color:#260552;">
                        <p style="padding:25px;color:white;font-size:24px;font-family:'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;">
                            SCHOOL BANKING
                        </p>
                    </div>
                    <div class="card-content">
                        <form class="ui large form" method="post">
                            <div class="" style="margin-top:50px;">
                                <div class="field">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" id="usern" name="username" autofocus="autofocus" placeholder="Enter Username">
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input id="passw" type="password" name="password" placeholder="Enter Password">
                                </div>
                                </div>
                                <div class="ui fluid large teal submit button login" style="background-color:#260552;">Login</div>
                            </div>
                            <div class="ErrorMessage" style="padding:25px;"><?=$loginMessage;?></div>
                            <div class="ui error message">
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="ui message">
                    more about <a href="#">School Bank</a> | <a href="#" style="color:orange;">EBI</a>
                </div>
            </div>
        </div>
        
    </div>
    
    
              
<?php
    include ROOT . "view/base/footer.php";
?>


