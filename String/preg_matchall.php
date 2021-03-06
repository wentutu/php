<?php 
//preg_match正则匹配
$str='php 5  a777nd and  66666 and 8888888';
//^取反,除了0-9的任意字符==/D
$ptn='/[^0-9]/';

// * 任意前面的多个原子
$ptn='/[0-9]*/';

// + 多个原子（至少一个）
$ptn='/[0-9]+/';

//? 匹配一个 前面的原子可有可无
$ptn='/[0-9]?/';

//\b词边界
$ptn='/\b\d\b/';

//\B非词边界
$ptn='/\B\d\B/';

//匹配三个前面的原子
$ptn='/\d{3}/';

//匹配三个到7前面的原子
$ptn='/\d{3,7}/';

//匹配三个到7前面的原子U（贪婪模式）
$ptn='/\d{3,7}/U';

//匹配三个以上前面的原子
$ptn='/\d{3,}/';

// ^ 以什么开始 $
//从左往右匹配一个
//echo preg_match($ptn,$str,$mt);
//匹配所有的
echo preg_match_all($ptn,$str,$mt);
echo "<pre>";
print_r($mt);
echo "</pre>";
 ?>