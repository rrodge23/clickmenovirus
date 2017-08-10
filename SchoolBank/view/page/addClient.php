<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid" style="padding:0 !important;">

                <button rel="tooltip" data-original-title="Activate an Account" id="mdl-add" class="inline btn btn-white btn-round btn-just-icon" style="height: 50px; width: 50px; float: right !important;">
                    <i class='material-icons'>add</i>
                </button>
            
            </div>
            <table id="myTable" class="table table-striped col-md-12" style="padding:0 !important;">
                 <thead>
                        <tr>       
                            <td class="text-center font-roboto color-a2">Account Number</td>
                            <td class="text-center font-roboto color-a2">NAME</td>
                            <td class="text-center font-roboto color-a2">SECTION</td>
                            <td class="text-center font-roboto color-a2">CLIENT TYPE</td>
                            <td class="text-center font-roboto color-a2">ACTION</td>
                        </tr>
                </thead>
                    <tbody>
                    <?php 
                    
                        if($clients){
                    
                            while($r = $clients->fetch_assoc()){
                                $AID = $r['AID'];
                                $ACID = $r['ACID'];
                                $name = $r['lastname'] . ", " . $r['firstname'] . " " . $r['middlename'];
                                $department = $r['dept_name'];
                                $prodname = $r['prod_name'];
                    ?>
                                
                                <tr> 
                                    <td style="padding-left:15px;"><?=$ACID?></td>
                                    <td style="padding-left:20px;"><?=$name?></td>
                                    <td style="padding-left:20px;"><?=$department?></td>
                                    <td style="padding-left:20px;"><?=$prodname?></td>
                                    <td style="padding-left:20px;">

                                        <div class="action-btns" style="margin-left:10%;">
                                            <form method="POST" action="/app/controller/mdl-clientView.php">         
                                                
                                                <?php
                                                    echo "
                                                        <button data-id='$AID' name='btn-view' type='button' style='float:left;' rel='tooltip' data-original-title='view' class='float-left btn btn-info btn-raised btn-sm btn-view-user'>
                                                            <i class='material-icons'>remove_red_eye</i>
                                                        </button>
                                                    ";
                                                ?>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                    
                                <?php
                            
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
    include "../../view/base/footer.php";
?>

