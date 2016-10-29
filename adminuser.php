<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-16 15:34:12
 * @version $Id$
 */
require('./include/init.php');



$test =new TestModel();
$arr = array('t1' => 'admin' , 't2' => 'admin2');
var_dump($test->reg($arr));





























?>