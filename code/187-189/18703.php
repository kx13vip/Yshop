<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-07 10:14:28
 * @version $Id$
 */
//=======================187-session概念讲解======================

/*
知识点：
读取session
 */


session_start();
echo $_SESSION['user'];




/*

响应头信息：
Cache-Control	no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Connection	Keep-Alive
Content-Length	8
Content-Type	text/html;charset=utf-8
Date	Wed, 07 Sep 2016 02:26:15 GMT
Expires	Thu, 19 Nov 1981 08:52:00 GMT
Keep-Alive	timeout=5, max=100
Pragma	no-cache
Server	Apache/2.4.9 (Win32) PHP/5.5.12
X-Powered-By	PHP/5.5.12


请求头信息：
Accept	   text/html,application/xhtml+xml,application/xml;q=0.9,**;q=0.8
Accept-Encoding	 gzip, deflate
Accept-Language	 zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3
Cache-Control	max-age=0
Connection	keep-alive
Cookie	  PHPSESSID=snfv6c5e7aic9uiov4a9l1agm2//还是用cookie来请求的
DNT	1
Host	localhost
Upgrade-Insecure-Requests	 1
User-Agent	Mozilla/5.0 (Windows NT 6.1; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0
 */















?>