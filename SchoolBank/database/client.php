<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "database/dbconn.php";
    

    class modelClient extends database{

        public function getAllClientDetails(){
            $con = $this->conn;
            $sql = "SELECT * FROM client_info LEFT JOIN accounts ON client_info.AID = accounts.ID 
                                              LEFT JOIN products ON accounts.PID = products.PID 
                                              LEFT JOIN department ON client_info.DID = department.DID
                                              ";
            $result = $con->query($sql);
            $con->close();
            if($result->num_rows > 0){
                return $result;
            }
            return false;
        }

        public function getClientInfoById($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM client_info LEFT JOIN accounts ON client_info.AID = accounts.ID 
                                              LEFT JOIN products ON accounts.PID = products.PID
                                              LEFT JOIN department ON client_info.DID = department.DID
                                              WHERE AID LIKE $data;
                                            ";
            $result = $con->query($sql);
            $con->close();
            if($result){
                $result = $result->fetch_assoc();
                return $result;
            }
            return false;
        }

        public function deleteClient($data=NULL){
			$con = $this->conn;
            $sql = "DELETE FROM client_info WHERE AID LIKE '".$data."'";
            $result = $con->query($sql);
            $sql = "DELETE FROM accounts WHERE ID LIKE '".$data."'";
            $result = $con->query($sql);
			if(!$result)
			{
				return false;
			}else{
                return true;
            }
		}

        public function activateAcc($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM client_info WHERE firstname LIKE '{$data['firstname']}' 
                                                AND middlename LIKE '{$data['middlename']}'
                                                AND lastname LIKE '{$data['lastname']}'
            ";

            $result = $con->query($sql);
            
			if($result->num_rows > 0)
			{
				return "selection ERROR";
			}

            $date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO client_info(firstname,middlename,lastname,birthdate,
                                birthplace,civilstatus,gender,email,address,contact_no,
                                tel_no,cityprovince,zipcode,stat,created_at,updated_at,DID) 
                                VALUES('{$data['firstname']}','{$data['middlename']}','{$data['lastname']}',
                                       '{$data['birthdate']}','{$data['birthplace']}','{$data['civil_stat']}',
                                       '{$data['gender']}','{$data['email']}','{$data['address']}',
                                       '{$data['contact_no']}','{$data['tel_no']}','{$data['city']}',
                                       '{$data['zipcode']}','new','{$date}','','{$data['department']}')
            ";

            $result = $con->query($sql);
            if(!$result){
                return false;
            }
        	
            $accdate = str_replace("-","",date("Y-m-d"));
			$last_insert = $con->insert_id;
			$ACCID = $accdate.$last_insert;
            $sql = "INSERT INTO accounts(ID,ACID,PID) VALUE('$last_insert','$ACCID','{$data['product']}')";
            $result = $con->query($sql);
            if(!$result){
                return $ACCID;
                //return false;
            }
            $date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO transaction(ACID,trans_type,trans_date,amount,teller,total_amount) 
                    VALUES('{$ACCID}','1','{$date}','0','{$_SESSION['users']['nickname']}','0')";
            $result = $con->query($sql);
            if($result){
                
                return array('validation'=>true,'acc_no'=>$ACCID,'client_id'=>$last_insert);
            }else{
                return false;
            }
        }

        public function depositView($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM client_info LEFT JOIN accounts ON client_info.AID = accounts.ID 
                                              LEFT JOIN products ON accounts.PID = products.PID
                                              LEFT JOIN department ON client_info.DID = department.DID 
                                              LEFT JOIN transaction ON accounts.ACID = transaction.ACID
                                              WHERE AID LIKE '{$data}' ORDER BY transaction.ID DESC LIMIT 1;
                                            ";
            $result = $con->query($sql);
            if($result->num_rows == 0){
                return false;
            }
            $con->close();
            if($result){
                $result = $result->fetch_assoc();
                return $result;
            }
            return false;
        }

        
        public function postWithdrawal($data=NULL){
            $con = $this->conn;
            $date = date("Y-m-d H:i:s");
            if($data['withdrawal_totbal']-$data['withdrawal_amount'] < 100){
                return false;
            }
            $total_amt = $data['withdrawal_totbal']-$data['withdrawal_amount'];
            $sql = "INSERT INTO transaction(ACID,trans_type,trans_date,amount,teller,total_amount,user_id) 
                    VALUES('{$data['accIdWithdrawal']}','2','{$date}','{$data['withdrawal_amount']}','{$data['withdrawal_teller']}','{$total_amt}','{$_SESSION['users']['UID']}')";
            $result = $con->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function postDeposit($data=NULL){
            $con = $this->conn;
            $date = date("Y-m-d H:i:s");
            
            $total_amt = $data['deposit_amount']+$data['deposit_totbal'];
            $sql = "INSERT INTO transaction(ACID,trans_type,trans_date,amount,teller,total_amount,user_id) 
                    VALUES('{$data['ACCID']}','1','{$date}','{$data['deposit_amount']}','{$data['deposit_teller']}','{$total_amt}','{$_SESSION['users']['UID']}')";
            $result = $con->query($sql);
            if(!$result){
                return false;
            }
            $sql = "UPDATE client_info SET stat='active' WHERE AID LIKE '{$data['AID']}' ";
            $result = $con->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function updateClient($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM client_info WHERE firstname LIKE '{$data['firstname']}' 
                                                AND middlename LIKE '{$data['middlename']}'
                                                AND lastname LIKE '{$data['lastname']}'
                                                AND AID NOT LIKE '{$data['AID']}'
            ";

            $result = $con->query($sql);
			if($result->num_rows > 0)
			{
				return false;
			}
            $date = date("Y-m-d H:i:s");
            $con = $this->conn;
            $sql = "UPDATE client_info SET firstname='{$data['firstname']}',
                                           middlename='{$data['middlename']}',
                                           lastname='{$data['lastname']}',
                                           birthdate='{$data['birthdate']}',
                                           birthplace='{$data['birthplace']}',
                                           civilstatus='{$data['civilstatus']}',
                                           gender='{$data['gender']}',
                                           email='{$data['email']}',
                                           address='{$data['address']}',
                                           contact_no='{$data['contact_no']}',
                                           tel_no='{$data['tel_no']}',
                                           cityprovince='{$data['city']}',
                                           zipcode='{$data['zipcode']}',
                                           stat='{$data['stat']}',
                                           created_at='{$data['created_at']}',
                                           updated_at='{$date}',
                                           DID='{$data['department']}' 
                                           WHERE AID LIKE '{$data['AID']}'
                                           
            ";
            $result = $con->query($sql);
            if(!$result){
                return false;
            }

            $con = $this->conn;
            $sql = "UPDATE accounts SET PID='{$data['product']}' WHERE ACID LIKE '{$data['ACID']}'";
            $result = $con->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

      
        
        public function getAllClientTransByACID($data=NULL){
            $con = $this->conn;
            $sql ="SELECT * FROM transaction WHERE ACID LIKE $data";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                return $result;
            }else{
                return "false";
            }
        }

    }

?>
