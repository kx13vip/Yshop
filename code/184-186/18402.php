<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 19:16:41
 * @version $Id$
 */

//======================184-深入理解cookie概念========================
/*
接18401.php跳转过来的
 */

if (!defined('USER')) {
	echo '你没有登陆';
	exit;
}


//如果把这行代码控制住，非本站用户不能看
echo '这部份代码非常重要！当你看到时，说明你已是本站的用户<br />';
echo 'very important!';



/*
最后显示结果是没有登陆，说明没有‘接过来’；被清零了，这种登陆状态无法保持
也就没有起到想要的作用，所以此方法也不行

 */

?>