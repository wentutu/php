<?php  
 //当前年
$year=$_GET['m']?$_GET['y']:date('Y');
//当前月
$month=$_GET['m']?$_GET['m']:date('m');
//计算当前月1号的时间戳
$fristday=strtotime("{$year}-{$month}-1");

//当前月的天数
$days=date('t',$fristday);

//当前月1号是周几
$week=date('w',$fristday);
//下一年下一月
$nextyear=$year;
$nextmonth=$month+1;
if($nextmonth>12){
 $nextyear= $year+1;
 $nextmonth=1;
}
//下一年上一月
$prevyear=$year;
$prevmonth=$month-1;
if($prevmonth<1){
 $prevyear= $year-1;
 $prevmonth=12;
}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <title>万年历</title>
	 <style>
	 	*{

	 		font_family:微软雅黑;
	 	}
	 	a{
	 		text-decoration: none;
	 		color: #272816;
	 	}
	 </style>
</head>
<body>
	<center>
		<h2>万年历-<?php echo $year;?>年<?php
		echo $month?>月</h2>
  		<table border="1px" cellspacing="0" width="700px">
  			<tr>
  				<th>周日</th>
  				<th>周一</th>
  				<th>周二</th>
  				<th>周三</th>
  				<th>周四</th>
  				<th>周五</th>
  				<th>周六</th>
  			</tr>
  			<?php
  			
  				for($i=(1-$week);$i<$days;){
  					echo "<tr>";
  						for ($j=0; $j < 7; $j++,$i++){
  						if(($i>$days)||($i<1)){
							echo "<td>&nbsp;</td>";
  						}else{
							echo "<td>{$i}</td>";
  						} 
  							
  						}
  					echo "</tr>";
  				}
  			?>
  		</table>
  		<h3>
  			<a href="date.php?y=<?php echo $prevyear; ?>&m=<?php echo $prevmonth; ?>">上一月</a>|<a href="date.php?y=<?php echo $nextyear; ?>&m=<?php echo $nextmonth; ?>">下一月</a>
  		</h3>
	</center>

</body>
</html>