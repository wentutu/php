<?php 
//抽象类(含有抽象方法的类是抽象类 继承抽象类必须实现父类的 抽象方法)
abstract class Usb{
	function start(){
		echo "<h3>usb start </h3>";
	}
	function run(){
		echo "<h3>usb run </h3>";
	}
	//抽象方法
	abstract function stop();
}
class Upan extends Usb{
	function stop(){
		echo "<h3>usb unload</h3>";
	}
	function explode(){
		echo "<h3>usb explode</h3>";
	}
}
$obj=new Upan();
$obj->start();
$obj->run();
$obj->stop();
$obj->explode();
 ?>
