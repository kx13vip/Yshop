<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-04 09:28:19
 * @version $Id$
 */
//===================181-选学内容 验证码扭曲======自写===========================


class image{
	public static function capt(){
		$str = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKMNPQRSTUVWXYZ23456789';
		$capt = substr(str_shuffle($str),0,4);

		//造画布
		$dst = imagecreatetruecolor(60,25);
		$src = imagecreatetruecolor(60,25);


		//造颜料
		$dgray = imagecolorallocate($dst,200,200,200);
		$sgray = imagecolorallocate($src,200,200,200);
		$blue = imagecolorallocate($src,mt_rand(0,50),mt_rand(0,100),mt_rand(10,50));


		//填充画布
		imagefill($dst,0,0,$dgray);
		imagefill($src,0,0,$sgray);

		//画干扰线
		$randcolor = imagecolorallocate($src,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
		$randcolor1 = imagecolorallocate($src,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
		$randcolor2 = imagecolorallocate($src,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
		$randcolor3 = imagecolorallocate($src,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));

		imageline($src,0,mt_rand(0,25),60,mt_rand(0,25),$randcolor);
		imageline($src,0,mt_rand(0,25),60,mt_rand(0,25),$randcolor1);
		imageline($src,0,mt_rand(0,25),60,mt_rand(0,25),$randcolor2);
		imageline($src,0,mt_rand(0,25),60,mt_rand(0,25),$randcolor3);



		//写字
		//imagestring($src,5,8,3,$capt,$blue);
		imagettftext($src,16,0,5,20,$blue,'./ziti.ttf',$capt);

		//扭曲
		for($i=0;$i<60;$i++){
			$offset = 3;//最大波动几个像素
			$round = 2;//扭几个周期
			$posy = round(sin($i*$round*2*M_PI/60)*$offset);
			imagecopy($dst,$src,$i,$posy,$i,0,1,25);
		}//y=Asin(ωx+φ)+b;ω：决定周期（最小正周期T=2π/∣ω∣）

		//输出
		header('content-type:image/png');
		imagepng($dst);

		//销毁
		imagedestroy($src);
		imagedestroy($dst);

	}
}




image::capt();































?>