<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-02 14:02:53
 * @version $Id$
 */

//=====================177-图片缩略及水印函数===========================


/*
问:复制的图片能否带点透明效果呢?

答:能
imagecopymerge()
比imagecopy()多个$pct参数

设定图像的混色模式函数
imagealphablending()
 */

//读取大图
$dst = imagecreatefromjpeg('./home.jpg');


//读取小图
$src = imagecreatefrompng('./smallfeng.png');

/*
bool imagecopymerge ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )
 */


//设定图像的混色模式
imagealphablending($dst,true);
imagealphablending($src,true);


//复制图片
imagecopymerge($dst,$src,300,200,0,0,165,189,50);


//输出
//header('content-type:image/jpeg');
echo imagejpeg($dst,'./ad.jpg')?'OK':'FAIL';


//销毁
imagedestroy($dst);




































?>