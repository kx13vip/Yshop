<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 19:38:44
 * @version $Id$
 */

//=========================146-递归实战之级联目录创建与删除===============


//echo mkdir('./a')?'ok':'fail';

// 失败,没有b目录,导致c目录创建失败
// echo mkdir('./b/c')?'ok':'fail';


/*
递归创建目录
要求:自己写函数
完成一次创建  ./a/b/c/d/e目录 这种级联目录
*/


/*
function mk_dir($path) {
    // 运气非常好,这个目录直接存在,返回true就可以了
    if(is_dir($path)) {
        return true;
    }

    // 运气一般好,目录的父目录存在
    if(is_dir(dirname($path))) {
        return mkdir($path);
    }

    // 运气比较差,父目录也不存在, 创建父目录
    mk_dir(dirname($path));
    return mkdir($path);

}


echo mk_dir('./a/b/c/d/e/f')?'OK':'fail';
*/


/*
function mk_dir($path) {
    // 如果目录已经存在,直接返回
    if(is_dir($path)) {
        return true;
    }


    // 如果目录不存在,创建.
    // 问题:父目录就一定存在吗?
    // 答:不一定.
    // 因此我要求你保证:
    // 父目录存在 ,或者你帮我创建了父目录

    return is_dir(dirname($path))||mk_dir(dirname($path))?mkdir($path):false;
}


echo mk_dir('./aa/bb/cc')?'ok':'fail';
*/


/**
上面的两种递归创建级联目录,是为了练习递归
在开发中,没必要如此,
PHP5的mkdir函数,自身就能够创建级联目录
**/

//echo mkdir('./aaa/bbb/ccc',0777,true)?'OK':'fail';

echo mkdir('./a/b/c/d/e/f',0777,true)?'OK':'fail';

































?>