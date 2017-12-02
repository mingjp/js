<?php
	//变量声明（全局）
	//$为修饰符
	$myName = "my name is laoxie";

	echo $myName . "<br>";


	/*
		作用域
			* 全局变量：定义在全局作用域中的变量
			* 局部变量：定义在函数内的变量
				* 在局部使用全局变量
					* 使用$GLOBALS超级变量
					* 使用global关键字
		
		并置运算符：.

	 */
	
	function showName(){
		// 局部
		$hi = 'hi';


		// $myName = $GLOBALS['myName'];
		global $myName;

		// 双引号内部可直接写变量
		echo "$hi, $myName";
	}

	// 执行函数
	showName();


	

?>