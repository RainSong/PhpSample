<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/2/1
 * Time: 8:10
 */
//不显示过时函数信息
error_reporting(E_ALL ^ E_DEPRECATED);

$server = "localhost";
$userName = "root";
$password = "ygj000";
$database = "wordpress";

$con = mysql_connect($server,$userName,$password);
if(!$con){
    echo "连接数据库失败<br>";
    print_r(mysql_errno(),true);
}
mysql_select_db($database);
$sql = "select count(1) from wp_users;";

$result = mysql_query($sql);
if(!$result){
    echo "执行查询失败<br/>";
    print_r(mysql_errno(),true);
}

$rows = mysql_fetch_array($result);

echo "表中共有 ".$rows[0]."条数据</br>";

