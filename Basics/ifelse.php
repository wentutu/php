<?php
	//new instanceof 运算符
 class Person{};
  $obj=new Person();
 var_dump($obj instanceof Person);
 //=>运算符
 $arr=array(
 	'name'=>'userl',
 	'age'=>'20'
 	);
 print_r($arr);
 //->运算符
 class Pen{
 	public $name='pen';
 }
 $pen=new Pen();
 echo $pen->name;
?>