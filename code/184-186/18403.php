<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-09-05 19:32:00
 * @version $Id$
 */
//======================184-深入理解cookie概念========================

/*
思考：
18401.php中的常量/变量，是和18402毫无关系
因此，18401.php中作了用户名/密码的验证，到18402.php使不上

总不能每个页面都需要提交用户名/密码吧

生活中的场景:
一群人,买豆浆,也不排队,乱哄哄的
豆浆现磨.
先交钱,交完钱蹲在一边等.



这个老板----非常健忘! 记忆时间:转脸就忘.

李四给老板钱<--->"大杯黄豆!"  交互结束.

李四来取豆浆时(这已经是和老板再一次打交道了),
而老板早已忘的干干净净.

请问:如何帮助老板记住客户!!!


解决方案:
每当有人交完钱,
老板发给他一个小纸片:
"红豆1杯","绿豆一杯","黄豆一杯" 


当你来取豆浆时,拿着牌子来!

 */

// 给你牌子!
echo '给你zhangsan牌子';
setcookie('user','zhangsan');



/*
在cookie与session前面不能有输出，如果有会出现如下错误提示
warning:cannot modify header information-headers aleready sent by 
 */















?>