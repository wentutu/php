<?php 
 class Upan{
 	private $name='user1';
 	function start(){
		echo "<h3>usb start </h3>";
	}
	//给类增加一个说明
    function  __toString(){
    	return '这是一个U盘使用的类';
    }
    //调用类中不存在的方法时 会自动调用
    function __call($i,$j){
       echo '你调用的'.$i.'方法不存在<br>';
    }
    function __get($i){
    	echo '你无权访问'.$i.'成员<br>';
    }
    function __set($i,$j){
    echo '你无权设置'.$i."成员值为{$j}<br>";	
    }
    function __isset($i){
    	echo "你无权查看{$i}!";
    }
 }
$obj=new Upan();
echo $obj ;
$obj->stop();
echo $obj->name;
$obj->name=22;
isset($obj->name);
 ?>
