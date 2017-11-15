<?php 
//类定义
//文件名要与类名相同
//类名的每个单词首字母大写,是最为严格的驼峰式写法
 class Person{
 	//属性
   public $name;
   public $age;
   public $sex;
   //构造方法
   function __construct($n,$a,$s){
   	$this->name=$n;
   	$this->age=$a;
   	$this->sex=$s;
   }
   //析构方法
   function __destruct(){
   	echo "我是 {$this->name} ,我还会回来的";
   }
   //方法
  function say(){
  	echo "hello world! my name is {$this->name},my age is {$this->age},my sex is {$this->sex}! ";
  }

 }
 //类实例化对象
 $user1=new Person('tt',20,'nan');
 //调用方法
 $user1->say();
 //调用成员
 echo '<br>';
 echo $user1->name;
 echo '<br>';
 echo $user1->age;
 echo '<br>';
 echo $user1->sex;
 ?>