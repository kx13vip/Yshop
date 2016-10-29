<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 21:31:33
 * @version $Id$
 */

//===========================176-画矩形及饼状图==================================

/*
知识点：
画圆弧并填充

imagefilledarc()
注意该函数的$style参数的运用
 */

//画布
$im = imagecreatetruecolor(800,600);

//颜料
$tint = imagecolorallocate($im,200,200,200);
$red = imagecolorallocate($im,255,0,0);
$blue = imagecolorallocate($im,0,0,255);


//填充
imagefill($im,0,0,$tint);



//画一段圆弧并填充
/*
bool imagefilledarc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color , int $style )
1 IMG_ARC_CHORD 直线连圆弧2端
0 IMG_ARC_PIE   弧线连圆弧2端
4 IMG_ARC_EDGED 指明用直线将起始和结束点与中心点相连，
2 IMG_ARC_NOFILL 不填充轮廓(默认是填充的)

 */
imagefilledarc($im,400,300,310,310,0,60,$blue,4+0);
imagefilledarc($im,400,300,300,300,0,60,$red,4+0);




//输出
header('content-type:image/png');
imagepng($im);


//销毁
imagedestroy($im);



















?>