<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-16 21:08:22
 * @version $Id$
 */
defined('ACC')||exit('ACC Denied');

class CateModel extends Model{
	protected $table = 'cate';

	public function add($data){
		return $this -> db -> autoExecute($this -> table,$data,'insert');
	}
}

?>