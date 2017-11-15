<?php 
//继承
class Person{
 public $name;
 public $age;
 public $sex;
 public function __construct($n,$a,$s){
   $this->name=$n;
   $this->age=$a;
   $this->sex=$s;

 }
 public function say(){
 	echo '<h1>'.$this->name.'</h1>';
 }
}
class It extends Person{
 
 public $program;
 function __construct($n,$a,$s,$p){
       parent::__construct($n,$a,$s);
       $this->program=$p;
 }

 public function develop(){
 	echo "<h1>{$this->name}正在开发{$this->program}项目</h1>";
 }	
}
$obj=new It('小文',22,'nan','java');
$obj->say();
$obj->develop();
 ?>