<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

        <div class="logo text-center">
            <a href="" style="color:orange !important;font-size:22px;font-family:'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;">
                School Banking
            </a>
        </div>

        <div class="sidebar-wrapper" style="">
            <ul class="nav">
                <?php 
                    if($_SESSION['users']['user_level'] == 1)
                        $usrLvl = "Admin";
                    else if($_SESSION['users']['user_level'] == 2)
                        $usrLvl = "Teller";
                    else if($_SESSION['users']['user_level'] == 3)
                        $usrLvl = "CRO";
                    else $usrLvl = "Cashier/BM";

                ?>
               <?php
                    
                    if($_SESSION['users']['user_level'] != 0){
                        $active = $_SERVER['REQUEST_URI'] == '/view/page/home.php' ? 'active' : '';
                        echo "
                            <li class='$active '>
                                <a href='/view/page/home.php'> 
                                    <i class='material-icons'>dashboard</i>
                                    <p>Dashboard</p>
                                </a>
                            </li>    
                        ";
                    }
               
                    
                    $active  = $_SERVER['REQUEST_URI'] == '/view/page/clients.php' ? 'active' : '';
                    echo "
                            <li class='$active'>
                                <a href='/view/page/clients.php'>
                                    <i class='material-icons'>account_box</i>
                                    <p>Clients</p>
                                </a>
                            </li>   
                        ";  
                    

                    if($_SESSION['users']['user_level'] == 1){
                        
                        $activeDept = $_SERVER['REQUEST_URI'] == '/view/page/departments.php' ? 'active' : '';
                        $activeProd = $_SERVER['REQUEST_URI'] == '/view/page/products.php' ? 'active' : '';

                        echo "
                                <li class='$activeDept'>
                                    <a href='/view/page/departments.php'>
                                        <i class='material-icons'>view_compact</i>
                                        <p>Section</p>
                                    </a>
                                </li>
                                <li class='$activeProd'>
                                    <a href='/view/page/products.php'>
                                        <i class='material-icons'>donut_small</i>
                                        <p>Client Type</p>
                                    </a>
                                </li>
                               
                            ";
                    }


                    $activeTransHist = $_SERVER['REQUEST_URI'] == '/view/page/trans_hist.php' ? 'active' : '';
    
                    echo "
                            <li class='$activeTransHist'>
                                <a href='#' data-target='.collapseone' data-toggle='collapse'> 
                                    <i class='material-icons'>assessment</i>
                                    <p>Reports<b class='caret float-right' style='margin-top: 13px;'></b></p>
                                </a>
                                <ul id='sidebarcollapse' class='nav collapse collapseone' aria-expanded='true' style='margin-top: 0px !important;'>
                                    <li id='sidebarReportsCollapse' class='$activeTransHist'>
                                    <a href='/view/page/trans_hist.php'>Transaction History</a>
                                    </li>                   
                                    
                                </ul>
                            </li>
                        ";
                    
                    
                    if($_SESSION['users']['user_level'] == 1){
                        $activeUser = $_SERVER['REQUEST_URI'] == '/view/page/users.php' ? 'active' : '';
                        echo "
                             <li class='$activeUser'>
                                <a href='/view/page/users.php'>
                                    <i class='material-icons'>account_circle</i>
                                    <p>Users</p>
                                </a>
                            </li>
                        ";
                    }

                    
               ?>

            </ul>
        </div>
    </div>

    <div class="main-panel" style="background-color:#F8F8F9;">
        <nav class="box-shadow navbar navbar-transparent navbar-absolute" style="background-color:#260552;">
            <div class="container-fluid" style="height:50px !important;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" style="padding-top:0px !important;">
                    <ul class="nav navbar-nav navbar-right float-right">
                        <table style="">
                            <tr>
                                <td>
                                    <p class="font-product" style="font-size:20px;color:white;margin:10px;margin-right:20px;margin-bottom:0px;"><?=$_SESSION['users']['nickname']; ?></p><p style="margin:0 !important;font-size:10px;color:white;" class="padding-left10"><?=$usrLvl ?></p>
                                </td>
                                <td>
                                    <li class="dropdown" style="margin-right:50px;">
                                        <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons">person</i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php
                                                if($_SESSION['users']['user_level'] == 1 || $_SESSION['users']['user_level'] == 2){
                                                    echo '<li id="chnge_pass"><a style="font-weight:bold;font-size:13px !important;" href="/view/page/userDailyTrans.php" class="font-product" style="color:#009785;">My Daily Transaction</a></li>';
                                                }
                                            ?>                                
                                            <li id="chnge_pass"><a style="font-weight:bold;font-size:13px !important;" href="/view/auth/changePass.php" class="font-product" style="color:#009785;">Change Password</a></li>                                
                                            <li id="logout"><a style="font-weight:bold;font-size:13px !important;" href="/app/controller/auth/logout.php" class="font-product" style="color:#009785;">Logout</a></li>                                
                                        </ul>
                                    </li>
                                </td>
                            </tr>
                        </table>
                      
                    </ul>
                    <a class="navbar-brand float-right font-product" style="color:white;" href="#"></a>
                    

                </div>
            </div>
        </nav>

        <div class="content col-md-12">
             <div class="container-fluid col-md-12">