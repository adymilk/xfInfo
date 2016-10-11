        <?php 

        include '../config/init.php';

        $username = $_POST['uname'];
        $userpass = $_POST['upass'];
            
if(!isset($_SESSION)){
    session_start();
}

        //密码加密
        // $userpass = md5($userpass);
        //插入用户注册数据到数据库
        $result = mysql_query("INSERT INTO `user` (`uName`,`uPass`) VALUES ('$username','$userpass')");

        if ($result) {
            echo $username."注册成功";
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['uid'];
            echo '欢迎你！【'. $_SESSION['username'].' 】登录成功 2 秒后自动进入';
    echo '如果没有跳转  <a href="../index.php">点击此处</a>';
            header("Refresh:2;url=../index.php");
        }else{
            echo $username."注册失败";
        }


        mysql_close($con);
        
         ?>