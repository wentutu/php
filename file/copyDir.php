<?php 
//拷贝目录
 $dir='imgs';
  function copyDir($dir,$dir2){
  	mkdir($dir2);
    $files=scandir($dir);
    foreach ($files as $key => $val) {
    	if($key>1){
    		$file1=$dir.'/'.$val;
    		$file2=$dir2.'/'.$val;
    		if(is_dir($file1)){
    		 copyDir($file1,$file2);
    		}else{
    		copy($file1, $file2);
    		}
    	}
    }

  }

copyDir($dir,'imgs1');
 ?>