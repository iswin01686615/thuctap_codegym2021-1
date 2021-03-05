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
            $sql ="select * from information where Email='$session'"; 
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
    }
?>