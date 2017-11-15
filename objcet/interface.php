<?php 
//接口(调用必须实现所有的的方法)
 interface Usb{
 	//全部否是抽象方法，不予许出现方法体
   function start();
   function run();
   function stop();
 }

 class Upan implements Usb{
 	function start(){
		echo "<h3>usb start </h3>";
	}
	function run(){
		echo "<h3>usb run </h3>";
	}
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