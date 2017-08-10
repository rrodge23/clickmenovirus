<?php

	require_once $_SERVER['DOCUMENT_ROOT']."database/dbconn.php";
	require_once $_SERVER['DOCUMENT_ROOT']."app/controller/common.php";

    class modelUser extends database{
        
        public function authLogin($data=NULL)
		{
			$con = $this->conn;
			$result = $con->query("SELECT * FROM users WHERE username LIKE '".$data['username']."' AND password LIKE '".$data['password']."' ");
			$con->close();
			if($result->num_rows > 0)
			{
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

		public function getUserInfoById($data=NULL){
			$con = $this->conn;
			$result = $con->query("SELECT * FROM users WHERE UID LIKE $data");
			$con->close();
			if($result)
			{
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

		public function authCro(){
			$con = $this->conn;
            $sql = "SELECT * FROM users WHERE user_level LIKE '3' ";
            $result = $con->query($sql);
			if($result->num_rows > 0){
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

		public function authCashier(){
			$con = $this->conn;
            $sql = "SELECT * FROM users WHERE user_level LIKE '4' ";
            $result = $con->query($sql);
			if($result->num_rows > 0){
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

		public function userChangePassword($data=NULL){
			$con = $this->conn;
            $sql = "UPDATE users SET password='{$data['newpass']}' WHERE UID LIKE '{$_SESSION['users']['UID']}'";
            $result = $con->query($sql);
            
			if(!$result){
				return false;
			}
			$sql = "UPDATE users SET status='active' WHERE UID LIKE '{$_SESSION['users']['UID']}'";
            $result = $con->query($sql);
            $con->close();
			if($result){
				return true;
			}else{
				return false;
			}
		}

		public function getAllUsers(){
            $con = $this->conn;
            $sql = "SELECT * FROM users";
            $result = $con->query($sql);
            $con->close();

			if($result->num_rows > 0)
			{
				return $result;
			}
			return false;
        }

		public function activateUser($data){

			if($data['user_level'] != 2){
				$con = $this->conn;
				$sql = "SELECT * FROM users WHERE user_level LIKE '{$data['user_level']}'";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					return false;
				}
			}
			
            $con = $this->conn;
			$sql = "SELECT * FROM users WHERE UID NOT LIKE '{$data['UID']}' AND username LIKE '".$data['username']."'";
			$result = $con->query($sql);
			if($result->num_rows > 0)
			{
				return false;
			}
			
			$sql = "INSERT INTO users(username,password,user_level,nickname,status)
					 VALUES('{$data['username']}','ebipass','{$data['user_level']}','{$data['nickname']}','new')
					 ";
			$result = $con->query($sql);
			if($result){	
				return true;
			}else{
				return false;
			}
			
		}

		public function deleteUser($data=NULL){
			$con = $this->conn;
            $sql = "SELECT * FROM users WHERE UID LIKE '".$data."'";
            $result = $con->query($sql);
			if($result->num_rows > 0){
				$userData = $result->fetch_assoc();
				if($userData['user_level'] == 1){
					return false;
				}
			}
			$con = $this->conn;
            $sql = "DELETE FROM users WHERE UID LIKE '".$data."'";
            $result = $con->query($sql);
			
			if($result)
			{
				return true;
			}else{
				return false;
			}
		}

		public function updateUser($data=NULL){
			
            $con = $this->conn;
            $sql = "SELECT * FROM users WHERE username LIKE '{$data['update_username']}' OR nickname LIKE '{$data['update_nickname']}' AND UID NOT LIKE '{$data['update_UID']}' ";
            $result = $con->query($sql);
			if($result->num_rows > 0){
				return false;
			}
			$sql ="UPDATE users SET username='{$data['update_username']}',
						  nickname='{$data['update_nickname']}', 
						  user_level='{$data['update_userlevel']}'
						  WHERE UID LIKE '{$data['update_UID']}'
			";
			$result = $con->query($sql);
			if($result){
				return true;
			}else{
				return false;
			}
        }

		public function userBalance($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM users LEFT JOIN transaction ON users.UID = transaction.user_id WHERE users.UID LIKE '{$data}' AND transaction.trans_date LIKE '".date('Y-m-d')."%' ";
            $result = $con->query($sql);
            $con->close();

			if($result->num_rows > 0)
			{
				return $result;
			}
			return false;
        }


    }
?>