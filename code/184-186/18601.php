<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 21:36:47
 * @version $Id$
 */


//=====================186-cookie案例之计数器与浏览历史=======================
/*
把uri放在cookie里

setcookie('history',array($uri));

这是错误写法,因为cookie只能存储字符串,数字,不能存储数组,资源这样的多维数据

因此$uri要放在数组里,但数组要转化成字符串
*/

$uri = $_SERVER['REQUEST_URI'];


if(!isset($_COOKIE['history'])) {//第一次访问
	$his[] = $uri;
}else{//已经是第N次访问了
	$his = explode('|',$_COOKIE['history']);
	//$his[] = $uri;//把当前的url加入历史纪录数组
	array_unshift($his,$uri);//为了把最近历史纪录显示在上面而用的这个
	$his = array_unique($his);//去除重复显示的历史记录

	if (count($his) > 10) {//限制历史记录10个
		array_pop($his);
	}
}

setcookie('history',implode('|',$his));


$id = isset($_GET['id'])?$_GET['id']:0;

?>

<p>
    <a href="18601.php?id=<?php echo $id-1; ?>">上一页</a> <br />
</p>

<p>
    <a href="18601.php?id=<?php echo $id+1; ?>">下一页</a> <br />
</p>

<ul>
    <li>浏览历史</li>
    <?php foreach($his as $v) { ?>
    <li><?php echo $v; ?></li>
    <?php } ?>
</ul>

