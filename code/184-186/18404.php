<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 19:32:24
 * @version $Id$
 */

//======================184-深入理解cookie概念========================

/**
查看你的牌子,读cookie



问:
登陆时,是谁给谁cookie信息?
验证用户是否登陆时,是谁给谁cookie信息?

答:
1.服务器给客户端
2.客户端给服务器


问:
服务器如何给浏览器cookie?
客户端发给服务器cookie后,服务器如何读?

答:
在PHP中,服务器设置cookie用,setcookie()函数

在PHP中,读取cookie,不用特殊的方法,
因为cookie的信息已经被PHP处理到$_COOKIE这个超级全局数组里了!
直接读$_COOKIE即可.


**/

print_r($_COOKIE);
echo '你是',$_COOKIE['user'];





?>