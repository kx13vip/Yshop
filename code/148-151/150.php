<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-12 20:19:08
 * @version $Id$
 */

/***
====笔记部分====
无限级分类,求家谱树


家谱树的应用 ,如面包屑导航 首页 > 手机类型 > CDMA手机 > 公益PHP > 递归应用
***/



$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2)
);

/*
人肉上地的家谱树

上地[parent == 2]
海淀[id==2,parent==7]
北京[id==7,parent==0]

parnet==0,到头了.....


思路:只要parent!=0,就继续找

*/

/*
function familytree($arr,$id) {
    static $tree = array();
    
    foreach($arr as $v) {
        if($v['id'] == $id) {
            $tree[] = $v; // 以找到上地为例

            // 判断要不要找父栏目
            if($v['parent'] > 0) { // parnet>0,说明有父栏目
                familytree($arr,$v['parent']);
            }
        }
    }

    return $tree;
}
*/

/*
function familytree($arr,$id) {
    $tree = array();
    
    foreach($arr as $v) {
        if($v['id'] == $id) {
            $tree[] = $v; // 以找到上地为例

            // 判断要不要找父栏目
            if($v['parent'] > 0) { // parnet>0,说明有父栏目
                $tree = array_merge($tree,familytree($arr,$v['parent']));
            }
        }
    }

    return $tree;
}

print_r(familytree($area,8)); // 上地->海淀->北京
*/


function familytree($arr,$id) {
    $tree = array();
    
    foreach($arr as $v) {
        if($v['id'] == $id) {// 判断要不要找父栏目
            if($v['parent'] > 0) { // parnet>0,说明有父栏目
                $tree = array_merge($tree,familytree($arr,$v['parent']));
            }

            $tree[] = $v; // 以找到上地为例
        }
    }

    return $tree;
}

print_r(familytree($area,8)); // 北京->海淀->上地









































?>