<?php
    $hostname='localhost';
    $user='root';
    $pass='';
    $database='taikhoan';

    $conn=mysqli_connect($hostname,$user,$pass,$database);
    mysqli_query($conn,'set names"utf8"');
    if(!$conn)	{
    	die("Ket noi that bai:" .mysqli_connect_error());
    }
?>