<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-27 09:48:52
 * @version $Id$
 */

//print_r($_FILES);

function mk_dir(){
	$dir = date('md/i' , time());

	if(is_dir($dir)){
		return $dir;
	}else{
		mkdir($dir,0777,true);
		return $dir;
	}
}


function randName(){
	$str = 'abcdefghijklmnopqrstuvwxyz0123456789';
	return substr(str_shuffle($str),0,6);
}



function getExt($filename){
	$tmp = explode('.' , $filename);
	return end($tmp);
}

foreach ($_FILES as $k => $v) {
	$path = './' . mk_dir() . './' . randName() . '.' . getExt($v['name']);

	if ($v['error'] !=0) {
		echo $k,'上传失败!';
		echo '错误代码是',$v['error'],'<br />';
		continue;
	}

	if(move_uploaded_file($v['tmp_name'],$path)){
		echo '上传成功!';
	}else{
		echo '上传失败!';
	}
}


?>