<?php
//目录遍历 
 $dir='imgs';
 $od=opendir($dir);

 while($file=readdir($od)){
 	if($file!='.'&&$file!='..'){
 		echo $file."<br>";
 	}
 	
 	}
 
//目录遍历
 $arr=scandir($dir);
  foreach ($arr as $key => $val) {
  	if($key<2){
  		continue;
  	}
  	echo $val."<br>";
  }
 ?>
