<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-12 21:12:47
 * @version $Id$
 */
/***
====笔记部分====
用迭代法找子孙树
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



function tree($arr,$parent=0){
	$task = array($parent);// 任务表 栈
	$tree = array();// 地区表

	while(!empty($task)){
			$flag = false;


		foreach ($arr as $k => $v) {
			if ($v['parent'] == $parent) {
				$tree[] = $v;
				array_push($task,$v['id']);// 把最新的地区id入任务栈
				$parent = $v['id'];//查找子目录;改变$parent继续找子孙
				unset($arr[$k]);//必须要删除,否则成死循环了;老是找到它// 把找到单元unset掉
				$flag = true;//说明找到了子栏目,$parent = $v['id'];这两个起到一个循环的作用
			}
		}
		if ($flag == false) {
			array_pop($task);//出栈
			$parent = end($task);//寻找栈顶id的子节点
		}
		print_r($task);//根据这个打印的结果来分析这个程序更容易理解过程
	}
	return $tree;
}

print_r(tree($area,0));




/*
    function gettree($arr,$id){
            $res=array();
            $task=array($id);
            while(!empty($task)){
                    $parent=array_pop($task);
                    foreach($arr as $v){
                            if($v['parent']==$parent){
                                    array_push($res,$v);
                                    array_push($task,$v['id']);
                            }
                    }
            }
            return $res;
    }
    print_r(gettree($area,0));

    */
?>