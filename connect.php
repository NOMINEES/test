<?php
    $server="localhost";
    $db_username=''root";
    $db_password="123456";

    $con = mysql_connect($server,$db_username,$db_password);
    if(!$con){
        die("cant connect".mysql_error());
    }
    mysql_select_db('test',$con);
?>