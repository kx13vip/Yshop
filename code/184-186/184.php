<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 16:58:48
 * @version $Id$
 */
//======================184-深入理解cookie概念========================

/*
知识点：
引出用cookie的场景 
 */



/*
用户注册之后，我们需要做用户登陆，退出

需要的知识点cookie,session
 */



/*
看一个问题：我是谁？？
比如说，我们要看自己注册的资料，即用户表自己的信息

连上mysql,查询数据，地址栏传参，传user_id,
根据user_id,查询用户信息
 */



$user_id = $_GET['user_id']+0;

$conn = mysqli_connect('localhost','root','1111');


$sql = 'use boolshop';
mysqli_query($conn,$sql);

$sql = 'use names uft8';
mysqli_query($conn,$sql);

$sql = 'select * from user where user_id= '.$user_id;
$rs = mysqli_query($conn,$sql);


print_r(mysqli_fetch_assoc($rs));//读取出一个数组



/*
思考：如果我的user_id是5，我在地址栏输入5，看到自己的信息
但如果把user_id改为6,岂不是看到别人的信息了


如何才能控制  只看到自己的信息？？而别人是看不到的？？

此方法行不通
 */


























?>