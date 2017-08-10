<?php
    include ROOT . "database/user.php";

    class loginCtrl{
        
        var $message = "";

        function __construct(){}
        
        public function checkLogin($data=NULL){
            
            if(isset($data['username']) && isset($data['password'])){
                $dbCro = new modelUser();
                $croAuth = $dbCro->authCro();
                $dbCashier = new modelUser();
                $cashierAuth = $dbCashier->authCashier();
                $temp = new modelUser();
                if($result = $temp->authLogin($data)){
                    if($result['user_level'] == 3 || $result['user_level'] == 4){
                        header('location:'. VIEW . 'auth/changePass.php');
                    }
                    if($data['username'] == $result['username'] && $data['password'] == $result['password']){
                        $_SESSION['users'] = array('UID' => $result['UID'],
                                                'username' => $data['username'], 
                                                'password' => $data['password'], 
                                                'user_level' => $result['user_level'],
                                                'nickname' => $result['nickname'],
                                                'status' => $result['status'],
                                                'cro_pass' => $croAuth['password'],
                                                'cashier_pass' => $cashierAuth['password']
                                                );
                        if($result['status'] == "active"){
                            header('location:'. VIEW . 'page/home.php');
                        }else{
                            
                            header('location:'. VIEW . 'auth/changePass.php');
                        }
                
                    }else{
                    $this->message = "Error";
                    }
                }else{
                    $this->message = "Error";
                }
            }
        }
        
    }
    $loginMessage = "";
    if(isset($_POST['username']) && isset($_POST['password'])){
        $tmp = new loginCtrl();
        $tmp->checkLogin($_POST);
        
        if($tmp->message == "Error")
        {
            $loginMessage = "<i class='material-icons' style='margin-right:10px;float:left;'>warning</i><p style='float:left;'>Invalid Login Details</p>";
        }else
        {
            $loginMessage = "";
        }
    }
    
?>