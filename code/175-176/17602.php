<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 20:36:31
 * @version $Id$
 */
//===========================176-画矩形及饼状图==================================

/*
知识点：
画弧线

imagearc()
 */

//画布
$im = imagecreatetruecolor(800,600);


//颜料

$tint = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

//填充
imagefill($im,0,0,$tint);

//画一段圆弧
/*
bool imagearc ( resource $image , int $cx , int $cy , int $w , int $h , int $s , int $e , int $color )
 */

imagearc($im,400,300,300,300,270,0,$blue);
imagearc($im,400,300,310,310,-90,0,$red);


//输出
header('content-type:image/png');
imagepng($im);


//销毁｜
imagedestroy($im);





































?>