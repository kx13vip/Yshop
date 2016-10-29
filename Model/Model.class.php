<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-16 17:54:00
 * @version $Id$
 */
defined('ACC')||exit('ACC Denied');

class Model{
	protected $table = NULL;
	protected $db = NULL;

	public function __construct(){
		$this ->db = mysql::getIns();
	}

	public function table($table){
		$this->table = $table;
	}//使table可以用任何表名了,起到一个公用的作用
}






?>