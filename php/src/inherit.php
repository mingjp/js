<?php
	/*
		访问控制
			* public（公有，默认）：公有的类成员可以在任何地方被访问。
			* private（私有）：私有的类成员只能在类本身中访问。
			* protected（受保护）：受保护的类成员只能在类本身、子类、父类中访问。
			* static（静态）：声明类属性或方法为静态，就可以不实例化类而直接访问
				* 访问方式：类名::方法
	 */
	
	class Person{
		// 成员属性
		var $type = '人类';

		// 构造函数
		function __construct($name,$age){
			// 成员属性
			$this->name = $name;
			$this->age = $age;
		}


		// 成员方法
		// 公有
		public function eat(){
			echo "我叫{$this->name}，今年{$this->age}岁<br>";

		}

		// 私有
		private function coding(){
			echo "coding html5<br>";
			$this->eat();
		}

		// 受保护
		protected function doo(){
			// 在类内部可调用私有方法
			$this->coding();
		}
	}


	// 创建实例
	$p = new Person('lemon',28);

	// 调用方法
	$p->eat();


	
	// 继承
	// extends
	// 父类：Person
	// 子类：Man
	class Man extends Person{


		function play(){
			echo $this->doo();

			// self：当前类Man
			// parent: 父类Person
			self::work();


		}

		// 静态属性
		// 在静态方法中不能使用$this
		static function work(){
			echo "my name is laoxie, I enjoy working";
		}
	}

	$m = new Man('laoxie',18);


	var_dump($m);


	$m->eat();//公有属性/方法可以继承
	// $m->coding();//私有属性/方法不可以继承
	// $m->doo();//私有属性/方法不可以继承
	$m->play();
	// $m->work();

	// Man::work();
?>