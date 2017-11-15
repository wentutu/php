<?php 
//获取一个类到底实例化多少个对象？
class Person{
	//静态属性
public static $tot;
public $name='user123';
  function __construct(){
  //SELF 本类
  	SELF::$tot++;
  }
  //静态方法
 static  function say(){
  	echo "my name is user123";
  }

}
$obj1=new Person();
$obj2=new Person();
$obj3=new Person();
$obj4=new Person();
$obj5=new Person();
$obj6=new Person();
$obj7=new Person();
echo Person::$tot;
Person ::say();
 ?>