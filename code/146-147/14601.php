<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 19:51:50
 * @version $Id$
 */
/***
====笔记部分====
递归删除目录
***/

function deldir($path) {
    
    // 不是目录,直接返回
    if(!is_dir($path)) {
        return NULL;
    }
    
    $dh = opendir($path);
    while(($row = readdir($dh)) !== false) {
        if($row == '.' || $row == '..') {
            continue;
        }
        // 判断是否是普通文件
        if(!is_dir($path . '/' . $row)) {
            unlink($path . '/' . $row);
        } else {
            deldir($path . '/' . $row); //递归把子目录/子文件删了.
        }
    }

    closedir($dh); 
    rmdir($path);
    
    echo '删了',$path,'<br />';
    return true;

}

echo deldir('./a')?'OK':'fail';





?>