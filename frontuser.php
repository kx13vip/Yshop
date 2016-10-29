<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-16 15:32:10
 * @version $Id$
 */
define('ACC',true);
require('./include/init.php');


$test = new TestModel();

var_dump($test ->reg(array('t1' => 'frontf' , 't2' => 'front22')));






























?>