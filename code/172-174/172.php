<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-29 20:46:53
 * @version $Id$
 */

//================172-GD安装及画图流程====================

/***
GD2库的引入:
打开php.ini,查询gd2.dll
把这一行的注释去掉,重启apache


测试gd库的信息,用gd_info函数


gd库相关函数的特点及学习方法
gd库相关函数----参数特别多,最多达11个,所以请不要死记.
重在理解:
1:理解绘图的过程
2:理解屏幕的坐标体系
***/


print_r(gd_info());



/***
GD库画图的典型流程!

1:创建画布
2:创建各种颜料
3:绘画(如写字,画线,画矩形等形状)
4:保存成图片
5:清理战场,销毁画布!
***/



/*
1:造画布(多宽,多高)  imagecreatetruecolor()
 返回是资源类型
*/

$width = 300;
$height = 200;
$im = imagecreatetruecolor($width,$height);

// print_r($im);

/*
2:创建颜料 imagecolorallocate
imagecolorallocate(画布资源,红,绿,蓝)
*/

$blue = imagecolorallocate($im,0,0,255);


/*
3:画图
先用最简单的,泼墨渲染! imagefill
imagefill是用颜料填充画布
bool imagefill (画布资源 , 填充的起始点x值 , 填充的起始点y值 , 填充颜色)
*/

imagefill($im,0,0,$blue);


/*
4:保存!
imagepng
imagejpeg
imagegif
..
来保存成不同图片格式
*/

if(imagepng($im,'./01.png')) {
    echo '图片生成成功!';
} else {
    echo 'fail';
}


/*
5:销毁画布
画布很耗资源,注意释放!
*/

imagedestroy($im);





































?>