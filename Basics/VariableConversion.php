<?php
$str='123';
echo $str;
//变量测试是否存在
$a='123';
var_dump(isset($a));
//isset 变量不存在为flase
//empty()
//以下7种情况为空
/*
$a=null;
$a='0';
$a=false;
$a=array();
$a=0
$a=0.0;
$a=null;
*/
var_dump(empty($a));
?>