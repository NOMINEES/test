<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }

    include('connect.php');
    $name = $_POST['name'];
    $passowrd = $_POST['password'];

    if ($name && $passowrd){
             $sql = "select * from user where username = '$name' and password='$passowrd'";
             $result = mysql_query($sql);
             $rows=mysql_num_rows($result);
             if($rows){
                   header("refresh:0;url=welcome.html");
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";
             }
             

    }else{
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        
    }

    mysql_close();
?>