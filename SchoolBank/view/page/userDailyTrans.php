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
        <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>

                    <td class="text-center font-roboto color-a2">Transaction ID</td>
                    <td class="text-center font-roboto color-a2">Account ID</td>
                    <td class="text-center font-roboto color-a2">Transaction Date</td>
                    <td class="text-center font-roboto color-a2">Transaction Type</td>
                    <td class="text-center font-roboto color-a2">Amount</td>
                    <td class="text-center font-roboto color-a2">Total Amount</td>
               
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($userDailyTransactionTableList){
                        while($r = $userDailyTransactionTableList->fetch_assoc()){
                            $id = $r['ID'];
                            $ACID = $r['ACID'];
                            $trans_date = $r['trans_date'];
                            $trans_type = $r['trans_type'];
                            $amount = $r['amount'];
                            $total_amount = $r['total_amount'];
                            echo "
                                <tr>  
                                    <td class='text-center checked'>$id</td>
                                    <td class='text-center'>$ACID</td>
                                    <td class='text-center'>$trans_date</td>
                                    <td class='text-center'>$trans_type</td>
                                    <td class='text-center'>$amount</td>
                                    <td class='text-center'>$total_amount</td>
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

