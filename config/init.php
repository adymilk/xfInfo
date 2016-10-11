            <?php 
                include 'config.php';
                //设置字符编码为国际编码utf-8
                header('content-type:text/html;charset=utf-8'); 

                // 连接mysql
                $con = mysql_connect(HOST,USER,PWD)or die('数据库连接失败');
                if ($con) {
                    // 创建数据库
                    mysql_query("CREATE DATABASE IF NOT EXISTS `xfhelp`");
                    // 选择数据库
                    mysql_select_db(DB);
                    // 创建数据表
                    $create_tbl = mysql_query("create table if not exists `user`(
                    `id`        int(10)         unsigned    not null primary key    auto_increment,
                    `uName`     varchar(20)     not null,
                    `uPass`     varchar(20)     not null,
                    `regTime`   varchar(30)     default null
                )engine=myisam default charset=utf8;") or die("创建数据表失败");
                    # code...
                }
                
                    
                
             ?>
