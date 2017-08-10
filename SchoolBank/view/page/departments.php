<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
?>
    
    <div class="row">
        
        <div class="container-fluid">
            
            <table style="width:100% !important;">
                <tr style="width:100% !important;">
                    <td style="float:right !important;">
                        <button rel="tooltip" data-original-title="Add Department" data-target="#modalDept" data-toggle="modal" class="btn btn-white btn-round btn-just-icon" style="height: 50px; width: 50px;">
                            <i class='material-icons'>add</i>
                        </button>
                    </td>
                </tr>
            </table>

        </div>
        <table id="myTable" class="table table-striped">        
            <thead>
                <tr>
                   
                    <td class="text-center font-roboto color-a2">ID</td>
                    <td class="text-center font-roboto color-a2">SECTION</td>
                    <td class="text-center font-roboto color-a2">ACTION</td>
                </tr>
          </thead>
        <tbody>
        <?php 
           
            if($dept){
                while($r = $dept->fetch_assoc()){
                    $did = $r['DID'];
                    $department = $r['dept_name']; 
                    echo "
                            <tr>  
                                <td class='text-center checked'>$did</td>
                                <td class='text-center'>$department</td>
                                <td class='text-center'>
                                
                                <form method='POST' action='/app/controller/mdl-deptView.php'>
                                    <button data-id='$did' rel='tooltip' data-original-title='Update' class='btn-update-dept btn btn-info btn-raised btn-sm' type='submit' name='update' style='margin:10px -25px !important;'>
                                        <i class='material-icons'>create</i>
                                    </button>
                                    <button data-id='$did' rel='tooltip' data-original-title='Delete' class='btn-delete-dept btn btn-danger btn-raised btn-sm margin-left-30' type='submit' name='deleteDept'>
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

