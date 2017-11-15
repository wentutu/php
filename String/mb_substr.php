<?php 
  //中文截取
	$str='我是小文，我是中国人';
	echo "<a href='javascript:' title='{$str}'>".mb_substr($str,0,4)."...</a>";

 ?>