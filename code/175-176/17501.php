<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 16:14:31
 * @version $Id$
 */

//======================175-中文验证码========================

//1:创建画布
//2:创建颜料
//3:写字
//4:输出
//5：销毁

/***
====笔记部分====
中文验证码

如何产生随机的中文字符串?
中文按其unicode编码,是有规律的,
位于0x4E00-0x9FA0
我们可以在uncode范围内随机选取,

但是 请注意,对于用户来说,能否认得?
因为有大量生僻字.


所以在实际项目中,只是抽取几百或上千个常用汉字,放数组里,随机选取.
***/

//随机字体
/*
错误Fatal error: Only variables can be passed by reference
$char = shuffle(array('中','华','人','民','共','和','国','天'));//Fatal error: Only variables can be passed by reference
$code = implode('',$char);
 */


$char = array('中','华','人','民','共','和','国','天');
shuffle($char);
$code = implode('',array_slice($char,0,4));


//1:创建画布

$im = imagecreatetruecolor(80,25);



//2:创建颜料

$font = imagecolorallocate($im,255,0,0);
$bg = imagecolorallocate($im,0,0,255);

imagefill($im,50,25,$bg);

//3:写字

imagettftext($im,15,0,2,20,$font,'./ziti.ttf',$code);




//4:输出
header('content-type:image/png');
imagepng($im);


//5:销毁

imagedestroy($im);


























?>