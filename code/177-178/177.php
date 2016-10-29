<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-02 10:47:50
 * @version $Id$
 */
//=====================177-图片缩略及水印函数=====================================

 /*
 知识点：

复制图片到另一个图片

imagecopy()

  */




/**
把一幅小图复制到大图上,复制2份,形成证件照片的效果

小图:330*379
大图的宽 330*2+20, 高 379
**/

$sw = 330;
$sh = 379;

//造画布

$big = imagecreatetruecolor($sw*2+2,$sh);

//造颜料
$gray = imagecolorallocate($big,200,200,200);

//填充
imagefill($big,0,0,$gray);


//再读小图
$small = imagecreatefrompng('./feng.png');

/*
bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )
 */

//复制小图$small到大图$big
imagecopy($big,$small,0,0,0,0,$sw,$sh);
imagecopy($big,$small,$sw+20,0,0,0,$sw,$sh);

//输出
header('content-type:image/png');
imagepng($big);

//销毁
imagedestroy($big);

































?>