
CREATE TABLE `test`.`mess` ( `id` INT UNSIGNED NOT NULL COMMENT 'id编号' , `info` TEXT NOT NULL COMMENT '留言信息' ) ENGINE = MyISAM;


<?php 
//把html转实体
$str="<h1>aaaaa</h1>";
  echo htmlspecialchars($str);
 ?>