<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/1/30
 * Time: 15:08
 */

echo "开始调试<br/>";

$serverName = "(local)";
$arrConConfig = array("UID"=>"sa","PWD"=>"ygj000","Database"=>"heima");
try {
    $con = sqlsrv_connect($serverName, $arrConConfig);
    if($con===false){
        echo "连接失败";
            echo "Unable to connect.</br>";
            die( print_r( sqlsrv_errors(), true));
    }
    $sql = "select count(1) from sysobjects where xtype = 'u'";
    $stmt = sqlsrv_query($con,$sql);
    if($stmt===false){
        echo "执行查询失败</br>";
        die( print_r( sqlsrv_errors(), true));
    }
    $row = sqlsrv_fetch_array($stmt);
    echo "数据库中共有 ".$row[0]."张表</br>";
}
catch(Exception $ex){
    print $ex->getMessage();    
}


