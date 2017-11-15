<?php
//统计数字个数
  $arr=array(
	'name' =>'user',
	'age'=>'20',
	'sex'=>'nan'
  	 );
function sum($arr){
      $tot=0;
  	foreach($arr as $val){
  		$tot ++;
  	}
  	return $tot;
  }
  echo  sum($arr);
?>