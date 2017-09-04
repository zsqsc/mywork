<?php
header("Content-type:text/html;charset=utf-8");
include './common/core.php';
include './common/file.php';

$func_name = 'load_config';

switch($func_name){
    case 'load_config':         // 随机字符串
        dump( load_config('./Config/db.php') );break;
    default:break;
}