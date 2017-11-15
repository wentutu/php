<?php
//递归删除不为空的文件夹 
 $file='imgs';
 function delDir($dir){
    $files=scandir($dir);
    foreach ($files as $key => $val) {
    	if($key>1){
    		$file=$dir.'/'.$val;
    		if(is_dir($file)){
    			delDir($file);
    		}else{
    		unlink($file);
    		}
    	}
    }
    rmdir($dir);
 }
delDir($file);
 ?>