<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-10 20:03:19
 * @version $Id$
 */
//=========================140-文件操作案例之导入csv文件===============================

/*
如何把excel文件导入到数据库
1:excel并不是开放的标准,是微软自己的,你只能猜测他的格式.
标准还有可能变(目前国际上已经制定的标准文档规范).

操作excel ,有开源的phpExcel开源的类.

2:如果是简单的想导入数据库,可以先转换化csv文件.
csv是一种简单的用逗号隔开的文件格式

把excel导入数据库的方法
excel->csv->文件处理
 */


$file = './score.csv';
$fh = fopen($file,'rb');

/*
思路1:每次读一行,
每一行的内容再逗号拆成数组
while (!feof($fh)) {
	$row = fgets($fh);
	print_r(explode(',' , $row));
}
*/


// 这个函数已经封装了csv文件相关规范.

while(!feof($fh)) {
    $row = fgetcsv($fh);
    print_r($row);
}


/***
有一堆小文件
a.txt
b.txt
c.txt

帮我检测,哪个文件有 fuck这个单词,
或者<10个字节文件
就删掉
***/

































?>