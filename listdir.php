<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/3/21
 * Time: 10:32
 */

$base_path = 'D:\\QMDownload';

if(file_exists($base_path)){
    if(!is_dir($base_path)){
        echo '不是有效的路径';
    }
    else{
        echo '使用readedir读取目录内容：';
        listDir($base_path);
        echo  '<br/><br/>';
        echo '使用scandir读取目录内容：<br/>';
        listDir2($base_path);
    }
}
else{
    echo '路径不存在';
}

function listDir($path)
{
    if ($dir = opendir($path)) {
        while ($f = readdir($dir)) {
            $tempPath =  $path .'\\'. $f;
            if (is_dir($tempPath) && $f != '.' && $f != '..') {
                echo '<br/>';
                echo 'dir:' .$tempPath;
                listDir($tempPath);
            } else {
                echo '<br/>';
                echo 'file:' . $tempPath;
            }
        }
        closedir($dir);
    }
}

function listDir2($path){
   $farr = scandir($path);
    for($i =0;$i<count($farr);$i++){
        $tempPaht = $path .'\\'.$farr[$i];
        if(is_dir($tempPaht) && $farr[$i]!='.' && $farr[$i]!='..'){
            echo '<br/>';
            echo 'dir:'.$farr[$i];
            listDir2($tempPaht);
        }
        else{
            echo '<br/>';
            echo 'file:'.$tempPaht;
        }
    }
}
