<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-07 11:24:00
 * @version $Id$
 */

//======================188-session语法详解======================


/***
====笔记部分====

session详细语法学习

session的创建,修改,销毁


1:无论是创建,修改,还是销毁session,都需要先session_start();
2:一旦session_start之后,$_SESSION就可以自由的添加,删除,修改
即:当成普通数组一样操作(这一点和cookie,cookie的操作,只能通过setcookie函数来进行)
***/


session_start();
$_SESSION['user'] = 'zhaobanshan';
$_SESSION['school'] = 'PKU';

$_SESSION['test'] = array('中','华');


class Dog{
	public $leg = 4;
}

$dog = new Dog;

$_SESSION['dog'] = $dog;


echo 'OK';



























?>