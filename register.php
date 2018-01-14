<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }

    $name=$_POST['name'];
    $password=$_POST['password'];

    include('connect.php');
    $q="insert into user(id,username,password) values (null,'$name','$password')";
    $reslut=mysql_query($q,$con);
    
    if (!$reslut){
        die('Error: ' . mysql_error());
    }else{
        echo "注册成功";
    }
    mysql_close($con);

?>