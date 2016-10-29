<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-10 16:09:53
 * @version $Id$
 */
/***
====笔记部分====
用文件操作函数,来批量处理客户名单
***/


$file = './139custom.txt';


/**
第一种办法,简便快捷暴力的办法
file_get_contents获取内容
再用\r\n切成数组

注意: 各操作系统下,换行符并不一致
win: \r\n
Unix: \n
mac: \r

$cont = file_get_contents($file);
//下面这个用\n区分,通用性并不好
print_r(explode("\n",$cont));
**/


/** 
第二种,打开,一点点的读,每次读一行
fgets() 每次读一行
**/

// 模式里面可以加b,表示以2进制来处理 ,不受编码的干扰

/*
$fh = fopen($file,'rb');
echo fgets($fh),'<br />'; //zhangsan
echo fgets($fh),'<br />'; // lisi
echo fgets($fh),'<br />'; // wangwu
*/


// 文件的指针一直再往后移动,
// feof ,end of file的意思
// 专门用来判断指针是否已经走到结尾
/*
$fh = fopen($file,'rb');
while(!feof($fh)) {
    echo fgets($fh),'<br />';
}

*/



// 第三种,也是比较暴力的办法
/*
file函数,直接读取文件内容,并按行拆成数组,
返回该数组

和file_get_contents的相同之处:
一次性读入,大文件慎用!
*/
$arr = file($file);
print_r($arr);




/***
====笔记部分====
判断文件是否存在
获取文件的创建时间/修改时间
***/

$file = 'custom.txt';
if(file_exists($file)) {
    echo $file,'存在<br />';
    echo '上次修改时间是',date('Y-m-d H:i:s',filemtime($file));
} else {
    echo '不存在 ';
}


?>