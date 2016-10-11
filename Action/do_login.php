    <?php 
    header('content-type:text/html;chartset=utf-8');
    include '../config/init.php';
if(!isset($_SESSION)){
    session_start();
}

    $username = $_POST["username"];
    $userpass = $_POST["userpass"];



    $result =mysql_query("select * from `user` where `uName` = '$username' and `uPass` = '$userpass' ") ;

    if (mysql_fetch_array($result)) {
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    // 登录成功！
    echo '欢迎你！【'. $_SESSION['username'].' 】登录成功 2 秒后自动进入';
    echo '如果没有跳转  <a href="../index.php">点击此处</a>';
    header("Refresh:2;url=../index.php");
    exit;
        
    }else{
            echo "登录失败/用户名或密码不正确";
            header("Refresh:5;url=../login.php");
        }
        //注销登录

if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="../login.php">登录</a>';
    header("Refresh:2;url=../index.php");
    exit;

}

     ?>