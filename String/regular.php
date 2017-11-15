<?php
//手机位数的验证 
 $str='13558859497';
//if(preg_match('/^\d{11}$/',$str)==1){
 //检查手机是否以139开头
 //if(preg_match('/^139\d{8}$/',$str)==1){
 	//检查是否是QQ邮箱
 	$str='1297890157@qq.com';
 if(preg_match('/^\d{6,11}@qq.com$/',$str)==1){
	echo "格式正确";

}else{
	echo "格式错误";

} 
 ?>