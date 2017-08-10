<?php
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
?>
        <div class="row">
            <h1 class="font-product margin-left-30">TRANSACTION HISTORY</h1>
        </div>
        <div class="row">
            <ul class="nav nav-tabs" role="tablist" style="background-color:transparent !important;border-bottom:1px solid #ddd;">
                <li class="active" class="aw">
                    <a href="#tab-table1" class="font-product" style="color:#009785 !important;" data-toggle="tab">Deposits</a>
                </li>
                <li>
                    <a href="#tab-table2" class="font-product" style="color:#009785 !important;" data-toggle="tab">Withdrawals</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-table1">
                    <table id="myTable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td class="text-center font-roboto color-a2">Transaction ID</td>
                                <td class="text-center font-roboto color-a2">Account ID</td>
                                <td class="text-center font-roboto color-a2">Transaction Date</td>
                                <td class="text-center font-roboto color-a2">Amount</td>
                                <td class="text-center font-roboto color-a2">Total Amount</td>
                                <td class="text-center font-roboto color-a2">Teller</td>
                                <?php
                                    if($_SESSION['users']['user_level'] == 1){
                                        echo "
                                            <td class='text-center font-roboto color-a2'>ACTION</td>
                                        ";
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if($transactionListDeposits){
                                    while($r = $transactionListDeposits->fetch_assoc()){
                                        $id = $r['ID'];
                                        $ACID = $r['ACID'];
                                        $trans_date = $r['trans_date'];
                                        $amount = number_format($r['amount'],2,'.',',');
                                        $total_amount = number_format($r['total_amount'],2,'.',',');
                                        $teller = $r['teller'];
                                        if($amount != 0){
                                            
                                            echo "
                                                <tr>  
                                                    <td class='text-center checked'>$id</td>
                                                    <td class='text-center'>$ACID</td>
                                                    <td class='text-center'>$trans_date</td>
                                                    <td class='text-center'>$amount</td>
                                                    <td class='text-center'>$total_amount</td>
                                                    <td class='text-center'>$teller</td>
                                                    
                                                
                                            ";

                                            if($_SESSION['users']['user_level'] == 1){
                                                echo "
                                                    <td class='text-center'>
                                                        <form method='POST' action='/app/controller/mdl-transCtrl.php'>
                                                            <button data-id='$id' rel='tooltip' data-original-title='Delete' class='btn-delete-trans btn btn-raised btn-sm margin-left-30' type='submit' name='deleteTrans'>
                                                                <i class='material-icons'>delete</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                ";
                                            }
                                            echo "</tr>";
                                        }
                                    }
                                }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab-table2">
                    <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
            
                                <td class="text-center font-roboto color-a2">Transaction ID</td>
                                <td class="text-center font-roboto color-a2">Account ID</td>
                                <td class="text-center font-roboto color-a2">Transaction Date</td>
                                <td class="text-center font-roboto color-a2">Amount</td>
                                <td class="text-center font-roboto color-a2">Total Amount</td>
                                <td class="text-center font-roboto color-a2">Teller</td>
                                <?php
                                    if($_SESSION['users']['user_level'] == 1){
                                        echo "
                                            <td class='text-center font-roboto color-a2'>ACTION</td>
                                        ";
                                    }
                                ?>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if($transactionListWithdrawals){
                                    while($r = $transactionListWithdrawals->fetch_assoc()){
                                        $id = $r['ID'];
                                        $ACID = $r['ACID'];
                                        $trans_date = $r['trans_date'];
                                        $amount = $r['amount'];
                                        $total_amount = $r['total_amount'];
                                        $teller = $r['teller'];
                                        echo "
                                            <tr>  
                                                <td class='text-center checked'>$id</td>
                                                <td class='text-center'>$ACID</td>
                                                <td class='text-center'>$trans_date</td>
                                                <td class='text-center'>$amount</td>
                                                <td class='text-center'>$total_amount</td>
                                                <td class='text-center'>$teller</td>
                                            
                                        ";
                                        if($_SESSION['users']['user_level'] == 1){
                                            echo "
                                                <td class='text-center'>
                                                    <form method='POST' action='/app/controller/mdl-deptView.php'>
                                                        <button data-id='$id' rel='tooltip' data-original-title='Delete' class='btn-delete-trans btn btn-raised btn-sm margin-left-30' type='submit' name='deleteTrans'>
                                                            <i class='material-icons'>delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            ";
                                        }
                                        echo "</tr>";
                                    }
                                }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
<?php
    include "../../view/base/footer.php";
?>

