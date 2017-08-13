<?php
    
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
    if(!isset($_SESSION['users'])) {
        include_once("/view/auth/login.php");
        exit;
    }
?>
    <div class="row">
        <?php
            $a= 0;
            $b = &$a;
            $b++;
            echo $b;
        ?>
        <a href="/getFile/postTransaction.php">asdfasdf</a>
    </div>

    
<?php
    include "../../view/base/footer.php";
?>

