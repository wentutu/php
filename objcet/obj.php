<?php 
include 'obj.class.php';
$obj=new Person();
$obj->name='user456';
$obj->say();
//类常量直接调用
echo Person::HOST;
 ?>