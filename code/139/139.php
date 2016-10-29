<?php
header("content-type:text/html;charset=utf-8");
/**
 * 一个月学会PHP基础,加油！————Mr. C 
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-09 14:32:48
 * @version $Id$
 */

//=============================138商城准备之框架搭建=====================


/*
今日内容:
框架搭建:
路径信息的初始化
参数过滤 GET/POST
运行日志 运行中的错误信息,sql信息记录下来
报错级别 开发状态一个小儿科,上线状态一个级别
数据库类
配置文件的读取

目前的知识
数据库类: Y
报错级别: Y
参数过滤: N (递归)
运行日志: 要求把运行中的信息记录在文件文件上(文件操作,N)
          日志按天形成目录存放/1119/log.txt ,/1120/log.txt(目录创建,N)

读取配置文件: 小项目,配置文件往往只放数据库信息,因此被数据库类读到,就行了.
              现在,配置文件的信息,还要包括缓存信息/smarty的目录信息,等等
	      就要求,要能被多个类读到
	      思考: 总不能多个类,都include引入config.inc.php吧?
 */




//=============================139文件操作函数=====================
/*
文件内容的读取与写入
要求:把139.txt内容读出来,赋给变量
 */

/*
file_get_contents()可以获取一个文件内容或一个网络资源内容
file_get_contents是读文件/读网络比较 比较快捷的一个函数
帮我们封装了打开/关闭等操作.

但是--小心,这个函数一次性把文件的内容全部读出来,放内存里.
因此,工作中,处理上百M的大文件,慎用此函数

注:file_get_contents 要获取的文件不存在,为报warning
 */
$file ='./139.txt';
$str = file_get_contents($file);

/*
// 此函数还可以读网络资源
$url='http://china.huanqiu.com/article/2016-08/9287333.html';
echo file_get_contents($url);

*/

/*
file_put_contents() 这个函数用来把内容写入到文件
也是一个快捷函数,帮我们封装打开写入关闭的细节.

注:如果指定的文件不存在,则会自动创建
*/


file_put_contents('./139write.txt' , $str);



/*
最简单的小偷程序


$url = 'http://mr-c.cn/semkaohe_20160724.html';
$cont = file_get_contents($url);
if(file_put_contents('./139news.html' , $cont)){
	echo '采集成功';
}else{
	echo '采集失败';
}

 */


//=================文件操作之fopen,fread,fwrite,fclose

/*
fopen() 打开一个文件, 返回一个句柄资源
fopen($filename,mode);
第2个参数是"模式",如只读模式,如读写模式,如追加模式
返回值: 资源
*/


$file = '139news.html';
$fh = fopen($file,'r');

// 沿着上面返回的$fh这个资源通道来读文件
echo fread($fh,10),'<br />';

// 返回int(0),说明没有成功写入
// 原因: 在于第2个Mode参数,选的r,即只读打开
var_dump(fwrite($fh,'我来了!!!!!!!'));


// 关闭资源
fclose($fh);



/*
r+读写模式,并把指针指向文件头
写入成功
注意:从文件头,写入时,覆盖相等字节的字符.
$fh = fopen($file,'r+');
echo fwrite($fh,'hello')?'成功':'失败','<br />';
flose($fh);
*/



/*
w:写入模式(fread读不了)
并把文件大小截为0 (文件被清空了)
指针停于开头处


echo '<hr />';
$fh = fopen('./modew.txt','w');
fclose($fh);
echo 'OK';
*/


/*
a: 追加模式打开,
能写,并把指针停在文件的最后
*/
$fh = fopen('139.txt','a');
echo fwrite($fh,'白云一片')?'OK modea':'fail';
fclose($fh);






























?>