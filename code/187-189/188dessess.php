<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-07 11:25:03
 * @version $Id$
 */

//======================188-session语法详解======================


session_start();

/**
unset($_SESSION['user']);//销毁$_SESSION数组中的user单元
$_SESSION['school'] = '牛筋大学';//改动或添加shool单元
**/


// 销毁session,

/*
// 1:可以单独销毁某一个单元,即把$_SESSION数组某一个单元unset掉
unset($_SESSION['user']);
*/


/*
// 2:可以整体把箱子给清空,即$_SESSION数组给清空

$_SESSION = array();
*/

/*
// 3:利用函数把箱子整体清空,效果同第2种办法

session_unset();
*/

/*
// 4:彻底把箱子给毁掉,即文件都没了
session_destroy();
*/


session_destroy();//销毁服务器上的session文件

?>