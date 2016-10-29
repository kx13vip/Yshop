<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/
//===========================178-开发缩略图与水印类==============================

/***
想操作图片
先得把图片的大小,类型信息得到


水印:就是把指定的水印复制到目标上,并加透明效果

缩略图:就是把大图片复制到小尺寸画面上
***/

class ImageTool{

	//imageInfo  分析图片的信息
	//return array()
	public static function imageInfo($image){
		if(!file_exists($image)){
			return false;
		}

		$info = getimagesize($image);
		if ($info==false) {
			return false;
		}

		//此时info分析出来，是一个数组；
		$img['width'] = $info[0];
		$img['height'] = $info[1];
		$img['ext'] = substr($info['mime'],strpos($info['mime'],'/')+1);

		return $img;
	}

/*
加水印功能
parm string $dst 待操作图片
parm string $water 水印小图
parm string $save 不填则默认替换原始图
 */
public static function water($dst,$water,$save=NULL,$pos=2,$alpha=50){
	//先保证两个图片存在
	if (!file_exists($dst) || !file_exists($water)) {
		return false;
	}


	//首先保证水印图片不能比待操作图片大
	$dinfo = self::imageInfo($dst);
	$winfo = self::imageInfo($water);

	if ($winfo['width'] > $dinfo['width'] || $winfo['height'] > $dinfo['height']) {
		return false;
	}

	//两张图片，读到画布上
	$dfunc = 'imagecreatefrom'.$dinfo['ext'];
	$wfunc = 'imagecreatefrom'.$winfo['ext'];

	if (!function_exists($dfunc) || !function_exists($wfunc)) {
		return false;
	}

	//动态加载创建画布
	$dim = $dfunc($dst);//创建待操作画布
	$wim = $wfunc($water);//创建水印画布

	//根据水印位置来计算粘贴坐标
	switch ($pos) {
		case 0://左上角
			$posx = 0;
			$posy = 0;
			break;

		case 1://右上角
			$posx = $dinfo['width'] - $winfo['width'];
			$posy = 0;
			break;

		case 3://左下角
			$posx = 0;
			$posy = $dinfo['height'] - $winfo['height'];
			break;

		default:
			$posx = $dinfo['width'] - $winfo['width'];
			$posy = $dinfo['height'] - $winfo['height'];
			break;
	}
	//加水印
	imagecopymerge($dim,$wim,$posx,$posy,0,0,$winfo['width'],$winfo['height'],$alpha);

	//保存
	if (!$save) {
		$save = $dst;
		unlink($dct);
	}

	$savefunc = 'image'.$dinfo['ext'];//动态函数调用
	$savefunc($dim,$save);

	imagedestroy($dim);
	imagedestroy($wim);

	return true;
}



/*
thumb 生成缩略图
等比例缩放，两边留白
 */

public static function thumb($dst,$save=NULL,$width=200,$height=200){
	//首先判断待处理图片是否存在
	$dinfo = self::imageInfo($dst);
	if ($dinfo == false) {
		return false;
	}
	//计算缩放比例
	$calc = min($width/$dinfo['width'],$height/$dinfo['height']);

	//创建原始图画布
	$dfunc = 'imagecreatefrom'.$dinfo['ext'];
	$dim = $dfunc($dst);

	//创建缩略图画布
	$tim = imagecreatetruecolor($width,$height);

	//创建白色填充颜料
	$white = imagecolorallocate($tim,255,255,255);

	//填充缩略图画布
	imagefill($tim,0,0,$white);

	//复制并缩略

	//缩略图的缩略图画布上实际大小
	$dwidth = (int)$dinfo['width']*$calc;
	$dheight = (int)$dinfo['height']*$calc;

	//缩略图在缩略图画布上的居中定位点
	$paddingx = (int)($width-$dwidth)/2;
	$paddingy = (int)($height-$dheight)/2;
	imagecopyresampled($tim,$dim,$paddingx,$paddingy,0,0,$dwidth,$dheight,$dinfo['width'],$dinfo['height']);

	//保存图片
	if (!$save) {
		$save = $dst;
		unlink($dst);
	}

	//输出
	$savefunc = 'image'.$dinfo['ext'];
	$savefunc($tim,$save);


	//销毁
	imagedestroy($dim);
	imagedestroy($tim);

	return true;


}








}


//图片信息提取测试
//print_r(ImageTool::imageInfo('./home.jpg'));
//Array ( [width] => 670 [height] => 503 [ext] => jpeg ) 


/*
加水印测试
echo ImageTool::water('./home.jpg','./feng.png','./home1.png',0)?'OK':'FAIL';
echo ImageTool::water('./home.jpg','./feng.png','./home2.png',1)?'OK':'FAIL';
echo ImageTool::water('./home.jpg','./feng.png','./home3.png',2)?'OK':'FAIL';
echo ImageTool::water('./home.jpg','./feng.png','./home4.png',3)?'OK':'FAIL';
*/
/*
缩略图测试

echo ImageTool::thumb('./feng.png','./feng1.png',200,200)?'OK':'FAIL';
echo ImageTool::thumb('./feng.png','./feng2.png',200,300)?'OK':'FAIL';
echo ImageTool::thumb('./feng.png','./feng3.png',300,200)?'OK':'FAIL';

 */








































?>


