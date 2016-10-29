<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 17:54:11
 * @version $Id$
 */
//======================184-深入理解cookie概念========================

/*
这个页面非常重要，不是网站的用户，不能看

方法思路：先判断用户名/密码，然后定义常量，再在下面的代码检查常量
 */

$conn = mysqli_connect('localhost','root','1111');

$sql = 'use boolshop';
mysqli_query($conn,$sql);


$sql = 'use names utf8';
mysqli_query($conn,$sql);


$u = $_POST['username'];
$p = $_POST['passwd'];

$sql = "select count(*) from user where username='" . $u . "' and passwd='" . md5($p) . "'";
$rs = mysqli_query($conn,$sql);


$row = mysqli_fetch_row($rs);

if ($row[0] == 1) {
	//登陆成功
	define('USER',true);
}else{
	echo '用户名密码错误';
	exit;
}


if (!defined('USER')) {
	echo '你没有登陆';
	exit;
}


//如果把这行代码控制住，非本站用户不能看
echo '这部份代码非常重要！当你看到时，说明你已是本站的用户<br />';
echo 'very important!';

?>

<a href="./18402.php">个人隐私页面</a>