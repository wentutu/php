<?php 
class Person{
  public $name='user123';
 //定义类常量
  const HOST='www.baidu.com'; 
  public $age=20;
  function say(){
  	echo "my name is {$this->name}";
  }
}

 ?>