<?php
    include $_SERVER["DOCUMENT_ROOT"] . "database/user.php";

    if($_POST['mode'] == "viewAccount"){
        $dbUser = new modelUser();
        $userData = $dbUser->getUserInfoById($_POST['id']);
        echo json_encode($userData);
    }
    
    if($_POST['mode'] == "delAccount"){
        $dbUser = new modelUser();
        $userData = $dbUser->deleteUser($_POST['id_del']);
        echo json_encode($userData);
    }

    if($_POST['mode'] == "addUser"){
        $dbUser = new modelUser();
        $userData = $dbUser->activateUser($_POST);
        echo json_encode($userData);
    }
    if($_POST['mode'] == "userUpdate"){
        $dbUser = new modelUser();
        $userData = $dbUser->updateUser($_POST);
        echo json_encode($userData);
    }
    
    if($_POST['mode'] == "userChangePass"){
        $dbUser = new modelUser();
        $userData = $dbUser->userChangePassword($_POST);
        if($userData == true){
            $_SESSION['users']['password'] == $_POST['newpass'];
        }

        echo json_encode($userData);
    }

    

?>