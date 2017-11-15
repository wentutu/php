
<?php 
//preg_match正则匹配
$str='- php 5 and  6 pap and pbp and linux is lamp and LINUX and PHP';
$ptn='/php/';

//匹配任意一个字符 i忽略大小写
$ptn='/p.p/i';

//匹配任意一个数字
$ptn='/[0-9]/';
$ptn='/\d/';
//匹配任意一个小写字母
$ptn='/[a-z]/';


//匹配任意一个大写字母
$ptn='/[A-Z]/';

//匹配php或者linux |
$ptn='/php|linux/';

//匹配非数字
$ptn='/\D/';

//\w 匹配任意一个字母、数字下划线
$ptn='/\w/';

//\W 除了字母、数字下划线
$ptn='/\W/';

//\s匹配空格
$ptn='/\s/';

//\S 匹配除了空格
$ptn='/\S/';

//从左往右匹配一个
//echo preg_match($ptn,$str,$mt);
//匹配所有的
echo preg_match_all($ptn,$str,$mt);
echo "<pre>";
print_r($mt);
echo "</pre>";

 ?>