<?php
    include $_SERVER["DOCUMENT_ROOT"] . "database/client.php";
    include $_SERVER["DOCUMENT_ROOT"] . "app/controller/common.php";
    
    
    if($_POST['mode'] == "addClient"){
        $dbClient = new modelClient();
        $clientData = $dbClient->activateAcc($_POST);
        echo json_encode($clientData);
    }

    if($_POST['mode'] == "viewClient"){
        $dbClient = new modelClient();
        $clientData = $dbClient->getClientInfoById($_POST['id_view']);
        echo json_encode($clientData);
    }
    
    if($_POST['mode'] == "updateClient"){
        $dbClient = new modelClient();
        $clientData = $dbClient->updateClient($_POST);
        echo json_encode($clientData);
    }

    if($_POST['mode'] == "deleteClient"){
        $dbClient = new modelClient();
        $clientData = $dbClient->deleteClient($_POST['del_id']);
        echo json_encode($clientData);    
    }

    if($_POST['mode'] == "viewTrans"){
        $dbClient = new modelClient();
        $clientData = $dbClient->depositView($_POST['id_view']);
        $clientData['nickname'] = $_SESSION['users']['nickname'];
        echo json_encode($clientData);
    }

    if($_POST['mode'] == "transPostDeposit"){
        $dbClient = new modelClient();
        $link = "/getFile/postTransaction.php?accid=" . $_POST['ACCID'] . "&name=" . $_POST['deposit_name'] . "&section=" .$_POST['deposit_dept'] . "&clientType=" . $_POST['deposit_prod'];
        $clientData = array('result' => $dbClient->postDeposit($_POST), 'items' => $link);
        echo json_encode($clientData);
    }

    if($_POST['mode'] == "transPostWithdrawal"){
        $dbClient = new modelClient();
        $clientData = $dbClient->postWithdrawal($_POST);
        echo json_encode($clientData);
    }
    
    if($_POST['mode'] == "viewClientTransaction"){
        $dbClient = new modelClient();
        $clientData = $dbClient->getClientInfoById($_POST['id_view']);

        $dbTransClient = new modelClient();
        $transData = $dbTransClient->getAllClientTransByACID($_POST['acid']);
        $arrList = array();
        while($r = $transData->fetch_assoc()){
            $arrList[] = $r;    
        }
        $dbClient = new modelClient();
        $totbalData = $dbClient->depositView($_POST['id_view']);
        $arrObject = array('client'=>$clientData,'trans'=>$arrList,'totbal'=>$totbalData);
        echo json_encode($arrObject);
    }

    
?>  
