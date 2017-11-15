<?php 
 $pdo=new PDO('mysql:host=localhost;dbname=test','root','1234');
 //设置字符集
 $pdo->exec('set names utf8');
 //设置为FETCHALL()关联数组
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 ?>