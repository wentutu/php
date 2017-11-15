<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>日历表</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="ajanuw">
	<meta name="description" content="ajanuw">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class="row">
	<div class="row bg-light" style="
    margin-left: 50%;
    margin-top: 50%;
    transform: translate3d(-50%,-50%,0);
">
		<?php

echo "<table class='table table-bordered text-center table-sm'>";
   $data=1;  
for($i=1;$i<=6;$i++){
	 echo '<tr>';
	 if(($i>=2)&&($i%2==0)){
       echo '<tr style="background:#aaf;">';
	 }elseif ($i>2) {
	 	 echo '<tr style="background:red;">';
	 }
  for($j=1;$j<=7;$j++){
  	if($i==1){
  		echo '<th scope="col"> 周'.w($j).'</th>';
  	}else{
  		if($data<=31){
  		echo '<td> '.$data.'</td>';		
  		}else{
  		echo '<td> &nbsp;</td>';		
  		}
    	
    	$data++;
  	}
      
  } 
  echo "</tr>"; 
	}

echo "</table>";

 function w($n){
  switch ($n) {
  	case '1':
  		return "一";
  		break;
  	case '2':
  		return "二";
  		break;
  	case '3':
  		return "三";
  		break;
  	case '4':
  		return "四";
  		break;
  	case '5':
  		return "五";
  		break;
  	case '6':
  		return "六";
  		break;
  	case '7':
  		return "日";
  		break;

  	
  	default:
  		# code...
  		break;
  }
 }
?>
	</div>
</div>



</body>
</html>