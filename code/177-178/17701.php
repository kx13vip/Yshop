<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-02 11:18:14
 * @version $Id$
 */
//=====================177-图片缩略及水印函数===========================



/*
知识点：

问:复制的图片能否小一点呢?


答:能
imagecopyresampled()
比imagecopy()多两个在$dst上面的宽高参数
 */


//原图宽高
$ow = 330;
$oh = 379;

//缩略图宽高

$nw = (int)$ow/2;//强制转换成整型
$nh = (int)$oh/2;


//创建缩略图画面
$dst = imagecreatetruecolor($nw,$nh);
//$dst = imagecreatetruecolor(600,400);


//读取原始图
$src = imagecreatefrompng('./feng.png');


//复制

/*
bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
 */
imagecopyresampled($dst,$src,0,0,0,0,$nw,$nh,$ow,$oh);


//输出
header('content-type:image/png');
imagepng($dst);


//销毁
imagedestroy($dst);

































?>