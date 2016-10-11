
                     -- 小枫Info官网数据库设计--

/*创建数据库*/
-- create database if not exists `xiaofeng`;

/*创建表*/
--unsigned->无字符
--auto_increment->自增
--engine->数据库引擎myisam
create table if not exists `user`(
        `id`        int(10)         unsigned    not null primary key    auto_increment,
        `uName`     varchar(20)     not null,
        `uPass`     varchar(20)     not null,
        `regTime`   varchar(30)     default null
    )engine=myisam default charset=utf8;

