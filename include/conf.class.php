<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-09 17:53:34
 * @version $Id$
 */

/*
file conf.class.php
配置文件读写类
 */
defined('ACC')||exit('ACC Denied');//防跳墙，令牌技术；所有没允许访问的页面加个判断令牌；controller是允许用户访问的
class conf{
	protected static $ins = null;
	protected $data = array();
	final protected function __construct(){
		include(ROOT.'include/config.inc.php');
		$this -> data = $_CFG;
	}
	final protected function __clone(){
	}

	public static function getIns(){
		if (self::$ins instanceof self) {
			return self::$ins;
		}else{
			self::$ins = new self();
			return self::$ins;
		}
	}


	//用魔术方法,读取data内的信息
	public function __get($key){
		if (array_key_exists($key,$this -> data)) {
			return $this -> data[$key];
		}else{
			return null;
		}
	}


	//用魔术方法,在运行期,动态增加或改变配置选项
	public function __set($key,$value){
		$this -> data[$key] = $value;
	}
}


/*

$conf = conf::getIns();

// 已经能把配置文件的信息,读取到自身的 data属性中存储起来
print_r($conf);

// 读取选项
echo $conf->host,'<br />';//localhost;触动魔术方法__get()来执行的
echo $conf->user,'<br />';//1111;

// 动态的追加选项
$conf->template_dir = 'D:/www/smarty';

echo $conf->template_dir;//这个属性不存在,触动魔术方法__set()执行;

 */




















?>