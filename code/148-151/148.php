<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-12 10:08:36
 * @version $Id$
 */


//=======================148框架改进r3版之递归转义================

/***
====笔记部分====
Warning: Call-time pass-by-reference has been deprecated
Fatal error: Call-time pass-by-reference has been removed

在tieba项目中,有同学报出这么两种错误.
***/


/*
$age = 10;
function grow($age) {
    $age += 1;
    return $age;
}


echo grow($age),'<br />';  // 11
echo $age,'<br />';         // 10

// 确实想改外部$age的值,可以这样
$age = grow($age);
*/

error_reporting(E_ALL|E_STRICT);

$age = 10;
function grow($age) {
    $age += 1;
    return $age;
}

echo grow($age),'<br />';  // 11
echo $age,'<br />';         // 11

/*
第2个函数,用的是引用传值,
函数内部的$age 和 全局$age 指向的是同一个变量地址.
因此,内部变化,影响了外部的变量


但是--仔细思考,这种写法,有一个非常不好的地方
违反了封装性.

函数运行之后,对外部的环境应该是"没有副作用的".


因此:对函数进行引用传参,是不推荐的!
在PHP5.0以上就不推荐了,
PHP5.4的时候,干脆删除了引用传参这个功能.


因此:allow_call_time_pass_reference = Off
这个选项如果off,即不推荐引用传参,会报warning

而在php5.4版本中,彻底不允许引用传参,
因此,报fatal error



解决办法: 
1: allow_call_time_pass_reference = On 重启apache
但不推荐这样来做,归根结底,引用传参数不够规范.

2: 不引用传参,自己写方法来递归的转义数组
*/



/***
====笔记部分====
递归对数组进行转义
***/


// 这是一个3维数组
$arr = array('a"b',array("c'd",array('e"f')));



// 先写一个1维数组的转义函数
function _addslashes($arr) {
    foreach($arr as $k=>$v) {
        if(is_string($v)) {
            $arr[$k] = addslashes($v);
        } else if(is_array($v)) {  // 再加判断,如果是数组,调用自身,再转
            $arr[$k] = _addslashes($v);
        }
    }
    return $arr;
}

print_r(_addslashes($arr)); // 递归转义后的数组

print_r($arr);      // 原来的值


// 这个递归 就没有用到引用传参

//  如果确定要改全局的$arr,可以把转义的返回值,再次赋给$arr

$arr = _addslashes($arr);







































?>