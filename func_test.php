<?php
header("Content-type:text/html;charset=utf-8");
include './common/core.php';
include './common/function.php';

functest( 'encrypt');
functest( 'decrypt');
// 示例数组数据
$arr = array(  array('id'=>1,'name'=>'张三','score'=>66,'list_order'=>12,'parent_id'=>0),
                array('id'=>3,'name'=>'李四','score'=>99,'list_order'=>6,'parent_id'=>1),
                array('id'=>2,'name'=>'丁丁','score'=>88,'list_order'=>8,'parent_id'=>3),
                array('id'=>4,'name'=>'小马','score'=>88,'list_order'=>8),'parent_id'=>1 );

function functest($func_name){
    if(!is_string($func_name)) return '';
    switch($func_name){
        case 'auto_charset':        //自动转换字符集 支持数组转换
            header("Content-type:text/html;charset=gbk");
            var_dump( auto_charset($arr,'utf-8','gbk') );break;
        case 'rand_string':         // 随机字符串
            var_dump( rand_string(6) );break;
        case 'cn_substr':           // 中文字符截取
            $str = '这是一个关于字符串截取的故事，看看结果吧';
            $str2 = '这a是this一个关于str字符串截取的故事，看看结果吧';
            dump( cn_substr($str,2,35) );
            dump( cn_substr($str2,2,10) );break;
        case 'remove_xss':          // xss字符串处理
           echo remove_xss("<script type=\"text/javascript\">alert('跨站攻击鸟')</script>") ;break;
            break;
        case 'build_count_rand':    // 随机数组
            var_dump(build_count_rand(5,10,-1));break;
        case  'list_sort_by':       // 数组字段排序
            echo '<br/><br/>初始数组：<br/>';    var_dump($arr);
            echo '<br/><br/>按name排序：<br/>';  var_dump( list_sort_by($arr,'name') );
            break;
        case 'list_search':         // 在数据列表中搜索
            var_dump(list_search($arr,array('score'=>'88')));break;
            break;
        case  'list_to_tree':
            var_dump(list_to_tree($arr,'id','parent_id'));exit;
        case 'byte_format':         // 字节格式化 把字节数格式格式化
            var_dump(byte_format(128404123123));break;
            break;
        case 'is_utf8':             // 检查字符串是否是UTF8编码
            var_dump(is_utf8('&#x65E0;&#x529E;&#x6CD5;'));echo '<br/>';
            break;
        case 'get_client_ip':       // 获取客户端IP
            dump(get_client_ip());break;
        case 'encrypt':
            dump(encrypt('这是123'));break;
        case 'decrypt':
            dump(decrypt('z13FKvJvYgDgKq9Yg8WbO4IwPsYgzgU'));break;
        default:break;
    }

}