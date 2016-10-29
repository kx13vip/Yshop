<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 15:17:25
 * @version $Id$
 */

//======================175-中文验证码========================

/*
图片中写中文叫做中文验证码
 */

//1:创建画布

$im = imagecreatefromjpeg('./home.jpg');


//2:创建颜料

$font = imagecolorallocate($im,0,0,255);


//3:写字

/*
array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
 */




imagettftext($im,25,45,400,200,$font,'./ziti.ttf','天天向上好好学习');


//4:输出
header('content-type:image/jpeg');
imagejpeg($im);


//5：销毁


imagedestroy($im);























?>