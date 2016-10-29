<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-12 18:19:48
 * @version $Id$
 */
//=================无限级分类之查找子孙树=======================

/***
====笔记部分====
再见 static
***/



function t() {
    $age = 5;

    $age += 1;
    
    return $age;
}


echo t(),'<br />';

echo t(),'<br />';
echo t(),'<br />';


/*

每调用一次t函数

t函数就要初始化$age = 5;
并执行,

因此 6 6 6


函数就是个封装的执行体,前后执行,没有联系 这是正常的.

要想让$age 不每次初始化,可以使用static 静态变量
*/

function st() {
    static $age = 5;
    $age += 1;
    return $age;
}

echo st(),'<br />';
echo st(),'<br />';
echo st(),'<br />';



/***
在函数中声明的static 静态变量,
无论此函数调用多少次,只初始化一次.

以后就会直接沿用该变量,
这在递归时,很有用.



static总结
1: 修饰类的属性与方法为静态属性,静态方法
2: static::method(), 延迟绑定
3: 在函数/方法中,声明静态变量用
***/

/***
====笔记部分====
数组的加,和merge
***/

$a = array('a','b');
$b = array(2=>'c',3=>'d');


print_r($a + $b);
//这样相加,如果有键值相同的,会覆盖掉









































?>