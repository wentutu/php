<?php 
  $dir='imgs';
  $arr=scandir($dir);
  echo '<table width="700px" cellspacing="0" border="1" align="center">';
  foreach ($arr as $key => $val) {
  	if($key>1){
     $file=$dir."/".$val;
    // echo $file;
     echo '<tr align="center">';
     echo "<td><img src='{$file}'  width='200px'> </td>";
     echo "<td> <a href='download.php?file={$val}'>下载</td>";
     echo "</tr>";

  	}
  }
echo "</table>";
 ?>