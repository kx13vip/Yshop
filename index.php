<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-09 20:36:25
 * @version $Id$
 */

define('ACC',true);
require('./include/init.php');


$mysql = mysql::getIns();


//print_r($mysql);exit;

/*

$t1 = $_GET['t1'];
$t2 = $_GET['t2'];


$sql = "insert into test(t1,t2) values ('$t1' , '$t2')";


var_dump($mysql -> query($sql));
$t = $_GET;
print_r($t);exit;
*/



var_dump($mysql->autoExecute('test',$_GET,'insert'));










?>