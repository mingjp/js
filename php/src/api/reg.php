<?php
	/*
		功能：判断用户名是否被占用
		isset():用于判断是否传递参数

	 */
	$username = isset($_GET['username']) ? $_GET['username'] : '请传递username参数';

	// 已经存在的用户名
	$data = array('张三','李四','王尼玛','奥巴马','laoxie');

	// 判断用户名是否已经存在
	if(in_array($username, $data)){
		// 如果已经存在,则不能注册,向前端返回no
		echo "no";
	}else{
		echo "yes";
	}

	// echo "$username";

	// echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>