<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
?>
    
    <div class="row">
        
        <div class="container-fluid">
            <table style="width:100%;">
                <tr>
                    <td>
                        <button rel="tooltip" data-original-title="Add Department" data-target="#modalProd" data-toggle="modal" class="margin-right-30 btn btn-white btn-round btn-just-icon" style="height: 50px; width: 50px; float: right !important;">
                            <i class='material-icons'>add</i>
                        </button>
                    </td>
                </tr>
            </table>
            
            <table id="myTable" class="table table-striped">        
                <thead>
                    <tr>       
                        
                        <td class="text-center font-roboto color-a2">CTID</td>
                        <td class="text-center font-roboto color-a2">Client Type</td>
                        <td class="text-center font-roboto color-a2">Interest Rate</td>
                        <td class="text-center font-roboto color-a2">Action</td>
                        
                    </tr>
            </thead>
            <tbody>
            <?php 
            
                if($prod){
                    while($r = $prod->fetch_assoc()){
                        $id = $r['PID'];
                        $prodName = $r['prod_name'];
                        $inter_rate = $r['inter_rate'];
                        echo "
                            
                                <tr> 
                                    
                                    <td class='text-center checked'>$id</td>
                                    <td class='text-center'>$prodName</td>
                                    <td class='text-center'>$inter_rate'%'</td>
                                    <td class='text-center'>
                                    
                                    <form method='POST' action='/app/controller/mdl-prodView.php'>
                                        <input type='hidden' value='$id' name='PID'>
                                        <button rel='tooltip' data-original-title='Update' class='btn btn-info btn-raised btn-sm btn-view-prod' type='submit' name='prodUpdate' data-id='$id'>
                                            <i class='material-icons'>create</i>
                                        </button>
                                        
                                        <button rel='tooltip' data-original-title='Delete' class='btn-delete-prod btn btn-danger btn-raised btn-sm' type='submit' name='prodDelete' data-id='$id'>
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

    </div>
<?php
    include "../../view/base/footer.php";
?>

