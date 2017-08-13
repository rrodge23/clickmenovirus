<?php
    
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
    if(!isset($_SESSION['users'])) {
        include_once("/view/auth/login.php");
        exit;
    }
    $Balance = 0;
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
                            $amount = number_format($r['amount'],2,'.',',');
                            $total_amount = number_format($r['total_amount'],2,'.',',');
                            
                            if($r['trans_type'] == 1){
                                $Balance+=$amount;
                                $trans_type = "Deposit";
                            }else{
                                $Balance-=$amount;
                                $trans_type = "Withdrawal";
                            }
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
        <h1>Total Balance:<?=number_format($Balance,2,'.',',')?></h1>
   </div>
<?php
    include "../../view/base/footer.php";
?>

