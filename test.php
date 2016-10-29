<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-13 14:37:37
 * @version $Id$
 */
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

function tree($arr,$id){
	$tree = array();

	while($id!==0){
		foreach ($arr as $k => $v) {
			if ($v['id'] == $id) {
				$tree[] = $v;
				$id = $v['parent'];
				break;
			}
		}
	}
	return $tree;
}

print_r(tree($area,6));


































































/*
//递归查找家谱树
function familytree($arr,$id){
	static $tree = array();
	foreach ($arr as $k => $v) {

		if ($v['id'] == $id) {

			if ($v['parent'] > 0) {
				familytree($arr,$v['parent']);
			}
			$tree[] = $v;
		}
	}
	return $tree;
}



print_r(familytree($area,8));

*/

















/*
用递归查找子孙数$id
parent   -> id



function sontree($arr,$id=0,$lev=1){
	$tree = array();
	foreach ($arr as $k => $v) {
		if ($v['parent'] == $id) {
			$v['lev']=$lev;
			$tree[] = $v;
			$tree = array_merge($tree,sontree($arr,$v['id'],$lev+1));
		}
	}
	return $tree;
}


$tree = sontree($area,0,1);

foreach($tree as $v){
	echo str_repeat('&nbsp;&nbsp;',$v['lev']),$v['name'],'<br />';
}



//用迭代写子孙树
function sontree ($arr,$parent=0){
	$work = array($parent);
	$tree = array();

	while (!empty($work)) {
		$flag = false;

		foreach ($arr as $k => $v) {
		if ($v['parent'] == $parent) {
			$tree[] = $v;
			array_push($work,$v['id']);
			$parent = $v['id'];
			unset($arr[$k]);
			$flag = true;
		}
	}

	if ($flag == false) {
		array_pop($work);
		$parent = end($work);
	}
	//print_r($work);
	}
	return $tree;
}

print_r(sontree($area,0));

 */

?>