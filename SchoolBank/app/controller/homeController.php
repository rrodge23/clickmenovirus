<?php
    include ROOT . "database/home.php";
    include ROOT . "database/user.php";
    include ROOT . "database/department.php";
    include ROOT . "database/products.php";
    include ROOT . "database/client.php";
    include ROOT . "database/transaction.php";
    
    if(!isset($_SESSION['users'])){
        header('location:/view/auth/login.php');
        exit;
    }
    class homeCtrl{
        
        function __construct(){

        }

        public function logout(){
            session_destroy();
            header('location:'. ROOT . '');
        }    

        
    }
    

    //////// USERS ////////////
    $dbUser = new modelUser();
    $users = $dbUser->getAllUsers();
    //////// CLIENTS /////////

    $dbClient = new modelClient();
    $clients = $dbClient->getAllClientDetails();

    //MODAL ACT. USER DEPARTMENT DROPDOWN

    $dbdept = new modelDept();
    $dept =  $dbdept->getDepartments();

    //MODAL USER VIEW DROPDOWN
    $dbdept = new modelDept();
    $mdropdowndept =  $dbdept->getDepartments();
    /// MODAL ACT. PROD DROPDOWN

    $dbProd = new modelProd();
    $ddprod = $dbProd->getAllProd();

    ///********** DEPARTMENT *******************///
   

    /********* SUBMIT MODAL ADD DEPARTMENT ************/

    
    ///*****************************************///


    ///*************** PRODUCT *********************///


    $dbProd = new modelProd();
    $prod = $dbProd->getAllProd();

    //MODAL USER VIEW DROPDOWN PRODUCT
    $dbProd = new modelProd();
    $mDropdownProd = $dbProd->getAllProd();

    /************** ADD PRODUCT *****************/
    


    ///*************** TRANSACTION *********************///

    $dbTrans = new modelTrans();
    $transactionListDeposits = $dbTrans->getAllTransactionHistoryDeposits();
    $dbTrans = new modelTrans();
    $transactionListWithdrawals = $dbTrans->getAllTransactionHistoryWithdrawals();

    ///*************** END TRANSACTION *********************///

    ///*************** USER DAILY TRANSACTION *********************///
    $tmp = new modelUser();
    $userBalance = $tmp->userBalance($_SESSION['users']['UID']);
    if($userBalance){
        $userRunningBalance = 0;
        while($bal = $userBalance->fetch_assoc()){
            if($bal['trans_type'] == 1){
                $userRunningBalance += $bal['amount']; 
            }else{
                $userRunningBalance -= $bal['amount'];
            }
        }
        
    }

    $tmp = new modelUser();
    $userDailyTransactionTableList = $tmp->userBalance($_SESSION['users']['UID']);
    ///*************** END USER DAILY TRANSACTION *********************///
?>
