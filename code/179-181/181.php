<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-03 20:50:28
 * @version $Id$
 */

//===================181-选学内容 验证码扭曲=================================


/***
普通验证码

==> 变形为

扭曲验证码


知道点：
imagecopy()
for循环
正弦函数y=Asin(ωx+φ)+b;ω：决定周期（最小正周期T=2π/∣ω∣）
***/



class image {
    public static function code() {
 
        $str = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKMNPQRSTUVWXYZ23456789';
        $code = substr(str_shuffle($str),0,4);

        // 2块画布
        $src = imagecreatetruecolor(60,25);
        $dst = imagecreatetruecolor(60,25);

        // 灰色背景
        $sgray = imagecolorallocate($src,200,200,200);
        $dgray = imagecolorallocate($src,200,200,200);

        // 蓝色
        $sblue = imagecolorallocate($src,0,0,255);

        imagefill($src,0,0,$sgray);
        imagefill($dst,0,0,$dgray);


        // 写字
        imagestring($src,5,5,4,$code,$sblue);

        for($i=0;$i<60;$i++) {
            // 根据正弦曲线计算上下波动的posY
            
            $offset = 4; // 最大波动几个像素
            $round = 2; // 扭2个周期,即4PI
            $posY = round(sin($i * $round * 2 * M_PI / 60 ) * $offset); // 根据正弦曲线,计算偏移量正弦型函数解析式：y=Asin(ωx+φ)+b
           //正弦型函数解析式：y=Asin(ωx+φ)+b;ω：决定周期（最小正周期T=2π/∣ω∣）
            imagecopy($dst,$src,$i,$posY,$i,0,1,25);
        }

        header('content-type: image/jpeg');
        imagejpeg($dst);

        imagedestroy($src);
        imagedestroy($dst);

    }

}



image::code();



































?>