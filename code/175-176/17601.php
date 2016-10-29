<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 20:23:04
 * @version $Id$
 */
//===========================176-画矩形及饼状图==================================

/*
知识点：
画一个矩形并填充
画一个椭圆并填充

imagefilledrectangle()
imagefilledellipse()

 */

//画布
$im = imagecreatetruecolor(800,600);


//颜料

$tint = imagecolorallocate($im,200,200,200);
$red = imagecolorallocate($im,255,0,0);
$blue = imagecolorallocate($im,0,0,255);

//填充
imagefill($im,0,0,$tint);


//画一个矩形并填充
/*
bool imagefilledrectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
 */

imagefilledrectangle($im,200,150,600,450,$blue);

//画一个椭圆并填充
/*
bool imagefilledellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )
 */
imagefilledellipse($im,400,300,400,300,$red);
imagefilledellipse($im,400,300,300,300,$blue);
imagefilledellipse($im,400,300,200,300,$red);
imagefilledellipse($im,400,300,100,300,$blue);



//输出
header('content-type:image/png');
imagepng($im);

//销毁
imagedestroy($im);



































?>