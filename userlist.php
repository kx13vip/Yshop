<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-16 19:50:58
 * @version $Id$
 */
define('ACC',true);
require('./include/init.php');

$test = new TestModel();
$list = $test ->select();
//print_r($list);

include(ROOT.'view/userlist.html');

//controller负责检测数据的合法性
//并不是每一个表一个model,model只是一个操作数据库的中介层,比如在tp中就有一个通用model
//

?>