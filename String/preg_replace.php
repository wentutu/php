
<?php

$str='2017-11+6';
//换成2017\11=6
echo preg_replace('/(\d+)\-(\d+)\+(\d+)/','$1/$2=$3',$str);

?>
