<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 10:53:57
 * @version $Id$
 */


//====================174-GD完成验证码============================




//1:造画布
$im = imagecreatetruecolor(50,25);


//2:填颜料


//字体颜色
$font = imagecolorallocate($im,255,0,0);
//背景色
$bg = imagecolorallocate($im,220,220,225);

//随机颜色
$randcolor = imagecolorallocate($im,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));

$linecolor1 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
$linecolor2 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
$linecolor3 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));


//填充背景
imagefill($im,0,0,$bg);

//画干扰线

imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor1);
imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor2);
imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor3);

/*
3：写字
 */


$str = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789'),0,4);

imagestring($im,5,10,5,$str,$font);


/*
4:输出
 */

header('content-type:image/png');
imagepng($im);



/*
5：销毁
 */

imagedestroy($im);


/****
验证码的字符串还想扭曲该如何做.
参考正弦曲线函数,弧度函数
同学们自己测试
****/





















?>