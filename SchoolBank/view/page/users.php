<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
?>
    
    <div class="row">
        <div class="container-fluid">
                
                <button rel="tooltip" data-original-title="Add User" data-target="#modalUser" data-toggle="modal" class="inline btn btn-white btn-round btn-just-icon" style="height: 50px; width: 50px; float: right !important;">
                    <i class='material-icons'>add</i>
                </button>

            </div>
            <table id="myTable" class="table table-striped">        
                <thead>
                    <tr>
                    
                        <td class="text-center font-roboto color-a2">UID</td>
                        <td class="text-center font-roboto color-a2">USERNAME</td>
                        <td class="text-center font-roboto color-a2">NICKNAME</td>
                        <td class="text-center font-roboto color-a2">ROLE</td>
                        <td class="text-center font-roboto color-a2">ACTION</td>
                    </tr>
            </thead>
            <tbody>
            <?php 
            
                if($users){
                    while($r = $users->fetch_assoc()){
                        $UID = $r['UID'];
                        $username = $r['username'];
                        $user_level = $r['user_level'];
                        $nickname = $r['nickname'];
                        if($user_level == 1){
                            $role = "Admin";
                        }else if($user_level == 2){
                            $role = "Teller";
                        }else if($user_level == 3){
                            $role = "CRO";
                        }else{
                            $role = "BM/Cashier";
                        }
                        
                        echo "
                                <tr>  
                                    <td class='text-center checked'>$UID</td>
                                    <td class='text-center'>$username</td>
                                    <td class='text-center'>$nickname</td>
                                    <td class='text-center'>$role</td>
                                    <td class='text-center'>
                                    
                                    <form method='POST' action='/app/controller/mdl-accView.php'>
                                        <button data-id='$UID' rel='tooltip' data-original-title='Update' class='btn-update-user btn-info btn btn-raised btn-sm' type='submit' name='update' style='margin:10px -25px !important;'>
                                            <i class='material-icons'>create</i>
                                        </button>
                                        <button data-id='$UID' rel='tooltip' data-original-title='Delete' class='btn-delete-user btn-danger btn btn-raised btn-sm margin-left-30' type='submit' name='deleteUser'>
                                            <i class='material-icons'>delete</i>
                                        </button>
                                    </form>
                                    
                                    </td>
                                </tr>
                        ";
                    }
                }
            ?>
        </tbody>
        </table>
    </div>
<?php
    include "../../view/base/footer.php";
?>

