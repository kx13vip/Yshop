<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 10:10:17
 * @version $Id$
 */

//====================174-GD完成验证码==============================


/*
验证码
验证码就是有字母的图片

造图片
写字  ----> imagestring
 */

//1:造画布
$im = imagecreatetruecolor(200,50);


//不填充，看看默认的画布是什么颜色？？黑色


//2：造颜料准备写字
$red = imagecolorallocate($im,255,0,0);

//3:写字

/*
bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
bool imagestring(画布资源，字体大小（1-5），字符最左上角x坐标，y坐标，要写的字符串，颜色)

imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。
如果 font 是 1，2，3，4 或 5，则使用内置字体。 
 */


$str = substr(str_shuffle('ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'),0,4);



imagestring($im,5,0,0,$str,$red);


//4:输出

header('content-type:image/png');
imagepng($im);




//5:销毁
imagedestroy($im);


























?>