<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/login.php";
    
?>
    
    <div class="row">
       <?php
            for($i = 1; $i <= 10; $i++){
                for($j = 1; $j <= 10; $j++){
                    echo $i*$j . " ";	
                }
                echo "<br>";
            }
       ?>
    </div>
<?php
    include "../../view/base/footer.php";
?>

