<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 15:53:58
 * @version $Id$
 */

//====================log类问题答疑=====================

/***
昨天发现的一个现象:
我们循环5000次,写入curr.log文件,
事实上呢,大约3000次的,已经超过1M了,
但是,还是持续的写入到curr.log里.
必须下次刷新,才会备份,重新建一个curr.log

PHP.exe开启进程 PID 111 start
5000次读取 
php.exe结束进程 PID 111 end;

PHP.exe开启进程 PID 112 start
5000次读取
php.exe结束进程 PID 112 end

PHP.exe开启进程
5000次读取
php.exe结束进程


在1次进程中, filesize的结果会被缓存(很多文件信息获取函数的结果都会被缓存,如filemtime)
因此第1次运行时,读到的size全是0(即使这个过程中文件的内容已经被修改了)

当我们再次刷新时: filesize > 1M,
curr.log --raname--> 11202345.bak
新建curr.log filesize-->0 KB

在论坛上的问题出现在哪儿呢?
答:即便curr.log->rename->11202345.bak了,
但,filesize还是缓存了,

因此,循环的5000次中,始终认为curr.log>1M,
始终备份.....
***/


for($file='./a.txt',$i=0;$i<100;$i++) {
    echo filesize($file),'<br />';
    $fh = fopen($file,'ab');
    fwrite($fh,$i."\r\n");
    fclose($fh);
}//第一次运行结果全是0,而文件a.txt的内容已经被写入;

echo 'OK';

//相关问题链接 http://www.zixue.it/thread-4113-1-1.html
/*
错误原因: 第一次filesize (curr.log) >1M
-->curr.log---rename-->12202345.bak
因为和上次一样,读的都是curr.log,文件路径没变)
所以,缓存了filesize的结果,导致判断size 始终是>1M的.
循环5000次....始终大于 ,始终备份 .

解决:清除filesize的缓存.
 */































?>