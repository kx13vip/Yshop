<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 20:47:29
 * @version $Id$
 */

//=====================186-cookie案例之计数器与浏览历史===================================


/*
做一个cookie计数器
 */

//用cookie来记录来本网站已经访问了多少页面


//如果这个页面是第一次访问，没有cookie信息
/*
if(!isset($_COOKIE['num'])){//第一次来访问，还没有cookie
	setcookie('num',1);
}else{// 有cookie信息,已经不是第1次来访问了.
	setcookie('num',$_COOKIE['num']+1);
}
echo '这是你的第',$_COOKIE['num'],'次访问';
 */


if(!isset($_COOKIE['num'])) { // 第一次来访问,还没有cookie
    $num = 1;
    setcookie('num',$num);
} else {        // 有cookie信息,已经不是第1次来访问了.
    $num = $_COOKIE['num'];
    setcookie('num',$num + 1);
}


echo '这是你的第',$num,'次访问';

























?>