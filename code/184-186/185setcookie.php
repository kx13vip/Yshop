<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 20:32:06
 * @version $Id$
 */
//=========================185.cookie设置读取与销毁=================================


/*
bool setcookie ( string $name [, string $value = "" [, int $expire = 0 [, string $path = "" 
[, string $domain = "" [, bool $secure = false [, bool $httponly = false ]]]]]] )

setcookie(cookie名，cookie值，存在时长，作用域路径，域名)

setcookie()方法详细学习
setcookie()可以用2个参数，3个参数，4个参数，5个参数来设置
 */


/*
2个参数设置cookie
cookie随着浏览器的关闭,就失效了.
*/
setcookie('age',29);



/*
下面我们让cookie多活一会!
3个参数来设置cookie,第3个参数指的就是cookie的生命周期,以时间戳为单位


关掉浏览器后,可以对比出效果,age 关掉浏览器就失效
而school能存活1小时
*/

setcookie('school','MBA',time()+3600);




/***
cookie的作用域
一个页面设置的cookie,
默认在其同级目录下,及子目录下可以读取.

如果想让cookie整站有效,可以在根目录下setcookie

也可以用第4个参数,来指定cookie生效路径 
***/


setcookie('gloabl','any where!',time()+3600,'/');




/*
cookie是不能够跨域名(否则安全问题就太大了!)
比如sohu.com的cookie,不能被发到sina.com用

但是,可以在一个域名的子域名下使用

需要用第5个参数,来表示

例: setcookie('key','value',time()+2000,'/','.sina.com.cn');
这个cookie在book.sina.com.cn可以用
在mili.sina.com.cn也可以用
*/



echo 'cookie set ok';






































?>