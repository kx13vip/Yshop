<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-26 20:36:03
 * @version $Id$
 */
//===================168-文件上传参数细节=============================

/*
文件上传的参数详解

$_FILES
Array
(
    [pic] => Array
        (
            [name] => Winter.jpg  // 文件原名
            [type] => image/jpeg  // 文件类型
            [tmp_name] => D:\tmp\php6A2.tmp  // 临时文件路径
            [error] => 0                     // 错误代码 ,0 代表无错
            [size] => 105542                 // 文件的大小,以Byte为单位
        )

)


如果上传出错了,错误代码可能有哪些?
 
其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 

其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 

其值为 3，文件只有部分被上传。 

其值为 4，没有文件被上传。 

其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。 

其值为 7，文件写入失败。PHP 5.1.0 引进。 
 */


/*
php相关参数配置:
file_uploads  是否允许HTTP文件上传
upload_max_filesize  所上传文件最大大小(字节)
post_max_size 设定post数据所允许的最大字节
upload_tmp_dir 文件上传是存放的临时目录
max_execution_time 脚本最大执行时间


 */


/*
接收文件,并分目录存储,生成随机文件名


1:根据时间戳,并按一定创建目录
2:获取文件后缀名
3:判断大小
 */

/*
计算并创建目录
 */

function mk_dir(){
	$dir = date('md/i',time());

	if(is_dir(',/'.$dir)){
		return $dir;
	}else{
		mkdir('./'.$dir,0777,true);
		return $dir;
	}
}


//获取后缀
function getExt($file){
	$tmp = explode('.',$file);
	return end($tmp);
}

//获取随机名
function randName(){
	$str = 'abcdefghjkmnpqrstuvwxyz23456789';
	return substr(str_shuffle($str),0,6);
}


if($_FILES['pic']['error'] !=0){
	echo '上传失败';
	exit;
}

$pic = $_FILES['pic'];





//拼接文件路径
$path = './'.mk_dir().'./'.randName().'.'.getExt($pic['name']);

//移动
if(move_uploaded_file($pic['tmp_name'],$path)){
	echo 'OK';
}else{
	echo 'FAIL';
}














?>