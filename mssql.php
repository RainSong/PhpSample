<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/2/1
 * Time: 11:43
 */

$conn =mssql_connect("local","sa","ygj000");
if(!$conn){
    echo "连接失败";
}