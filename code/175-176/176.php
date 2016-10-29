<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 19:46:06
 * @version $Id$
 */

//===========================176-画矩形及饼状图==================================




/*
知识点：

画矩形
画椭圆

imagerectangle()
imageellipse()

 */


//画布
$im = imagecreatetruecolor(800,600);

//颜料
$tint = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

//画一个矩形
/*
bool imagerectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $col )
 */
imagefill($im,0,0,$tint);


imagerectangle($im,200,150,600,450,$blue);


//画一个椭圆
/*
bool imageellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )
 */
imageellipse($im,400,300,400,300,$red);
imageellipse($im,400,300,300,300,$red);
imageellipse($im,400,300,200,300,$red);
imageellipse($im,400,300,100,300,$red);




//输出
header('content-type:image/png');
imagepng($im);


//销毁
imagedestroy($im);


































?>