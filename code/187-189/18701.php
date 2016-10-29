<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-07 09:58:04
 * @version $Id$
 */
//=======================187-session概念讲解============================

if($_COOKIE['user'] == 'vip') {
    echo '尊敬的大客户!';

} else {
    echo '普通客户,爱买不买!';
}

/*
可以用firebug改改cookie的值为vip，看看效果。
 */
































?>