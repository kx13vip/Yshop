<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-01 21:53:13
 * @version $Id$
 */
//===========================176-画矩形及饼状图==================================
/*
imagefill的一个填充功能
 */





//画布
$im = imagecreatetruecolor(800,600);


//颜料
$tint = imagecolorallocate($im,200,200,200);
$red = imagecolorallocate($im,255,0,0);
$blue = imagecolorallocate($im,0,0,255);


//填充
imagefill($im,0,0,$tint);

imageellipse($im,400,300,300,300,$blue);
//再次填充
//imagefill($im,400,300,$red);
imagefill($im,0,300,$red);

//输出
header('content-type:image/png');
imagepng($im);

//销毁
imagedestroy($im);




/*
作业：
1。针对网站会员学历做统计
小学
初中
高中

统计出来后，对3种种比例，做一个饼状图


要求效果：
从表单提交
高中人数 15
初中人数  10
小学人数  5

提交－〉看到饼状图



2。生成股份趋势图

要求效果：
输入12个数

9点价格 []
10点价格 []
11点价格 []
12点价格 []
13点价格 []
14点价格 []
15点价格 []
16点价格 []
17点价格 []
18点价格 []


提交  －－－－〉看到价格的起伏拆线


 */


















?>