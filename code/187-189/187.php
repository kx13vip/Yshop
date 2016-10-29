<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-07 09:46:48
 * @version $Id$
 */

//=======================187-session概念讲解=====================================


/*
cookie复习



cookie工作流程：
由服务器发送给浏览器一个cookie（牌子）
以后再访问时，由浏览器带着cookie（牌子），服务器检测cookie信息


如何设置cookie：setcookie()函数
如何读取cookie：$_COOKIE[]超全局数组


问：cookie由浏览器带着，那么如果被篡改怎么办？
比如：你买的奶酪，你把单据改成“蛋糕”，如何防范？


因为以cookie是很容易被篡改或伪造的，
因此，cookie往往用来记住用户名，浏览历史，等安全性要求不高的地方


那么，能否防范呢？
能：可以用session技术
也可以用一些加密技巧来防范
 */


setcookie('user','lisi');
echo 'OK';






























?>