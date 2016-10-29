<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-02 17:30:10
 * @version $Id$
 */

//===========================178-开发缩略图与水印类==============================

/*
知识点：
getimagesize()获取图片信息，返回一个数组；
image_type_to_mime_type()取得mime类型数据
 */

/**
如何知道图片的大小和类型


因为在缩略图,不知道大小,我们无法确定比例
不知道类型,我们无法确认调用的函数,如 imagecreatefrompng/jpeg...

之前的学习 我们是人为的读出图片的宽和高
又通过后缀知道了类型,
相当于宽高,类型是已知的


我们既然准备写一个图片处理类,要处理的图片是各种大小,各种类型都可能的,
如何知道大小及功能???


引出一个重要函数  getimagesize()
**/

$arr = getimagesize('./feng.png');
print_r($arr);
/*
Array
(
    [0] => 330
    [1] => 379
    [2] => 3
    [3] => width="330" height="379"
    [bits] => 8
    [mime] => image/png
)
 */
echo '你是',image_type_to_mime_type($arr[2]),'类型';





$arr = getimagesize('./01.php');
var_dump($arr);//false



































?>