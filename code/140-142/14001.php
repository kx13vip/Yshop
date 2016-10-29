<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 08:45:54
 * @version $Id$
 */
//=========================140-文件操作案例之导入csv文件=======================
/***
批量处理文件内容
把小于10字节的文件,和含有fuck的文件删除掉

思路:
循环文件名
判断大小 filesize 如果<10,删.
如果不小于,读内容,判断是否有f**k单词,
如果有, 用unlink来删除.rmdir删除目录;
***/

$arr = array('a.txt' , 'b.txt' , 'c.txt' , 'd.txt');

foreach ($arr as $v){

	$file = './140article/'.$v;
	//判断大小
	if ((filesize($file)) < 10) {
		unlink($file);
		echo $file,'有小于10字节的被删除了<br />';
		continue;
	}
	$cont = file_get_contents($file);
	if (stripos($cont,'fuck')!==false) {//如果不写!==false,会出错吗?
		unlink($file);
		echo $file,'有不文明用语被删除了';
	}
}

/**
如果这个目录有很多文件
想把一个目录下的文件 都打印出来
a.txt
b.txt
j.exe
japan.avi
aa.bmp
**/
// 匹配文件,把txt后缀的文件找出来,返回数组
//print_r(glob('./article/*.txt'));















































?>