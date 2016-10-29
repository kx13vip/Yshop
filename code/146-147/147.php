<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 20:31:22
 * @version $Id$
 */
//======================147.迭代itercate与递归的区别联系===================


/***
====笔记部分====
递归与迭代的区别与联系

递归自身调用自身,每一次调用把问题简化,直到问题解决.

sum(10) 不会算,难.
10 + sum(9)->不会算,难
         9 + sum(8)-->
         ....
              .....
                 2+ sum(1)
                      返回1,简单

即:把大的任务拆成相同性质的多个小任务.
以昨天的 猴子摘桃为例
|   |   |   |   |
变成5只猴子来,每只狮子只接1颗桃

即: 人多,每人完成一件.


思考: 如果是只普通猴子,变不出第2只猴子来,只能自己摘
应该: 走走走,走到最右边,从右到左,一个个摘回来
这次 1只猴子把要作的工作列出,每次做一步.
1只猴子做多步工作.

迭代:就是指在某个范围内,反复执行相同工作.



递归: 5只猴子,每只猴子,摘1颗桃,完成1步工作
迭代: 1只猴子,这只儿子,摘5颗桃,完成5步工作



***/

function recsum($n) {
    if($n > 1) {
        return $n + recsum($n-1);
    } else {
        return 1;
    }

}


/*
这是一个典型的递归调用,
在计算出结果前,最多的时候,共有10个函数同时运行.
*/
echo recsum(10),'<br />';


//下面这是个典型的迭代工作
function itsum($n) {
    for($sum=0,$i=1;$i<n;$i++) {
        $sum += $i;
    }
    return $sum;
}

/***
====笔记部分====
理论上:(借助栈)递归都是可以转化为迭代的!
***/



/*
迭代来创建级联目录
./a/b/c/d

思路:要把从浅到深创建目录的步骤,列成单子.
然后1只小猴,一层层的去创建
*/

function mk_dir($path) {
    $arr = array();
    
    while(!is_dir($path)) {
        // 例 /a/b/c/d 如果不目录,则是我的工作
        // array_unshift($arr,$path);
        array_push($arr,$path); //工作计划入栈
        $path = dirname($path);
    }

    //print_r($arr);

    if(empty($arr)) {
        return true;
    }

    // 工作计划出栈
    /*
    foreach($arr as $v){
    	echo '创建',$v,'成功<br />';
    	mkdir($v);
    	//上面的array_unshift()压入头部;
    }
     */

    while(count($arr)) {
        echo $tmp = array_pop($arr),'出栈<br />';
        mkdir($tmp);
    }

    return true;
}


mk_dir('./a/b/c/d/e');








































?>