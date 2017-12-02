<?php

	/*
		* 数值数组 - 带有数字索引值的数组
		* 关联数组 - 带有指定的键的数组，每个键关联一个值
		* 多维数组 - 包含一个或多个数组的数组
	 */
	// 创建数值数组
	$arr = array(10,20,'html5','css','js');

	echo $arr[2] . '<br>';
	print_r($arr);

	// var_dump多用于测试
	var_dump($arr);


	// 创建关联数组
	// 类似js中的对象
	$arr_goods = array(
		"title"=>"iphone7 plus",
		"price"=>998,
		"color"=>"白色"
	);


	var_dump($arr_goods);
	echo $arr_goods['price'];

	// 遍历值数组：for
	echo "<h4>遍历值数组</h4>";
	$arr2 = array('html','css','js','php');
	for($i=0;$i<count($arr2);$i++){
		echo "<p>$arr2[$i]</p>";
	}

	// 遍历关联数组：foreach
	echo "<h4>遍历关联数组</h4>";
	foreach ($arr_goods as $item=>$val) {
		echo "<p>$item : $val</p>";
	}



	// 写入
	$arr3 = array(10,20,30);

	// 往数组后添加
	for($i=0;$i<5;$i++){
		$arr3[] = 40+$i;
	}
	

	var_dump($arr3);
?>