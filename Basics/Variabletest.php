<?php
//gettype获取类型结果
//$a='10';
//$a=10;
//$a=10.0;
//$a=array();
//class Person{};
//$a=new Person();
//$conn=mysql_connect('localhost','root','1234');
//$a=null;
//echo gettype($conn);


//精准判断
//var_dump(is_int($a));
//var_dump(is_string($a));
//var_dump(is_double($a));
//var_dump(is_array($a));
//var_dump(is_object($a));
//var_dump(is_null($a));
//var_dump(is_resource($conn));

//判断一个变量是否为标量
//$conn=mysql_connect('localhost','root','1234');
//var_dump(is_scalar($conn));

//判断一个是否是数字
//$a=123;
//var_dump(is_numeric($a));

//判断是否是一个函数
function show(){}
var_dump(is_callable('show'));

//echo bool类型的值时结果为1或者空
//变量类型的自动转换
//1、整形转字符串
//$a=10
//$str=$a."qqq";
//echo "{$str}";
//2.字符串转整形
$a="1+2";
echo $a+10 ."<br/>";//11

//3.所有类型转布尔型
/*
$a=null;
$a='0';
$a=false;
$a=array();
$a=0
$a=0.0;
$a=null;
这些转布尔型为false 其余都为true
*/
/*$a=1;
if($a){
	echo 'yes';

}else{
	echo "on";
}*/
//变量类型的强制转换
$b="12345";
//var_dump((int)$b);
//var_dump((float)$b);
//var_dump((string)$b);
/*var_dump((bool)$b);
var_dump((array)$b);
$obj=(object)$b;
echo $obj->scalar;
*/

//常量
define('HOST','locathost');
define('USR','root');
define('PASS','1234');
echo  HOST;
//判断一个常量是否存在
$host=defined('HOST');
var_dump($host);
//预定义常量
echo M_PI;
echo "<br>";
function show22 (){
	echo 'my name is'.__FUNCTION__.'!!!!<br>';
	echo 'my name is'.__FUNCTION__.'!!!!<br>';
	echo 'my name is'.__FUNCTION__.'!!!!<br>';
}

show22();

//运算符

//1一元
// ++ --
$w=10;
echo ++$w;
echo $w--;
echo "<br>";

//2.二元运算符
//数学运算符号
//赋值运算符
for($i=0;$i<10;$i++){
    if($i%2==0){
    	echo $i.'<br>';
    }
}
//逻辑运算 && || !
$a=3;
$b=4;
if($a=5 &&($b=6)){
  $a+=1;
  $b+=1;
}
echo $a;
echo "<br>";
echo $b;
//3.三元运算符
$r=($w=60)?'及格':'不及格';

//二进制转十进制
//101=5
//100=4
 echo 5|4;
 echo 5&4;
?>