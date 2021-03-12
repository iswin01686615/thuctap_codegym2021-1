<?php
    include('Connect.php');
    class Account{
        public function Adduser($firtname,$lastname,$acc,$pw,$day)
        {
            global $conn;
            $sql="insert into account(Firtname,Lastname,Email,Password,Birthday) values('$firtname','$lastname','$acc','$pw','$day')";
            $run= mysqli_query($conn,$sql);
            return $run;
        }
        public function select_user($user)
        {
            global $conn;
            $sql="select * from account where Email='$user'";
            $run=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($run);
            return $num;
        }
        public function all()
        {
            global $conn;
            $sql = "select * from account"; 
        }
		public function login_user($user)
		{
			global $conn;
			$sql="select * from account where Email ='$user'";
			$run = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($run);
			return $num;
		}
		public function login_pass($pass)
		{
			global $conn;
			$sql="select * from account where Password ='$pass'";
			$run = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($run);
			return $num;
		}

        public function select_infor($session)
        {
            global $conn;
            $sql ="select * from account where Email='$session'"; 
            $run=mysqli_query($conn,$sql);
            $data=array();
            if($run)
            {
                while($row=mysqli_fetch_array($run))
                {
                    $data[]=$row;
                }

            }
            return $data;
        }

        public function ht_Thongtin()
        {
            global $conn;
            $sql = "select * from account";
            $arr = array();
            $run = mysqli_query($conn, $sql);
            if($run)
            {
                while($row = mysqli_fetch_array($run))
                $arr[] = $row;
            }
            return $arr;
        }


        public function Update($acc,$pw)
        {
            global $conn;
            $sql="update account set Password='$pw' where Email='$acc'";
            $run= mysqli_query($conn,$sql);
            return $run;
        }
    public function select_pw($user)
        {
            global $conn;
            $sql ="select * from account where Email='$user'";
            $run=mysqli_query($conn,$sql);
            $data=array();
            if($run)
            {
                while($row=mysqli_fetch_array($run))
                {
                    $data[]=$row;
                }

            }
            return $data;
        }
//update account
        public function sl_ac($table, $Email)
		{
			global $conn;
			$sql = "select * from $table where Email='$Email'";
			$arr = array();
			$run = mysqli_query($conn, $sql);
			if($run)
			{
				while($row = mysqli_fetch_array($run))
				$arr[] = $row;
			}
			return $arr;
		}
		public function update_ac($Firtname, $Lastname, $Birthday, $Email) {
			global $conn;
			$sql = "Update account Set Firtname='$Firtname', Lastname='$Lastname', Birthday='$Birthday' where Email='$Email'";
			$run = mysqli_query($conn,$sql);
			if($run)
			{
				return true;
			}
			else
				return false;
		}

    }
?>