<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-30 09:02:47
 * @version $Id$
 */



//===========================173-GD画图流程详解================
/*
创建画布
可以用imagecreatetruecolor来创建空白画布
也可以直接找开一幅图片来创建画布(自然,所做的修改在图片的基础上进行)
imagecreatefromjpeg()
imagecreatefrompng()
imagecreatefromgif()
 */

$file = './home.jpg';
$im = imagecreatefromjpeg($file);
//print_r($im);


/*
配颜料
 */


$red = imagecolorallocate($im,255,0,0);
$blue = imagecolorallocate($im,0,0,225);

/*
bool imageline  ( resource $image  , int $x1  , int $y1  , int $x2  , int $y2  , int $color  )
参数分别代表: 画布资源, 1端点的x值, y值, 另一端点x,y值, 线段的颜色
 */
/*
从左上角到右下角,画一条红线
 */
imageline($im,0,0,670,503,$red);


/*
从左下角到右上角,画一条红线
 */
imageline($im,0,503,670,0,$blue);


/*
保存图片,也有讲究

imagepng()
imagejpeg()
imagegif()保存成不同类型的图片

也可以把图片内容不保存,直接输出!
 */


//echo imagejpeg($im,'./homenew.jpeg')?'保存成功':'保存失败';

//下面,直接输出图片,还是用上面几个函数,不要第二个参数,即可直接输出,
//在验证码里,这个功能必用


header('content-type:image/png');
imagepng($im);


/*
销毁
 */
imagedestroy($im);


























?>